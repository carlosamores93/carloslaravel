<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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

        $test = array('Y' => 1896, 'M' => 8, 'D' => 7);
        $msg = $this->recordarCumpleaños('Test', $test);
        $this->info($msg);

/*
        $carlosCumple = array('Y' => 1993, 'M' => 3, 'D' => 1);
        $msg = $this->recordarCumpleaños('Carlos Amores', $carlosCumple);
        $this->info($msg);

        $camila = array('Y' => 2016, 'M' => 12, 'D' => 17);
        $msg = $this->recordarCumpleaños('Camila Amores', $camila);
        $this->info($msg);
*/

        if($msg === 'NO'){
            $asunto = "Test NO";
            $msg = "Mesaje al correo, TEST NO";
            mail('admin@amorescarlos.com', $asunto, $msg);
            mail('amorescarlos93@hotmail.com', $asunto, $msg);
            mail('carlos-ecua-23@hotmail.com', $asunto, $msg);
        }else{
            $asunto = "Test SI";
            $msg = "Mesaje al correo, TEST SI";
            mail('admin@amorescarlos.com', $asunto, $msg);
            mail('amorescarlos93@hotmail.com', $asunto, $msg);
            mail('carlos-ecua-23@hotmail.com', $asunto, $msg);
        }

        /*
        $asunto = "Cumple Carlos Amores";
        $msg = "Mesaje al correo";
        mail('admin@amorescarlos.com', $asunto, $msg);
        mail('amorescarlos93@hotmail.com', $asunto, $msg);
        mail('carlos-ecua-23@hotmail.com', $asunto, $msg);
        */
        //$this->probandoFechas();
    }

    public function recordarCumpleaños($name, $fecha){
        $msg = 'NO';
        $dateNow = Carbon::now();
        if($dateNow->month === $fecha['M'] && $dateNow->day === $fecha['D']){
            $edad = $dateNow->year - $fecha['Y'];
            $msg = $name . " cumple hoy " . $edad . ' años';
        }
        return $msg;
    }


    public function probandoFechas(){
        $now = Carbon::now();
        $this->info('Now: ' . $now);


        $today = Carbon::today();
        $this->info('Today: ' . $today);


        $tomorrow = Carbon::tomorrow('Europe/London');
        $this->info('Tomorrow: ' . $tomorrow);


        $yesterday = Carbon::yesterday();
        $this->info('Yesterday: ' . $yesterday);  


        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $this->info('Date now: ' . $date);
        $this->info('Date now->toDateTimeString(): ' . $date->toDateTimeString());
        $this->info('Date now YEAR: ' . $date->year);


        /*
        Carbon::createFromDate($year, $month, $day, $tz);
        Carbon::createFromTime($hour, $minute, $second, $tz);
        Carbon::createFromTimeString("$hour:$minute:$second", $tz);
        Carbon::create($year, $month, $day, $hour, $minute, $second, $tz);
         */

        $xmasThisYear = Carbon::createFromDate(null, 12, 25);
        // Year defaults to current year
        $this->info('xmasThisYear: ' . $xmasThisYear);


        $Y2K = Carbon::create(2000, 1, 1, 0, 0, 0); 
        // equivalent to Carbon::createMidnightDate(2000, 1, 1)
        $this->info('Y2K: ' . $Y2K);


        $alsoY2K = Carbon::create(1999, 12, 31, 24);
        $this->info('alsoY2K: ' . $alsoY2K);


        $noonLondonTz = Carbon::createFromTime(12, 0, 0, 'Europe/London');
        $this->info('noonLondonTz: ' . $noonLondonTz);


        $teaTime = Carbon::createFromTimeString('17:00:00', 'Europe/London');
        $this->info('teaTime: ' . $teaTime);


        try {
            Carbon::createSafe(2000, 1, 35, 13, 0, 0);
        } catch (\Carbon\Exceptions\InvalidDateException $exp) {
            $this->error($exp->getMessage());
        }

    }
}
