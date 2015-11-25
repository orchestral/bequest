<?php

namespace spec\Orchestra\Foundation\Routing;

use Orchestra\Foundation\Routing\AdminController;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdminControllerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\Orchestra\Foundation\Routing\DummyAdminController');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Orchestra\Foundation\Routing\AdminController');
        $this->shouldHaveType('Orchestra\Foundation\Http\Controllers\AdminController');
    }
}

class DummyAdminController extends AdminController
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
