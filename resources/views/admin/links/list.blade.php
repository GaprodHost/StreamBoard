@extends('layouts.dashboard')

@section('title', 'Liste des liens')

@section('right_header')
    <a href="{{ route('links.create') }}"
       class="inline-flex items-center rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
        <i class="fa fa-plus mr-2"></i> Ajouter un lien
    </a>
@endsection

@section('content')
    <div class="bg-white">
        @if($links->count() < 1)
            <div class="bg-gray-100 text-gray-800 flex gap-4 items-center p-4 justify-center">
                Il n'existe aucun lien encore. Pour ajouter ton premier lien, il te suffit de cliquer ici :
                <a href="{{ route('links.create') }}"
                   class="inline-flex items-center rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
                    <i class="fa fa-plus mr-2"></i> Ajouter un lien
                </a>
            </div>
        @else
            @foreach($links as $link)
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-4">
                    <div class="md:flex">
                        <div class="p-8 relative w-full">
                            <div class="absolute top-4 right-4">
                                <a href="{{ route('links.delete', ['link_id' => $link->id]) }}" class="text-sm text-red-600"><i class="fa fa-trash"></i> Supprimer</a>
                            </div>
                            <div
                                class="uppercase tracking-wide text-sm text-emerald-500 font-semibold">{{ $link->name }}</div>
                            <a href="{{ $link->destination }}"
                               class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{ $link->destination }}</a>
                            <p class="mt-2 text-gray-500">Icône: {{ $link->have_icon ? 'Oui' : 'Non' }}</p>
                            @if($link->have_icon)
                                <p class="mt-2 text-gray-500">Position de l'icône: {{ $link->icon_position }}</p>
                                <p class="mt-2 text-gray-500">Icône: <i class="{{ $link->icon_class }}"></i> {{ $link->icon_class }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
