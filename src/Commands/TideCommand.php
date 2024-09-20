<?php

namespace Kehelle\Tide\Commands;

use Illuminate\Console\Command;

class TideCommand extends Command
{
    public $signature = 'tide';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
