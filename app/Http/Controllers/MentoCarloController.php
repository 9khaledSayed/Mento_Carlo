<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentoCarloController extends Controller
{
    public function simulation(){
        /* read from user */
        $demand = [0,1,2,3,4,5];
        $frequency = [10,20,40,60,40,30];
        // calculate total frequency
        $total_frequency = array_sum($frequency);
        $probabilities = [];
        // calculate probabilities
        for ($i = 0; $i < count($frequency); $i++){
            $probabilities[$i] = $frequency[$i]/$total_frequency;
        }
        // calculate cumulative
        $cumulative = [];
        for ($i = 0; $i < count($probabilities); $i++){
            $cumulative[$i] = 0;
            for($k = 0; $k <= $i; $k++)
                $cumulative[$i] += $probabilities[$k];
        }
        // generating intervals
        $parts = explode('.', (string) $cumulative[0]);
        $max = $parts[1];
        $intervals['1'] = $max;
        $start = $max + 1;
        for ($i = 1; $i < count($cumulative); $i++){
            $parts = explode('.', (string) $cumulative[$i]);
            if(isset($parts[1])){
                $max = $parts[1];
            }else{
                $max = 0;
            }
            $intervals[$start] = $max;
            $start = $max + 1;

        }
        $interval_keys = array_keys($intervals);
        $interval_values = array_values($intervals);
        $random_numbers = range(1, 100);
        shuffle($random_numbers);
        // select random numbers

       return view('solution' , compact(['total_frequency', 'probabilities', 'cumulative', 'interval_keys', 'interval_values' , 'demand']));
    }
}
