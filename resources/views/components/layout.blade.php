<!DOCTYPE html>
<html lang="en">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.scss">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container">
        <h1>{{ $title }}</h1>

        {{ $slot }}
    </div>
</body>

</html>
