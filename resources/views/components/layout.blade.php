<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Your Note</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script defer src="https://cdn.tailwindcss.com"></script>
</head>
<body>
        <x-header/>
    <main class="container mx-auto my-3">
        {{$slot}}
    </main>
    <footer>
        <x-footer/>
    </footer>
</body>
</html>