<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Helpers\Contracts\ScraperContract;

class ScraperController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('scraper.index');
    }
    
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function execute(ScraperContract $scraper)
	{
        $boom = $scraper->scrape();

        die("pippo");
	}
}