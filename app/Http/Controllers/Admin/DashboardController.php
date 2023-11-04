<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = User::count();
        $client = Client::count();
        $project = Project::count();
        return view('pages.admin.dashboard', [
            'admin' => $admin,
            'client' => $client,
            'project' => $project,
        ]);
    }
}