<?php

namespace spec\Orchestra\Foundation\Presenter;

use Orchestra\Foundation\Presenter\Presenter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PresenterSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('spec\Orchestra\Foundation\Presenter\DummyPresenter');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Orchestra\Foundation\Presenter\Presenter');
        $this->shouldHaveType('Orchestra\Foundation\Http\Presenters\Presenter');
    }
}

class DummyPresenter extends Presenter
{
    //
}
