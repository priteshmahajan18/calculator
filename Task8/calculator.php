<?php

namespace Task8;

Class Calculator
{
	//to hold sum of digits
	private $sum = 0;

    //to hold product of digits
    private $product = 1;

    //action to sum series of digits
    public function sum($params)
    {
        try {
            if(2 < count($params)){
                $digits = explode(',',$params[2]);
                foreach ($digits as $key => $value) {
                    if(is_numeric($value))
                    {
                        if(1000 < $value){
                            continue;
                        }
                        $this->sum += $value; 
                    }
                }
                return $this->sum;
    	    }else{
    	        return 0;
    	    }
        } catch (Exception $e) {
            return $e->getMessage();    
        }
    }

    //action to product series of digits
    public function multiply($params)
    {
        try {
            if(2 < count($params)){
                $digits = explode(',',$params[2]);
                foreach ($digits as $key => $value) {
                    if(is_numeric($value))
                    {
                        if(1000 < $value){
                            continue;
                        }
                        $this->product *= $value; 
                    }
                }
                return $this->product;
            }else{
                return 0;
            }
        } catch (Exception $e) {
            return $e->getMessage();    
        }
    }
}
$calc = new Calculator();
switch ($argv[1]) {
    case 'sum':
        echo $calc->sum($argv);
        break;
    case 'multiply':
        echo $calc->multiply($argv);
        break;
    
    default:
        # code...
        break;
}
?>
