<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
</head>
<body class="bg-gray-900 text-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-8 text-red-500">My Projects</h1>
        <div class="grid gap-6">
            @foreach ($projects as $project)
                <div class="bg-gray-800 shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-2 text-red-400">{{ $project['name'] }}</h2>
                    <p class="text-gray-300 mb-4">{{ $project['description'] }}</p>
                    <a href="{{ $project['html_url'] }}" class="text-red-500 hover:text-red-700">View on GitHub</a>
                </div>
            @endforeach
        </div>
    </div>
</html>
