<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function list(){
        return view('admin.settings.list', ['settings' => Setting::all()]);
    }

    public function editForm(int $setting_id){
        return view('admin.settings.edit_form', ['setting' => Setting::find($setting_id)]);
    }

    public function storeUpdate(int $setting_id, Request $request){
        $setting = Setting::find($setting_id);
        $setting->value = $request->input('value');
        $setting->save();
        return redirect()->route('settings.list')->with('success', 'Le param a bien été sauvegardé');

    }
}
