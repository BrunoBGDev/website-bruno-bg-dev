<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bruno Braga — Full Stack Developer especializado em Laravel, React e AWS.">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <title>
        {{ $title ?? 'Bruno Braga — Full Stack Developer' }}
    </title>

    <script>
        (() => {
            const theme = localStorage.getItem('portfolio-theme');

            if (theme === 'light') {
                document.documentElement.classList.add('light');
            }
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white antialiased">

    <div class="min-h-screen">
        {{ $slot }}
    </div>

</body>
</html>
