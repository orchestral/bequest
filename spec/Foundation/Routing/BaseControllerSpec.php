<?php

namespace spec\Orchestra\Foundation\Routing;

use Orchestra\Foundation\Routing\BaseController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BaseControllerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\Orchestra\Foundation\Routing\DummyBaseController');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Orchestra\Foundation\Routing\BaseController');
        $this->shouldHaveType('Orchestra\Foundation\Http\Controllers\BaseController');
    }
}

class DummyBaseController extends BaseController
{
    protected function setupFilters()
    {
        //
    }

    protected function setupMiddleware()
    {
        //
    }
}
