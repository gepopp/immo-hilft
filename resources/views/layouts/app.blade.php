<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IMMO-HILFT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3GG69ZBPML"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3GG69ZBPML');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-221589064-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-221589064-1');
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></script>
    <meta property="og:title" content="Immo Hilft" />
    <meta property="og:image" content="{{ asset('images/og_banner.png') }}" />
    <meta property="og:locale" content="de_DE" />
    <meta property="og:locale:alternate" content="uk_UK" />
    <meta property="og:locale:alternate" content="en_EN" />
    <meta property="og:description"
          content="ZUSAMMENHALTEN und VERANTWORTUNG ÜBERNEHMEN. Mit der Initiative „Immo hilft“ machen wir aus der Immobilienwirtschaft genau das.
" />
@livewireStyles

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
{{--        <x-jet-banner />--}}

<div class="min-h-screen">
@livewire('navigation-menu')

<!-- Page Heading -->
    @if (isset($header))
        <header class="shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
@endif

<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>


<footer class="mt-auto flex border-t">
    <div class="container flex flex-col md:flex-row justify-between text-sm py-4">
        <div class="flex space-x-5">
            <a href="{{ route('terms') }}">Datenschutzerklärung</a>
            <a href="{{ route('impressum') }}">Impressum</a>
        </div>
        <div>
            made with &#128150; by <a href="https://poppgerhard.at" target="_blank">poppgerhard.at</a>
        </div>
    </div>
</footer>


@stack('modals')

@livewireScripts
</body>
</html>
