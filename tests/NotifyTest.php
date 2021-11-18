<?php

use jorgeperaza2000\Notify\LaravelNotify;
use PHPUnit\Framework\TestCase;

class NotifyTest extends TestCase
{
    protected $session;

    protected $notify;

    public function setUp(): void
    {
        $this->session = Mockery::spy('jorgeperaza2000\Notify\Storage\Session');
        $this->notify = new LaravelNotify($this->session);
    }
}
