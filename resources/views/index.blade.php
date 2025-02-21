<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="text-center text-white">
        <div class="typewriter-container">
            <h1 class="typewriter text-4xl font-bold text-red-500">Cameron Fenton's Portfolio</h1>
        </div>
        <div class="space-x-4">
            <a href="{{ url('projects') }}" class="bg-black text-red-500 px-6 py-3 rounded-lg border border-red-500 hover:bg-gray-800 transition duration-300">View Projects</a>
            <a href="{{ url('resume') }}" class="bg-black text-red-500 px-6 py-3 rounded-lg border border-red-500 hover:bg-gray-800 transition duration-300">View Resume</a>
            <a href="https://www.linkedin.com/in/cameron-fenton/" class="bg-black text-red-500 px-6 py-3 rounded-lg border border-red-500 hover:bg-gray-800 transition duration-300" target="_blank">LinkedIn Profile</a>
        </div>
    </div>
</body>
</html>
