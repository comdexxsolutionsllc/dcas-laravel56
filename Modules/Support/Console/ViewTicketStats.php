<?php

namespace Modules\Support\Console;

use Illuminate\Console\Command;
//use Modules\Support\Entities\Ticket;
//use Modules\Support\Entities\TicketStatus;
//use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputOption;

class ViewTicketStats extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'support:view-ticket-stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'View ticket status report.';

    ///**
    // * @var array
    // */
    //private $statuses;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        //$this->statuses = TicketStatus::pluck('status_name')->toArray();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$ticketStatus = $this->anticipate('Ticket status statistics to show', $this->statuses);

        //$this->makeTable($ticketStatus);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments(): array
    {
        return [
            [
                'status',
                null,
                InputOption::VALUE_REQUIRED,
                'A filter to only show a specific status.',
                'LATE_SLA',
            ],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [];
    }

    ///**
    // * @param string $status
    // */
    //protected function makeTable($status = 'LATE_SLA')
    //{
    //    $headers = [
    //        'category_id',
    //        'ticket_id',
    //        'title',
    //        'priority',
    //    ];
    //
    //    //$query = Ticket::whereStatus($status)->with('category')->get($headers);
    //
    //    //foreach($query as $q)
    //    //{
    //    //    dd($q);
    //    //}
    //    //
    //    //(new Table($this->output))
    //    //    ->setHeaders($headers)
    //    //    ->setRows($query->toArray())
    //    //    ->render();
    //}
}
