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
        $url = "https://api.github.com/users/{$this->username}/repos";
        $headers = [
            'Authorization' => "token {$this->token}",
            'Accept' => 'application/vnd.github.v3+json',
        ];

        $response = Cache::remember('github.projects', 60, function () use ($url, $headers) {
            try {
                return $this->client->request('GET', $url, ['headers' => $headers]);
            } catch (\Exception $e) {
                Log::error('GitHub API request failed: ' . $e->getMessage());
                throw $e;
            }
        });

        //Log::info('GitHub API response: ' . $response->getBody());
        return json_decode($response->getBody(), true);
    }
}
