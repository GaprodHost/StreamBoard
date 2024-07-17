@extends('layouts.dashboard')

@section('title', 'Ajouter un lien')

@section('right_header')
    <a href="{{ route('links.list') }}"
       class="inline-flex items-center rounded-md bg-white border border-gray-200 px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
        <i class="fa fa-arrow-left mr-2"></i> Retour
    </a>
@endsection

@section('content')
    <div class="bg-white">
        <form method="POST" action="{{ route('links.store') }}">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Ajout d'un lien sur votre page d'accueil</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Pour ajouter un lien sur votre page, il vous suffit de remplir le formulaire et de sauvegarder en cliquant sur "Ajouter".</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Titre du lien</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input required type="text" name="name" id="name" value="{{ old('name') }}"
                                           class="pl-3 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="Ex: Gaprod, Twitter, Instagram...">
                                </div>
                                @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Ce qui sera visible sur votre page d'accueil</p>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="destination" class="block text-sm font-medium leading-6 text-gray-900">Destination (URL)</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input required type="text" name="destination" id="destination" value="{{ old('destination') }}"
                                           class="pl-3 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                           placeholder="Ex: https://www.gaprod.host/">
                                </div>
                                @error('destination')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Où doit-être redirigé la personne ?</p>
                        </div>
                        <div x-data="{ checkboxes: [false] }" class="sm:col-span-4">
                            <div class="flex items-center gap-x-3">
                                <input id="have_icon" name="have_icon" type="checkbox"
                                       class="h-4 w-4 border-gray-300 text-emerald-600 focus:ring-emerald-600"
                                       value="true" x-model="checkboxes[0]">
                                <label for="have_icon" class="block text-sm font-medium leading-6 text-gray-900">Voulez-vous ajouter un icône?</label>
                            </div>
                            <div x-show="checkboxes[0]" class="sm:col-span-4">
                                <div class="sm:col-span-4 mt-8">
                                    <label for="icon_class" class="block text-sm font-medium leading-6 text-gray-900">Identifiant de l'icone (Font Awesome 6 - Free)</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input :required="checkboxes[0]" type="text" name="icon_class" id="icon_class" value="{{ old('icon_class') }}"
                                                   class="pl-3 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                   placeholder="Ex: fa fa-rocket">
                                        </div>
                                        @error('icon_class')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-4 mt-8">
                                    <fieldset>
                                        <legend class="text-sm font-semibold leading-6 text-gray-900">Position de l'icône</legend>
                                        <div class="mt-6 space-y-6">
                                            <div class="flex items-center gap-x-3">
                                                <input id="before" name="icon_position" type="radio"
                                                       class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                       value="before" {{ old('icon_position', 'before') == 'before' ? 'checked' : '' }}>
                                                <label for="before" class="block text-sm font-medium leading-6 text-gray-900">Début</label>
                                            </div>
                                            @error('icon_position')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                            <div class="flex items-center gap-x-3">
                                                <input id="after" name="icon_position" type="radio"
                                                       class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                                       value="after" {{ old('icon_position') == 'after' ? 'checked' : '' }}>
                                                <label for="after" class="block text-sm font-medium leading-6 text-gray-900">Fin</label>
                                            </div>
                                            @error('icon_position')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Ajouter le lien
                    </button>
                </div>
        </form>
    </div>
@endsection
