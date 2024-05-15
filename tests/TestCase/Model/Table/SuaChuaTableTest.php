<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuaChuaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuaChuaTable Test Case
 */
class SuaChuaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuaChuaTable
     */
    protected $SuaChua;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.SuaChua',
        'app.LinhKien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SuaChua') ? [] : ['className' => SuaChuaTable::class];
        $this->SuaChua = $this->getTableLocator()->get('SuaChua', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SuaChua);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuaChuaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
