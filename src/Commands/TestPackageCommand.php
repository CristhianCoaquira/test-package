<?php

namespace Cristhiancoaquira\TestPackage\Commands;

use Illuminate\Console\Command;

class TestPackageCommand extends Command
{
    public $signature = 'test-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
