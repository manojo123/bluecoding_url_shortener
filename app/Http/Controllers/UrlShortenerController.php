<?php

namespace App\Http\Controllers;

use App\Models\UrlShortener;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $url = UrlShortener::create([
            'original_url' => $request->original_url,
        ]);

        $url->save();

        return redirect('/url/' . $url->fresh()->id);
    }

    public function show(UrlShortener $url)
    {
        return view('show', compact('url'));
    }

    public function redirect($shortened_url)
    {
        $url = UrlShortener::where('shortened_url', $shortened_url)->first();

        if ($url) {
            $url->increment('hits');

            return redirect($url->original_url);
        }

        return back()->withMessage("Sorry, we couldn't find that URL.");
    }
}
