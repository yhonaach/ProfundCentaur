<?php
/**
 * Tests for ProfundCentaur
 */

use PHPUnit\Framework\TestCase;
use Profundcentaur\Profundcentaur;

class ProfundcentaurTest extends TestCase {
    private Profundcentaur $instance;

    protected function setUp(): void {
        $this->instance = new Profundcentaur(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Profundcentaur::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
