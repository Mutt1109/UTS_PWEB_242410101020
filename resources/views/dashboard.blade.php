@extends('layouts.app')

@section('container')
<div class="space-y-10">

    <div>
        <img src="{{ asset('images/SeaBeast.webp') }}"
             alt="Sea Beast"
             class="w-full h-auto object-contain shadow-md rounded-xl">
    </div>

    <div class="bg-white rounded-xl p-6 shadow-md">
        <h1 class="text-2xl font-bold mb-4">
            Welcome, {{ session('username') }}!
        </h1>
        <p class="text-gray-700 leading-relaxed">
            Sailor Piece adalah game open-world bertema laut yang terbagi menjadi dua lautan berbeda.
            Lautan pertama dirancang untuk pemain pemula, sedangkan Lautan kedua menghadirkan tantangan
            yang lebih kompleks dengan fitur-fitur lanjutan yang terbuka seiring progres permainan.
            Pemain akan menjelajahi berbagai pulau, masing-masing dengan level, misi, dan bos yang berbeda.
            <br><br>
            Sistem permainan ini berfokus pada progresi mendalam melalui mekanik pertarungan seperti gaya bertarung dan Haki,
            serta peningkatan karakter melalui klan, sifat (traits), dan ras. Di tahap late game,
            pemain akan semakin bergantung pada dungeon, rune, dan artefak untuk memperkuat karakter mereka.
            <br><br>
            Selain itu, terdapat fitur sosial berupa guild yang memungkinkan pemain bekerja sama, mengumpulkan poin,
            dan meningkatkan fasilitas guild. Guild terbaik akan masuk ke papan peringkat dan mendapatkan hadiah eksklusif
            seperti kosmetik, gelar, dan item khusus.
            <br><br>
            Dunia permainan juga dipenuhi oleh Monster Laut dan Boss Dunia yang tersebar di berbagai pulau.
            Setiap bos memiliki pengurangan damage (35% untuk boss biasa dan 40% untuk world boss),
            sehingga setiap pertarungan menjadi tantangan tersendiri dengan reward berupa loot dan material langka.
            <br><br>
            Secara keseluruhan, Sailor Piece adalah game yang cocok bagi pemain yang menyukai anime, eksplorasi dunia terbuka,
            dan pertarungan penuh aksi.
        </p>
    </div>

</div>
@endsection
