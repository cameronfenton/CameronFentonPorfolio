<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cameron Fenton's Portfolio</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ mix('js/theme-toggle.js') }}" defer></script>
</head>

<body>
    <x-navigation />

    <x-theme-toggle-button />

    <!-- Portfolio Content -->
    <div class="portfolio-container">
        <div class="content-wrapper">
            <div class="typewriter-container">
                <h1 class="typewriter">Cameron Fenton's Portfolio</h1>
            </div>
            <div class="button-container">
                <a href="{{ url('projects') }}" class="portfolio-button">View Projects</a>
                <a href="https://www.linkedin.com/in/cameron-fenton/" class="portfolio-button" target="_blank">LinkedIn
                    Profile</a>
            </div>
        </div>
    </div>
</body>

</html>