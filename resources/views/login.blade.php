@extends('layouts.app')

@section('container')

<div class="flex justify-center items-center min-h-[70vh]">

    <div class="bg-white w-full max-w-md rounded-xl shadow-md p-6 border border-gray-300">
        <h1 class="text-xl font-bold mb-6 text-center">Login</h1>
        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <input type="text"
                   name="username"
                   placeholder="Username"
                   class="w-full p-3 rounded-lg bg-gray-100 focus:outline-none">

            <input type="password"
                   name="password"
                   placeholder="Password"
                   class="w-full p-3 rounded-lg bg-gray-100 focus:outline-none">

            <button type="submit"
                    class="w-full bg-black text-white py-2 rounded-lg hover:bg-gray-800 transition">
                Login
            </button>
        </form>
    </div>

</div>

@endsection
