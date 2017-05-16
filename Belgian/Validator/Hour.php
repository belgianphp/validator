<?php

namespace Belgian\Validator;



class Hour implements IIsValid 
{

    private $_val;

    public function __construct()
    {
        $this->_val = new ValidatorVo();
    }


    public function isValid($field)
    {

        $this->_val->setField($field);
 
       return (preg_match(''
            . '/^(2[0-3]|[01][0-9]):'
            . '[0-5][0-9]:'
            . '[0-5][0-9]'
            . '$/'
            . '', $this->_val->getField()
        ) == 1);

    } 



}



