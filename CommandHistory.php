<?php


class CommandHistory
{
    private array $history = [];

    /**
     * @return array
     */
    public function getHistory(): array
    {
        return $this->history;
    }

    /**
     * @param Command $history
     */
    public function pushHistory(Command $history): void
    {
        array_push($this->history, $history);
    }

    public function popHistory(Command $history) : void {
        foreach ($this->history as $command)
        {
            if($command == $history)
            {
                unset($command);
            }
        }
    }

}