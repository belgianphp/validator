<?php

namespace Belgian\Validator;


class Between implements IsValid 
{

    private $_val;

    public function __construct($keyMinAndMaxArr)
    {

        $this->_val = new ValidatorVo();
        $this->_val->setRule($keyMinAndMaxArr);

        return $this;
    }


    public function isValid($field)
    {
        $this->_val->setField($field);

        $rule = $this->_val->getRule();
        $exception = 'class %s: the key "%s" not found.';


        if(!array_key_exists('min', $rule))
        {
            throw new \Exception(sprintf($exception, __CLASS__, 'min'));
        }


        if(!array_key_exists('max', $rule))
        {
            throw new \Exception(sprintf($exception, __CLASS__, 'max'));
        }


        $num = self::_getSize();


        return ( ($num >= $rule['min'])  && ($num <= $rule['max'])) ;

    } 


    private function _getSize()
    {
        $val = $this->_val->getField();

        return (is_numeric($val)) ?  $val : mb_strlen($val, 'UTF-8');
    } 




}



