<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function compute($num1, $num2, $num3, $num4)
    {
        //Dito nalalaman kung ang numero ay maidi-devide ng 'zero'
        if ($num2 == 0 || $num4 == 0) {
            return response()->json(['error' => 'Cannot divide by zero'], 400);
        }

        //ito naman ang paraan upang kunin ang 'product'
        $multiplication = $num1 * $num2;
        //ito naman ang paraan upang kunin ang 'product'
        $addition = $num3 + $num4;

        //ang code naman na ito ay nagbibigay ng stelo o desinyo sa resulta ng multiplication
        $multBackgroundColor = ($multiplication % 2 == 0) ? 'green' : 'blue';
        $multTextColor = ($num1 % 2 == 0) ? 'orange' : 'blue';

        //ang code naman na ito ay nagbibigay ng stelo o desinyo sa resulta ng multiplication
        $addBackgroundColor = ($addition % 2 == 0) ? 'green' : 'blue';
        $addTextColor = ($num3 % 2 == 0) ? 'orange' : 'blue';

        //ito na ang code para sa pag-display ng resulta
        return view('result', compact(
            'num1', 'num2', 'num3', 'num4', 
            'multiplication', 'addition', 
            'multBackgroundColor', 'multTextColor', 
            'addBackgroundColor', 'addTextColor'
        ));
    }
}
