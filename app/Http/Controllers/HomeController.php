<?php

namespace App\Http\Controllers;

use App\Helpers\WebCrawler;
use App\Models\Novel;
use Illuminate\Http\Request;

use function Termwind\render;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function crawl(Novel $novel)
    {
        return (new WebCrawler($novel))
            ->getNovelDetails();
    }
}
