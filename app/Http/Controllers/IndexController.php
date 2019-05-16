<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index(Request $request)
    {
        $firstNumber = (int)$request->firstNumber;
        $secondNumber = (int)$request->secondNumber;
        $operation = $request->operation;
        $result = null;
        try {
            switch ($operation) {
                case 'addition':
                    $result = $firstNumber + $secondNumber;
                    break;
                case 'subtraction':
                    $result = $firstNumber - $secondNumber;
                    break;
                case 'multiplication':
                    $result = $firstNumber * $secondNumber;
                    break;
                case 'division':
                    if($secondNumber === 0){
                            $result = "khong the chia cho 0";
                        throw new \Exception("khong the chia cho 0");
//                        break;
                    }else
                    $result = $firstNumber / $secondNumber;

            }
        }
        catch (\Exception $e){
            echo 'Message: '.$e->getMessage();
            return view('welcome');
        }

        return view('index', compact('result'));
    }
}
