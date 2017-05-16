<?php

namespace Belgian\Validator;



class MaxLength implements IsValid 
{

    private $_val;

    public function __construct($max)
    {

        $this->_val = new ValidatorVo();
        $this->_val->setRule((int) $max);

        return $this;

    }


    public function isValid($field)
    {
        $this->_val->setField($field);
        $size = mb_strlen($this->_val->getField(), 'UTF-8');
        $rule = $this->_val->getRule();

        return ( $size <= $rule);


    } 



}



