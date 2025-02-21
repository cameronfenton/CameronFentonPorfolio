<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;

class ProjectController extends Controller
{
    protected $gitHubService;

    public function __construct(GitHubService $gitHubService)
    {
        $this->gitHubService = $gitHubService;
    }

    public function index()
    {
        $projects = $this->gitHubService->getProjects();
        return view('projects.index', compact('projects'));
    }
}
