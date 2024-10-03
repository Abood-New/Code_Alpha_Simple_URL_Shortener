<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Str;

class UrlController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'orginal_url' => 'required|url'
        ]);

        $url = Url::create([
            'orginal_url' => $request->orginal_url,
            'short_code' => Str::random(6)
        ]);

        return response()->json([
            'short_link' => url("/api/{$url->short_code}")
        ]);
    }
    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();

        return redirect($url->orginal_url);
    }
}
