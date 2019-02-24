<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Combine extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'combine';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $tables = ['1', '2', '3', '4', '4', '6'];
        $tables = [1,2,3,4,5,6];
        $numeros = [];
        for ($j=0; $j < 60; $j++) { 
            $numeros[$j] = $j+1;
        }
        $array_combinaciones = $this->combinaciones($tables, 3);
        //dd($array_combinaciones);
        $combinaciones_primitiva = $this->combinaciones($numeros, 6);
        //dd($combinaciones_primitiva);
        for ($i=2; $i < 7; $i++) { 
            # code...
            $array_combinaciones = $this->combinaciones($tables, $i);
            //dd($array_combinaciones);
        }
    }

    public function potencia($c){
        if(count($c) == 0){
            return [[]];
        }
        $tmp = array_pop($c);
        $r = $this->potencia($c);
        $otro_array = array(array($tmp));
        foreach ($r as $rr) {
            if(count($rr) != 0){
                array_push($rr, $tmp);
                array_push($otro_array, $rr);
            }
        }
        $y = array_merge($r, $otro_array);
        return $y;
    }

    public function combinaciones($c, $n){
        $resp = [];
        foreach ($this->potencia(($c)) as $s) {
            if(count($s) == $n){
                //print_r($s);
                array_push($resp, $s);
            }
        }
        return $resp;
    }
}
