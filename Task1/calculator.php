<?php

namespace Task1;

Class Calculator
{
	//to hold sum of digits
	private $sum = 0;

    //action to sum series of digits
    public function sum($params)
    {
    	try {
    	    if(2 < count($params)){
                $digits = explode(',', $params[2]);
                foreach ($digits as $key => $value) {
                    if(is_numeric($value))
                    {
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
}
$calc = new Calculator();
switch ($argv[1]) {
    case 'sum':
        echo $calc->sum($argv);
        break;
    default:
        # code...
        break;
}?>
