<?php

namespace Astrogoat\FathomAnalytics\Commands;

use Illuminate\Console\Command;

class FathomAnalyticsCommand extends Command
{
    public $signature = 'fathom-analytics';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
