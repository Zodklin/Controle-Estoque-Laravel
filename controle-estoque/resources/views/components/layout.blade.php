<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="dark:bg-gray-600">
    <div class="max-w-4xl p-6 mx-auto bg-white rounded-md dark:bg-gray-800 container">
        <h1 class="uppercase mb-8 mt-4 text-2xl text-white">{{ $title }}</h1>
        {{ $slot }}
    </div>

</body>
</html>