<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sailor Piece Guide</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 min-h-screen flex flex-col">

    @include('components.navbar')

    <main class="flex-1 p-6">
        @yield('container')
    </main>

    @include('components.footer')

</body>
</html>
