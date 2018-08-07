<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CarlosAmores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:carlos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Probando mi comando';

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
        $asunto = "Cumple Carlos Amores";
        $msg = "Mesaje al correo";
        mail('admin@amorescarlos.com', $asunto, $msg);
        mail('amorescarlos93@hotmail.com', $asunto, $msg);
        mail('carlos-ecua-23@hotmail.com', $asunto, $msg);
        $this->info("Yaaaaaa");
    }
}
