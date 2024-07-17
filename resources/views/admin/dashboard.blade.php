@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('content')
    <div class="bg-white">
        <div class="w-full bg-amber-100 text-amber-700 p-4 rounded mb-6">
            Cette fonctionnalité n'est pas encore disponible.
        </div>
        <div class="mx-auto w-full">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex w-full flex-col gap-y-4 bg-gray-100 rounded-md p-10">
                    <dt class="text-base leading-7 text-gray-600">Pages vues (24h)</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-3xl">N/A</dd>
                </div>
                <div class="mx-auto flex w-full flex-col gap-y-4 bg-gray-100 rounded-md p-10">
                    <dt class="text-base leading-7 text-gray-600">Clics (24h)</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-3xl">N/A</dd>
                </div>
                <div class="mx-auto flex w-full flex-col gap-y-4 bg-gray-100 rounded-md p-10">
                    <dt class="text-base leading-7 text-gray-600">New users annually</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-3xl">N/A</dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
