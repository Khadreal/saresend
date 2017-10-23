<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class DeleteInActiveMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DeleteInActiveMail:deletemails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Inactive Mails';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        DB::table('files')->delete(1);
    }
}
