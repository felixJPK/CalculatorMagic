<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function addNumbers(Request $request)
    {

        // dd($request->all());

        // $request->validate([
        //     'number1' => 'required|numeric',
        //     'operator' => 'required|in:+,-,*,/',
        //     'number2' => 'required|numeric',
        // ]);
        try{

            $number1 = $request->number1;
            
            $operator = $request->input('operator');
            $number2 = $request->input('number2');

            $this->isValidate($number1,$number2,$operator);//using this because call the method within the same class

            switch($operator){
                case('+'):
                    $res = $number1 + $number2;
                    break;
                case('-'):
                    $res = $number1 - $number2;
                    break;
                case('*'):
                    $res = $number1 * $number2;
                    break;    
                case('/'):
                    $res = $number1 / $number2;
                    break;
            }
            $status = true;
            $message = "Calculate sucessfully";
            $result = $res;
        }
        catch(Exception $e){
            $message =  $e->getMessage();
            $status = false;
            $result = NULL;
        }
        // dd($res);

        return response()->json([
            "result" => $result,
            "status"=>$status,
            "message"=>$message 
        ]);

        // return view('result')->with('result',$res);

    }
    private function isValidate($number1,$number2,$operator){
        $operators = ['+','-','/','*'];

        if(empty($number1)||empty($number2)||empty($operator)){
            throw new Exception("All input must be filled.");
        }
        if(!(is_numeric($number1)&&is_numeric($number2))){
            throw new Exception("The input number must be numeric values.");
        }

        if(!(in_array($operator, $operators))){
            throw new Exception("The operator is incorrect");
        }

    }
}
