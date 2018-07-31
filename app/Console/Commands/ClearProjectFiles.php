<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearProjectFiles extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dcas:clear-project-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear project files (compiled, cache, config, debugbar, route, view).';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Clearing project files...');

        $this->call('clear-compiled');
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('debugbar:clear');
        $this->call('route:clear');
        $this->call('view:clear');

        $this->info('Project files cleared.');
    }
}
