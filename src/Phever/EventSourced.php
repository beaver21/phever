<?php

namespace Phever;

class EventSourced
{
    private $id;

    public function __construct($id = null)
    {
        $this->id = $id ?: guid();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getVersion()
    {
        return 0;
    }

    public function getEvents()
    {
        return [];
    }
}
