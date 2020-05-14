<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentoCarloController extends Controller
{

    public function show_result(Request $request){
        /* read from user */

        $size_array = $request['size_array'];

        $demand    =  array();
        $frequency =  array();

        for ( $i = 1 ; $i <= $size_array ; $i++)
        {
            array_push($demand,$request['demand'.$i]);
            array_push($frequency,$request['frequency'.$i]);
        }
        if(empty($demand) || empty($frequency))
            return redirect('/')->with('message', 'empty');

//        if(count($demand) == 0 || isEmpty())

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
        if(gettype($cumulative[0]) == 'integer')
            $max = 0;
        else{
            $parts = explode('.', (string) $cumulative[0]);
            $max = $parts[1];
        }
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
