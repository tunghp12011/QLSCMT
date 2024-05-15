<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuaChuaLinhKienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuaChuaLinhKienTable Test Case
 */
class SuaChuaLinhKienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuaChuaLinhKienTable
     */
    protected $SuaChuaLinhKien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SuaChuaLinhKien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SuaChuaLinhKien') ? [] : ['className' => SuaChuaLinhKienTable::class];
        $this->SuaChuaLinhKien = $this->getTableLocator()->get('SuaChuaLinhKien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SuaChuaLinhKien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuaChuaLinhKienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
