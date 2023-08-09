<?php

namespace SanlyApp\LTE\Commands;

use Illuminate\Console\Command;

class LTECommand extends Command
{
    public $signature = 'lte';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
