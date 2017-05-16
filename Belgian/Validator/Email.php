<?php

namespace Belgian\Validator;



class Email implements isValid 
{

    private $_val;

    public function __construct()
    {
        $this->_val = new ValidatorVo();
    }


    public function isValid($field)
    {
        $this->_val->setField($field);

         return (filter_var($this->_val->getField(), FILTER_VALIDATE_EMAIL)== TRUE);


    } 



}



