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
            Tableau
        @endif
    </div>
@endsection
