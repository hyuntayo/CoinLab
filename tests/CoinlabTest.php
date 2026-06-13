<?php
/**
 * Tests for CoinLab
 */

use PHPUnit\Framework\TestCase;
use Coinlab\Coinlab;

class CoinlabTest extends TestCase {
    private Coinlab $instance;

    protected function setUp(): void {
        $this->instance = new Coinlab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinlab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
