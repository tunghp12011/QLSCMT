<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NhanVienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NhanVienTable Test Case
 */
class NhanVienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NhanVienTable
     */
    protected $NhanVien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.NhanVien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('NhanVien') ? [] : ['className' => NhanVienTable::class];
        $this->NhanVien = $this->getTableLocator()->get('NhanVien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->NhanVien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NhanVienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NhanVienTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
