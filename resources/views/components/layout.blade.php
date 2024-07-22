<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.svg') }}" type="image/x-icon">
    <title>Next Job</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hanken-grotesk">
    <div class="aspect-auto max-h-500px">
        <x-nav-header />
        <main>
            {{ $slot }}
        </main>
        <footer>
            <x-footer />
        </footer>
    </div>
</body>
</html>