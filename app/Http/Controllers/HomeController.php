<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() : View {
        $url = 'http://127.0.0.1:8000/';

        $portfolio = DB::table('portfolios')
        ->where('status', '=', '1')
        ->get();

        $profile = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->get();

        $sosmed = DB::table('social_media')->get();

        $totalClients = DB::table('portfolios')
        ->select(DB::raw('COUNT(DISTINCT client) as total_client'))
        ->first();

        $totalPtoject = DB::table('portfolios')
        ->where('status', '=', '1')
        ->count();

        $totalClientCount = $totalClients->total_client;

        return view('index', compact(
            'url',
            'portfolio',
            'profile',
            'sosmed',
            'totalPtoject',
            'totalClientCount',
        ));
    }

    function portfolioDetail($id) : View {
        $url = 'http://127.0.0.1:8000/';

        $portfolio = DB::table('portfolios')
        ->where('id', '=', $id)
        ->where('status', '=', '1')
        ->get();

        $portfolioImage = DB::table('portfolio_images')
        ->where('portfolio_id', '=', $id)
        ->where('status', '=', '1')
        ->get();

        return view('detail', compact(
            'url',
            'portfolio',
            'portfolioImage',
        ));
    }
}
