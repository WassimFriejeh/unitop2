<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UniTop</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <tallstackui:script />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @yield('mainContent')

    <script>
        window.addEventListener('load', function() {
            window.NourhanWebsiteFunctions.InitializeWebsite();
            window.WassimWebsiteFunctions.InitializeWebsite();
        });
        // window.addEventListener('livewire:navigated', function () { window.WebsiteFunctions.InitializeWebsite(); });
    </script>
    <script type="text/javascript" src="https://unpkg.com/youtube-background/jquery.youtube-background.js"></script>
    <script type="module">
        $(document).ready(function() {
            const videoBackgrounds = new VideoBackgrounds('[data-vbg]');
        });
    </script>
    @yield('master-scripts')
    @livewireScripts
</body>

</html>
