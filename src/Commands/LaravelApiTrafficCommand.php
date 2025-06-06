<?php

namespace Brightfish\LaravelApiTraffic\Commands;

use Illuminate\Console\Command;

class LaravelApiTrafficCommand extends Command
{
    public $signature = 'laravel-api-traffic';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
