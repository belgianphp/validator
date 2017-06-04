<?php

namespace Belgian\Validator;



class DateUSA implements IIsValid 
{
    private $_val;

    public function __construct()
    {
        $this->_val = new ValidatorVo();
    }


    public function isValid($field)
    {
        $this->_val->setField($field);

 
        $isDateValid = 0;

        if(preg_match(''
            . '/^[0-9]{4}-'
            . '([1-9]|0[1-9]|1[0-2])-'
            . '([1-9]|0[1-9]|[1-2][0-9]|3[0-1])'
            . '$/'
            . '', $this->_val->getField())){

            list($y, $m, $d) = explode('-', $this->_val->getField());
            $isDateValid = checkdate($m,$d,$y);

        }

        return ($isDateValid);


    } 



}



