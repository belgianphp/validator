<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/validator
 * @copyright   2017 
 * 
 */
 

namespace Belgian\Validator;


class Ip implements IIsValid 
{

    private $_val;

    public function __construct()
    {
        $this->_val = new ValidatorVo();
    }


    public function isValid($field)
    {
        $this->_val->setField($field);
        return (filter_var($this->_val->getField(), FILTER_VALIDATE_IP) == TRUE);

    } 



}



