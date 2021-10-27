<?php


class CommandChocolatine implements Command
{
    private bool $isBestName;
    private Four $four;

    public function __construct(Four $four, bool $isBestName)
    {
        //Because its the lone possibility, dont care about the choice
        $this->four = $four;
        $this->isBestName = true;
    }

    public function execute() : void
    {
        $this->four->cuisson("Chocolatine");
        $msg = "\nPar essence la Chocolatine est ce le meilleur nom possible ? ";
        echo $this->isBestName ? $msg."Bien sûr!" : "IM-PO-SSI-BLE" ;
    }
}