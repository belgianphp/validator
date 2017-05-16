<?php

namespace Belgian\Validator;

class ValidatorVo
{
    private $_field;
    private $_rule;


    public function getField()
    {
        return $this->_field;
    }

    public function setField($field)
    {
        $this->_field = $field;
        return $this;
    }




    public function getRule()
    {
        return $this->_rule;
    }

    public function setRule($rule)
    {
        $this->_rule = $rule;
        return $this;
    }



}    

