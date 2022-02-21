<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MeasureTest extends TestCase
{
    public function test_get_hello_should_return_200_when_called() {
        // Arrange
        $returnStatusCode = 200;
        // Act
        $response = $this->get('/api/hello');
        // Assert
        $response->assertStatus($returnStatusCode );
    }
    public function test_get_index_should_return_200_when_called() {
        // Arrange
        $returnStatusCode = 200;
        // Act
        $response = $this->get('/api/measures');
        // Assert
        $response->assertStatus($returnStatusCode );
    }
}
