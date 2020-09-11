<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchGithubUserNameRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GithubController extends Controller
{
    public function search(SearchGithubUserNameRequest $request)
    {
        return back();
    }
}
