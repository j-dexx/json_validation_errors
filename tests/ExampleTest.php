<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $server = $this->transformHeadersToServerVars([
            'Accept' => 'application/json',
        ]);

        $response = $this->call('POST', '/users', ['name' => null], [], [], $server);

        var_dump($response->getContent());
        $response->assertJsonValidationErrors('name');
    }
}
