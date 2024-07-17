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

    public function createLinkForm(){
        return view('admin.links.create_form');
    }

    public function storeNewLink(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'destination' => 'required|url|max:255',
            'have_icon' => 'sometimes|string',
            'icon_class' => 'nullable|string|max:255',
            'icon_position' => 'nullable|string|max:255',
        ]);

        $validatedData['have_icon'] = $request->has('have_icon');

        $link = new Link();
        $link->name = $validatedData['name'];
        $link->destination = $validatedData['destination'];
        $link->have_icon = $validatedData['have_icon'];
        $link->icon_class = $validatedData['icon_class'];
        $link->icon_position = $validatedData['icon_position'];
        $link->save();

        return redirect()->route('links.list')->with('success', 'Le lien a bien été ajouté');
    }

    public function delete(int $link_id){
        $link = Link::findOrFail($link_id);
        $link->delete();
        return redirect()->route('links.list')->with('success', 'Le lien a bien été supprimé');
    }
}
