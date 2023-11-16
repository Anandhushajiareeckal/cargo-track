<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function tracking(Request $request)
{
    $track = request("track");
    $url = 'https://cargotrackapi.cyenosure.co.in/api/v1/getStatus'; // Replace with the actual API endpoint URL.
    $token = '33|pZK093IqvUHp9gWaicdv3RzxovMGuXiYQNsGqBWt69824be7'; // Replace with your authorization token.

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->post($url, [
        'search' => $track ,
    ]);

    // Check the response.
    if ($response->successful()) {
        $data = $response->json(); 
    } else {
        // Handle the error.
        $error = $response->json();
        // Handle the error response.
    }

    return $response;
}
}
