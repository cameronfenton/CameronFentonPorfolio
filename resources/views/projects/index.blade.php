<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cameron Fenton's Projects</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    <link rel="stylesheet" href="{{ mix('css/project.css') }}">
</head>
<body class="projects-body">
    <div class="projects-container">
        <h1 class="projects-title">My Projects</h1>
        
        <div class="projects-grid">
            @foreach ($projects as $project)
                <div class="project-card">
                    <h2 class="project-title">{{ $project['name'] }}</h2>
                    <p class="project-description">{{ $project['description'] }}</p>
                    <div class="project-footer">
                        <a href="{{ $project['html_url'] }}" 
                           class="project-link"
                           target="_blank">
                            View on GitHub
                        </a>
                        <span class="project-language">
                            {{ $project['language'] ?? 'N/A' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>