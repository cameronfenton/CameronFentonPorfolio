<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cameron Fenton's Projects</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    <link rel="stylesheet" href="{{ mix('css/project.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ mix('js/theme-toggle.js') }}" defer></script>
</head>

<body>
    <x-navigation />

    <x-theme-toggle-button />

    <div class="projects-body">
        <div class="projects-container">
            <h1 class="projects-title">My Projects</h1>

            <div class="projects-grid">
                @foreach ($projects as $project)
                    <div class="project-card" x-data="{ showModal: false }">
                        <h2 class="project-title">{{ $project['name'] }}</h2>
                        <p class="project-description">{{ $project['description'] }}</p>
                        <div class="project-footer">
                            <div class="project-buttons">
                                <button @click="showModal = true" class="project-link">
                                    More Info
                                </button>
                                <a href="{{ $project['html_url'] }}" class="project-link" target="_blank">
                                    View on GitHub
                                </a>
                            </div>
                            <span class="project-language">
                                {{ $project['language'] ?? 'N/A' }}
                            </span>
                        </div>

                        <!-- Modal -->
                        <div class="modal-backdrop" x-show="showModal" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.self="showModal = false">
                            <div class="modal-content" @click.stop>
                                <button @click="showModal = false" class="modal-close">&times;</button>
                                <div class="modal-header">
                                    <h2 class="project-title">{{ $project['name'] }}</h2>
                                </div>
                                <div class="project-description">
                                    <a href="{{ $project['html_url'] }}" target="_blank">
                                        View on GitHub
                                    </a>
                                    <h3><strong>Description</strong></h3>
                                    <p>{{ $project['description'] }}</p>

                                    <h3><strong>Language Breakdown</strong></h3>
                                    <div class="language-stats">
                                        @if (!empty($project['languages']))
                                            <div class="language-bars">
                                                @foreach ($project['languages'] as $language => $bytes)
                                                    <div class="language-bar">
                                                        <span class="language-name">{{ $language }}</span>
                                                        <span class="language-percentage">
                                                            {{ round(($bytes / array_sum($project['languages'])) * 100, 1) }}%
                                                        </span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            No language statistics available.
                                        @endif
                                    </div>

                                    <h3><strong>README</strong></h3>
                                    <div class="project-readme">
                                        {!! $project['readme'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>