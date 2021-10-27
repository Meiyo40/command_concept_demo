<?php


class CommandPainAuChocolat implements Command
{

    private bool $isBestName;

    public function __construct(bool $isBestName)
    {
        //Because its the lone possibility, dont care about the choice
        $this->isBestName = false;
    }

    public function execute() : void
    {
        $msg = "\nPar essence le pain au chocolat est ce le meilleur nom possible ? ";
        echo $this->isBestName ? "Bien sûr!" : $msg."IM-PO-SSI-BLE" ;
    }
}