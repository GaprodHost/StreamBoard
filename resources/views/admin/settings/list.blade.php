@extends('layouts.dashboard')

@section('title', 'Paramètres')

@section('right_header')
@endsection

@section('content')
    <div class="bg-white">
        <div class="flex flex-col gap-4">
            <div class="flex gap-4 items-center border-b border-black/20 pb-4 font-bold">
                <span class="w-1/4">Nom</span>
                <span>Valeur</span>
                <span class="ml-auto">Action</span>
            </div>
            @foreach($settings as $setting)
                <div class="flex gap-4 pb-4 border-b border-black/10 items-center">
                    <span class="w-1/4">{{ $setting->key }}</span>
                    <span>{{ $setting->value }}</span>
                    <div class="ml-auto">
                        <a href="{{ route('settings.edit', ['setting_id' => $setting->id]) }}" class="inline-flex items-center rounded-md bg-white border border-gray-200 px-2 py-1 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 gap-2">
                            <i class="fa fa-pencil"></i> Éditer
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
