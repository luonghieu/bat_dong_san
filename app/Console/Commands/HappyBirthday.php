<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a Happy birthday message to users via SMS';

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
        Mail::send('folder.view', ['name'=>"name",'email'=>"email", 'content'=>'comment'], function($message) {
            $message->to('luonghieu.t3@gmail.com', 'Viblo')->subject('Welcome to the Viblo!');
        });
    }
}
