<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function login(Request $request)
    {
        try {
            $client = Client::with(['projects'])
                ->where('slug', $request->input('username'))
                ->where('password', $request->input('password'))
                ->first();

            if ($client) {
                return ResponseFormatter::successPost(
                    $client,
                    'Authentication Success'
                );
            } else {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed', 500);
            }
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }
}
