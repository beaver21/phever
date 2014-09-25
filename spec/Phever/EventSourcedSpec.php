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

    function it_should_have_a_version_number()
    {
        $this->getVersion()->shouldBe(0);
    }

    function it_should_have_no_events()
    {
        $this->getEvents()->shouldHaveCount(0);
    }

    function it_should_have_a_guid_as_an_id()
    {
        $this->getId()->shouldNotBe(null);
    }

    function it_can_be_instantiated_with_a_given_id()
    {
        $this->beConstructedWith(1);

        $this->getId()->shouldBe(1);
    }
}
