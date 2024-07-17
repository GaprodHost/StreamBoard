@extends('layouts.app')

@section('title', 'Mise à jour de l\'application')

@section('content')
    <div class="container mx-auto mt-5">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-5">Mise à jour de l'application</h2>
            <form method="POST" action="{{ route('update.perform') }}">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Mettre à jour
                </button>
            </form>
        </div>
    </div>
@endsection
