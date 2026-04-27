@extends('layouts.app')

@section('container')

<div class="space-y-6">

    <div class="bg-white rounded-xl p-6 shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold">
            Pengelolaan Weapons
        </h1>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-x-auto">

        <table class="w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">No</th>
                    <th class="p-3 text-left">Gambar</th>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">Lokasi</th>
                    <th class="p-3 text-left">Cara Mendapatkan</th>

                    <th class="p-3 text-left">
                        <div class="flex justify-between items-center">
                            <span>Aksi</span>

                            <button class="bg-black text-white text-xs px-3 py-1 rounded hover:bg-gray-800 transition">
                                + Tambah
                            </button>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($weapons as $i => $item)
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3">{{ $i + 1 }}</td>

                    <td class="p-3">
                        <img src="{{ asset($item['gambar']) }}"
                             alt="{{ $item['nama'] }}"
                             class="w-12 h-12 object-cover rounded">
                    </td>

                    <td class="p-3 font-semibold">
                        {{ $item['nama'] }}
                    </td>

                    <td class="p-3">
                        {{ $item['lokasi'] }}
                    </td>

                    <td class="p-3">
                        @foreach($item['cara'] as $c)
                            • {{ $c }} <br>
                        @endforeach
                    </td>

                    <td class="p-3">
                        <div class="flex gap-2">
                            <button class="bg-gray-800 text-white text-xs px-3 py-1 rounded hover:bg-gray-700">
                                Edit
                            </button>

                            <button class="bg-red-600 text-white text-xs px-3 py-1 rounded hover:bg-red-700">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
