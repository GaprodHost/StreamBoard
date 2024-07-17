<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UpdateService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://api.github.com/']);
    }

    public function getLatestRelease($repository)
    {
        $response = $this->client->get("repos/{$repository}/releases/latest");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function downloadRelease($url, $path)
    {
        $response = $this->client->get($url);
        Storage::put($path, $response->getBody()->getContents());
    }

    public function extractRelease($path, $extractTo)
    {
        $zip = new ZipArchive;
        if ($zip->open(storage_path('app/' . $path)) === TRUE) {
            $zip->extractTo($extractTo);
            $zip->close();
            return true;
        } else {
            return false;
        }
    }

    public function replaceFiles($source, $destination)
    {
        $sourcePath = storage_path('app/' . $source);
        $destinationPath = base_path();

        if (File::copyDirectory($sourcePath, $destinationPath)) {
            return true;
        } else {
            return false;
        }
    }

    public function runMigrations()
    {
        try {
            Artisan::call('migrate', ['--force' => true]);
            return "Migrations executed successfully.";
        } catch (\Exception $e) {
            return "Failed to run migrations: " . $e->getMessage();
        }
    }

    public function updateApplication($repository)
    {
        $release = $this->getLatestRelease($repository);
        $zipUrl = $release['zipball_url'];
        $zipPath = 'releases/latest.zip';
        $tempExtractPath = 'releases/temp';

        $this->downloadRelease($zipUrl, $zipPath);

        if ($this->extractRelease($zipPath, storage_path('app/' . $tempExtractPath))) {
            if ($this->replaceFiles($tempExtractPath, base_path())) {
                $migrationStatus = $this->runMigrations();
                return "Application updated successfully! " . $migrationStatus;
            } else {
                return "Failed to replace the files.";
            }
        } else {
            return "Failed to extract the release.";
        }
    }
}
