<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;


class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $client = Client::with(['projects'])->where('slug', $id)->firstOrFail();
        $project = Project::all()->where('clients_id', $client->id)->count();
        return view('pages.detail', [
            'client' => $client,
            'projecttotal' => $project
        ]);
    }
}
