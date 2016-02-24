<?php

/**
 * Created by PhpStorm.
 * User: Ardian
 * Date: 2/24/2016
 * Time: 6:46 PM
 */
class Calculator{
   private  $input1, $input2, $ope, $result;

    public function setInput1($input1, $input2)
    {
        $this->input1 = $input1;
        $this->input2 = $input2;
    }

    public function setOpe($ope)
    {
        $this->ope = $ope;
    }

    public function calculate ()
    {
        if ($this->ope == "+")
            $this->result = $this->input1 + $this->input2;
        elseif ($this->ope == "-")
            $this->result = $this->input1 - $this->input2;
        elseif($this->ope == "*")
            $this->result = $this->input1 *+ $this->input2;
        elseif($this->ope == "/")
            $this->result = $this->input1 / $this->input2;
        else $this->result = "sorry error";
    }

    public function getResult()
    {
        return $this->result;
    }

}