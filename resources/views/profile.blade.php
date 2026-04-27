@extends('layouts.app')

@section('container')

<div class="flex justify-center items-center min-h-[70vh]">

    <div class="bg-white w-full max-w-md rounded-xl shadow-md p-6 text-center space-y-4">

        <img src="{{ asset('images/sailor-piece-sea-2-update.webp') }}"
             alt="Profile"
             class="w-28 h-28 mx-auto rounded-full object-cover border-2 border-black">

        <h1 class="text-xl font-bold">
            {{ session('username') }}
        </h1>

        <p class="text-gray-500">
            Sailor Piece Player
        </p>

        <a href="/logout"
           class="inline-block bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
            Logout
        </a>

    </div>

</div>

@endsection
