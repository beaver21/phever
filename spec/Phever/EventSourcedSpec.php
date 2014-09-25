<?php

namespace spec\Phever;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EventSourcedSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Phever\EventSourced');
    }
}
