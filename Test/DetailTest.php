<?php

namespace PluginTest\Test;

class DetailTest extends \Enlight_Components_Test_Controller_TestCase
{
    public function testNoRedirectProductNotLoggedUser()
    {
        $this->dispatch('/sommerwelten/accessoires/170/sonnenbrille-red?number=SW10170');
        $this->reset();
        $this->dispatch('/sommerwelten/accessoires/170/sonnenbrille-red?number=SW10170');
        $this->reset();
        $this->dispatch('/sommerwelten/accessoires/170/sonnenbrille-red?number=SW10170');
    }
}