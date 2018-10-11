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
    protected $description = 'Probando comando de Carlos Amores';

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
    public function handle(){

        /*
        $test = array('Y' => 2015, 'M' => 8, 'D' => 8);
        $msg = $this->recordarCumpleaños('Prueba Carlos', $test);
        $this->enviarCorreo($msg);
        */

        $carlos = array('Y' => 1993, 'M' => 3, 'D' => 1);
        $msg = $this->recordarCumpleaños('Carlos Amores', $carlos);
        $this->enviarCorreo($msg);

        $maria = array('Y' => 1992, 'M' => 3, 'D' => 14);
        $msg = $this->recordarCumpleaños('Maria B', $maria);
        $this->enviarCorreo($msg);

        $dogor = array('Y' => 1991, 'M' => 12, 'D' => 18);
        $msg = $this->recordarCumpleaños('Diego Duque, alias Lucho', $dogor);
        $this->enviarCorreo($msg);

        $patricio = array('Y' => 1994, 'M' => 11, 'D' => 3);
        $msg = $this->recordarCumpleaños('Patricio Amores', $patricio);
        $this->enviarCorreo($msg);

        $camila = array('Y' => 2016, 'M' => 12, 'D' => 17);
        $msg = $this->recordarCumpleaños('Camila Leonor Amores Obando', $camila);
        $this->enviarCorreo($msg);

        $jessica = array('Y' => 1995, 'M' => 6, 'D' => 15);
        $msg = $this->recordarCumpleaños('Jessica Obando', $jessica);
        $this->enviarCorreo($msg);

        $moises = array('Y' => 1975, 'M' => 9, 'D' => 24);
        $msg = $this->recordarCumpleaños('Moises Amores', $moises);
        $this->enviarCorreo($msg);


        $pili = array('Y' => 2006, 'M' => 9, 'D' => 19);
        $msg = $this->recordarCumpleaños('Priscila Anahí Amores Barahona', $pili);
        $this->enviarCorreo($msg);

        $don_manuel = array('Y' => 1900, 'M' => 9, 'D' => 22);
        $msg = $this->recordarCumpleaños('Don Manuel', $don_manuel);
        $this->enviarCorreo($msg);

        $wera = array('Y' => 1990, 'M' => 10, 'D' => 5);
        $msg = $this->recordarCumpleaños('Lorena Miranda', $wera);
        $this->enviarCorreo($msg);

        $oscar = array('Y' => 2005, 'M' => 12, 'D' => 9);
        $msg = $this->recordarCumpleaños('Oscar Alejandro Naranjo Amores, alias Raposo', $oscar);
        $this->enviarCorreo($msg);

        $miguel_angel = array('Y' => 2001, 'M' => 12, 'D' => 28);
        $msg = $this->recordarCumpleaños('Miguel Angel', $miguel_angel);
        $this->enviarCorreo($msg);

        $tia_amada = array('Y' => 1972, 'M' => 12, 'D' => 26);
        $msg = $this->recordarCumpleaños('Amada Leonor Amores Neto', $tia_amada);
        $this->enviarCorreo($msg);

        $ahinoga = array('Y' => 2018, 'M' => 9, 'D' => 9);
        $msg = $this->recordarCumpleaños('Ahinoa Valentina Amores Cuje', $ahinoga);
        $this->enviarCorreo($msg);

        $pillin_willi = array('Y' => 1999, 'M' => 1, 'D' => 13);
        $msg = $this->recordarCumpleaños('Pillin William', $pillin_willi);
        $this->enviarCorreo($msg);

        $jenny = array('Y' => 1993, 'M' => 1, 'D' => 22);
        $msg = $this->recordarCumpleaños('Jenny, ñaña Victor', $jenny);
        $this->enviarCorreo($msg);

        $andrea = array('Y' => 2005, 'M' => 5, 'D' => 10);
        $msg = $this->recordarCumpleaños('Andrea Amores', $andrea);
        $this->enviarCorreo($msg);

        $eulalia = array('Y' => 1979, 'M' => 6, 'D' => 2);
        $msg = $this->recordarCumpleaños('Eulalia Amores', $eulalia);
        $this->enviarCorreo($msg);

        $mama = array('Y' => 1970, 'M' => 7, 'D' => 3);
        $msg = $this->recordarCumpleaños('Mamaaaaaaaaaaaa', $mama);
        $this->enviarCorreo($msg);

        $leonor = array('Y' => 1939, 'M' => 7, 'D' => 31);
        $msg = $this->recordarCumpleaños('Abuelita Leonor', $leonor);
        $this->enviarCorreo($msg);

        $marcelo = array('Y' => 1974, 'M' => 9, 'D' => 1);
        $msg = $this->recordarCumpleaños('Abuelita Leonor', $marcelo);
        $this->enviarCorreo($msg);


        $papa = array('Y' => 1967, 'M' => 8, 'D' => 2);
        $msg = $this->recordarCumpleaños('Papaaaaaaa', $papa);
        $this->enviarCorreo($msg);





        $asunto = 'Teste envio Email';
        $mensaje = 'Hora de envio: ' . Carbon::now();
        mail('admin@amorescarlos.com', $asunto, $mensaje);

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
            $msg = $name . " hoy cumple " . $edad . ' anios.';
        }
        return $msg;
    }

    public function enviarCorreo($msg){
        if($msg !== 'NO'){
            $asunto = 'Recordatorio 🎂 cumpleanhos';
            $mensaje = $msg . ' - Hora de envio: ' . Carbon::now();
            mail('admin@amorescarlos.com', $asunto, $mensaje);
            mail('amorescarlos93@hotmail.com', $asunto, $mensaje);
            mail('carlos-ecua-23@hotmail.com', $asunto, $mensaje);
        }
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
