<?php

namespace spec\Orchestra\Foundation\Middleware;

use Illuminate\Contracts\Events\Dispatcher;
use Orchestra\Foundation\Middleware\UseBackendTheme;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UseBackendThemeSpec extends ObjectBehavior
{
    function let(Dispatcher $events)
    {
        $this->beAnInstanceOf('spec\Orchestra\Foundation\Middleware\DummyUseBackendTheme');
        $this->beConstructedWith($events);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Orchestra\Foundation\Middleware\UseBackendTheme');
        $this->shouldHaveType('Orchestra\Foundation\Http\Middleware\UseBackendTheme');
    }
}

class DummyUseBackendTheme extends UseBackendTheme
{
    //
}
