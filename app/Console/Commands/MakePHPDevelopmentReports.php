<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakePHPDevelopmentReports extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dcas:make-phpdev-reports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make PHP coding development reports.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Generating PHP development reports (PHPCS, PHPMD).');

        exec('phpcs -s --standard=phpcs-ruleset.xml');
        exec('vendor/bin/phpmd app,config,routes html phpmd-ruleset.xml --exclude /Users/srenner/Code/dcas-laravel55/app/NullProfile.php,/Users/srenner/Code/dcas-laravel55/app/NullUser.php,/Users/srenner/Code/dcas-laravel55/app/Modules/SupportDesk/Models/Null* > public/phpmd.html');

        file_put_contents($file = 'public/phpcs.xml', str_replace('<?xml version="1.0" encoding="UTF-8"?>', '<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" href="http://82a6366e.ngrok.io/phpcs.xsl"?>', file_get_contents($file)));

        $this->info('PHPCS & PHPMD reports generated.');
    }
}
