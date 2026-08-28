<?php
/**
 * Tests for DeFiShard
 */

use PHPUnit\Framework\TestCase;
use Defishard\Defishard;

class DefishardTest extends TestCase {
    private Defishard $instance;

    protected function setUp(): void {
        $this->instance = new Defishard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defishard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
