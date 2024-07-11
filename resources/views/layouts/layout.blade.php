<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Vite --}}
    @vite(['resources/bootstrap.js'])

    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/40616cb1b1.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-nav />
    {{ $slot }}
</body>

</html>
