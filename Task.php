<?php
class Task
{
    public $description ;

    public $completed ;

    // public function __construct($description)
    // {
    //     $this->description = $description;
    // }

    // public function getDescription()
    // {
    //     return $this->description;
    // }

    public function complete()
    {
        $this->completed = true;
    }

    // public function isComplete()
    // {
    //     return $this->completed;
    // }
}
