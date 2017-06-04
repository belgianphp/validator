<?php

/*
 * @package     BelgianPHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/belgianphp/validator
 * @copyright   2017 
 * 
 */
 

namespace Belgian\Validator;


class MimeType implements IIsValid 
{

    private $_val;

    public function __construct($mimeTypeArr)
    {
        $this->_val = new ValidatorVo();
        $this->_val->setRule($mimeTypeArr);
    }


    public function isValid($fileType)
    {
        $this->_val->setField($fileType);

        return (
            in_array($this->_val->getField(), $this->_val->getRule())
        );

    } 



}



