<?php

namespace App\Console\Commands;

use App\Models\Models\Message;
use Illuminate\Console\Command;

class ClearDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laracarte:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean Database';

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
     * @return int
     */
    public function handle()
    {
        $this->info('Clean Database');
        //Message::where('created_at', '<=', Carbon::parse('2 months ago'));
        Message::twoMonthsOld()->delete();
        $this->info('Database Cleaned');
    }
    
}
