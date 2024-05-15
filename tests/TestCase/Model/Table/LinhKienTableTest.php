<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinhKienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinhKienTable Test Case
 */
class LinhKienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LinhKienTable
     */
    protected $LinhKien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.LinhKien',
        'app.SuaChua',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LinhKien') ? [] : ['className' => LinhKienTable::class];
        $this->LinhKien = $this->getTableLocator()->get('LinhKien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LinhKien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LinhKienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
