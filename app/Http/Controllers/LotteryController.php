<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryController extends Controller
{
 
     public function start(Request $request)
    {
        // Simulate a 3-second delay  
        sleep(180);

        // Generate a random number (1-10)
        $randomNumber = rand(1, 10);


        $colorIndex = rand(1, 3);
          $colors = ['#33ff57', '#7F00FF','#ff5733']; 
        $randomColor = $colors[$colorIndex - 1]; // Subtract 1 to use as an array index


        $result = [
            'color' => $randomColor,
             'colorN' => $colorIndex,
            'number' => $randomNumber,
        ];

        return response()->json($result);
    }
    
    //
}
