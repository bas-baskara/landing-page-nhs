<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Niagahoster</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <x-header.header />

        <main class="px-6 pt-20 md:pt-14 lg:pt-0 lg:px-16 w-full max-w-screen-xl mx-auto">
            <x-home.banner />
            <x-home.tech-list />
            <x-home.paket-hosting />
            <x-home.php-specs />
            <x-home.hosting-include />
            <x-home.laravel />
            <x-home.modul />
            <x-home.linux-hosting />
        </main>

        <footer class="overflow-hidden">
            <x-footer.social-sharing />
            <x-footer.main-footer />

        </footer>
    </body>
</html>
