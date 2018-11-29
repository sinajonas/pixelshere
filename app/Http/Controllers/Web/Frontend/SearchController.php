<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function discover()
    {
        $portfolios = Portfolio::all();

        return view('discover', ['portfolios' => $portfolios]);
    }

    public function search(Request $request)
    {
        $request->validate([
           'query' => 'required'
        ]);

        $query = $request->input('query');
        $portfolios = Portfolio::where('name', 'like', "%$query%")
                                ->orWhere('id', 'like', "%$query%")
                                ->get();

        return view('search-results')->with('portfolios', $portfolios);
    }
}
