<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuaChuaLinhKienFixture
 */
class SuaChuaLinhKienFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'sua_chua_linh_kien';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'id_sua_chua' => 1,
                'id_linh_kien' => 1,
                'so_luong' => 1,
            ],
        ];
        parent::init();
    }
}
