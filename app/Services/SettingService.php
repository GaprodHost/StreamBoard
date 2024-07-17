<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SettingService
{
    protected $settings;

    public function __construct()
    {
        $this->settings = DB::table('settings')->pluck('value', 'key')->toArray();
    }

    public function get($key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }

    public function all()
    {
        return $this->settings;
    }
}
