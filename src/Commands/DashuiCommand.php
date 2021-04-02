<?php

namespace Combindma\Dashui\Commands;

use Illuminate\Console\Command;

class DashuiCommand extends Command
{
    public $signature = 'dashui';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
