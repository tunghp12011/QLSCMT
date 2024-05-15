<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhachHangTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhachHangTable Test Case
 */
class KhachHangTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhachHangTable
     */
    protected $KhachHang;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.KhachHang',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('KhachHang') ? [] : ['className' => KhachHangTable::class];
        $this->KhachHang = $this->getTableLocator()->get('KhachHang', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->KhachHang);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KhachHangTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
