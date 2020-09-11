<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchGithubUserNameRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GithubController extends Controller
{
    public function search(SearchGithubUserNameRequest $request)
    {
        return Inertia::render('Results', [
            'github_username' => $request->github_username
        ]);
    }
}
