<?php

namespace Tests\Feature;

use Tests\TestCase;

class testHomePageRedirection extends TestCase
{
    public function testHomePageRedirection()
    {
        $response = $this->get('/');
        $response->assertRedirect('cats');
    }
}
