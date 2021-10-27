<?php

require_once ("Command.php");
require_once ("CommandHistory.php");

class Boulangerie
{
    private Command $command;
    private CommandHistory $history;

    public function __construct()
    {
        $this->history = new CommandHistory();
    }

    public function setCommand(Command $com) : void
    {
        $this->history->pushHistory($com);
        $this->command = $com;
    }

    public function executeCommand(Command $command) : void
    {
        $this->command = $command;
        $this->command->execute();
        $this->history->popHistory($this->command);
    }

    public function executeAll()
    {
        foreach ($this->history->getHistory() as $command)
        {
            $this->executeCommand($command);
        }
    }
}