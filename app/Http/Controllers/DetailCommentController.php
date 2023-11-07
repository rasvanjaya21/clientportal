<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class DetailCommentController extends Controller
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
        $data = $request->password;


        // if ($data != $client->password) {
        //     return view('pages.detailsubmit', [
        //         'client' => $client,
        //         'projecttotal' => $project,
        //     ]);
        // }

        return view('pages.detailcomment', [
            'client' => $client,
            'projecttotal' => $project,

        ]);
    }
}
