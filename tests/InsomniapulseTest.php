<?php
/**
 * Tests for InsomniaPulse
 */

use PHPUnit\Framework\TestCase;
use Insomniapulse\Insomniapulse;

class InsomniapulseTest extends TestCase {
    private Insomniapulse $instance;

    protected function setUp(): void {
        $this->instance = new Insomniapulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Insomniapulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
