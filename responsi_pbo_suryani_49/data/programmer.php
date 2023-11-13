<?php

//Class Programmer
class Programmer
{
    //Konstruktor untuk kelas Programmer
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}
//
class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}
//Class Company Mewakili sebuah perusahaan dengan memiliki seorang programmer.
class Company
{
    public Programmer $programmer;
}


function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}