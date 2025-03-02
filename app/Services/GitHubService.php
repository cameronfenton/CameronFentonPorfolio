<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class GitHubService
{
    protected $client;
    protected $username;
    protected $token;
    protected const CACHE_TTL = 3600; // Cache for 1 hour

    public function __construct()
    {
        $this->client = new Client([
            'verify' => !App::environment('local'), // Disable SSL verification only in local environment
        ]);
        $this->username = env('GITHUB_USERNAME');
        $this->token = env('GITHUB_TOKEN');
    }

    public function getProjects()
    {
        return Cache::remember('github.projects', self::CACHE_TTL, function () {
            try {
                $response = $this->fetchFromGitHub();
                return json_decode($response->getBody(), true);
            } catch (\Exception $e) {
                Log::error('GitHub API request failed: ' . $e->getMessage());
                // Return cached data if available, empty array if not
                return Cache::get('github.projects', []);
            }
        });
    }

    protected function fetchFromGitHub()
    {
        $url = "https://api.github.com/users/{$this->username}/repos";
        $headers = [
            'Authorization' => "token {$this->token}",
            'Accept' => 'application/vnd.github.v3+json',
        ];

        return $this->client->request('GET', $url, ['headers' => $headers]);
    }
}
