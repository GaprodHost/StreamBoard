<?php

namespace App\Http\Controllers;

use App\Services\UpdateService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    protected $updateService;

    public function __construct(UpdateService $updateService)
    {
        $this->updateService = $updateService;
    }

    public function show()
    {
        return view('update');
    }

    public function update(Request $request)
    {
        $repository = 'GaprodHost/StreamBoard';
        $result = $this->updateService->updateApplication($repository);

        return redirect()->route('update.show')->with('status', $result);
    }
}
