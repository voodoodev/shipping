<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TrackingTest extends TestCase
{
    public function testHome()
    {
    	$this->visit('/')
    		->type('ae14', 'shipping-code')
    		->press('Search')
    	;
    }

    public function testDatabase()
    {
    	$this->seeInDatabase('trackings', ['product' => 'Shoes']);
    }
}
