<?php

interface ICustomException
{
    public function getErrorInfo();
}


class MyException extends Exception implements ICustomException
{
    public $message;

    public function __construct__($message)
    {
        parent::__construct__($message);
        $this->message = $message;
    }

    public function getErrorInfo()
    {
        $file = parent::getFile();
        $line = parent::getLine();
        $message = parent::getMessage();

        $info = "ERROR '$message' line:$line in $file";
        return $info;
    }
}

class WarningException extends MyException
{
    public function getErrorInfo()
    {
        $file = parent::getFile();
        $line = parent::getLine();
        $message = parent::getMessage();

        $info = "WARNING '$message' line:$line in $file";
        return $info;
    }
}


function validate($num)
{
    if (!is_numeric($num))
    {
        throw new MyException("Not a number");
    } 
    else
    {
        if ($num == 0)
        {
            throw new MyException("Division by zero");
        }
    }

    if ($num > 5)
    {
        throw new WarningException("Greater than 5");
    }

    if ($num == 1)
    {
        throw new Exception("BASE EXCEPTION");
    }
}


function xDivY($x, $y)
{
    try {
        validate($y);
        return $x / $y;
    } catch (MyException $th) {
        throw $th;
    } 
    
}

try {
    $test = xDivY(13, 1);
    var_dump($test);
} catch (ICustomException $th) {
    var_dump($th->getErrorInfo());
} catch (Exception $general) {
    var_dump($general->getMessage());
}


// var_dump(xDivY(2, 2));
// var_dump(xDivY(4, 0));
// var_dump(xDivY(66, 2));
// var_dump(xDivY(3, 2));
// var_dump(xDivY(6, 2));


