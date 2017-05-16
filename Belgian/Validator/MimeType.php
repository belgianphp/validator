<?php

namespace Belgian\Validator;



class MimeType implements IsValid 
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



