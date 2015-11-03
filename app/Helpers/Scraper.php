<?php

namespace app\Helpers;

use App\Helpers\Contracts\ScraperContract;

class Scraper implements ScraperContract
{

    public function scrape()
    {

        return 'Houston, we have ignition';

    }

}
