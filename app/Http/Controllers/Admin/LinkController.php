<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function list(){
        $links = Link::all();
        return view('admin.links.list', ['links' => $links]);
    }
}
