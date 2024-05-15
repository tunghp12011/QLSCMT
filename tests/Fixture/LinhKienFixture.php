<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LinhKienFixture
 */
class LinhKienFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'linh_kien';
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
                'ten_linh_kien' => 'Lorem ipsum dolor sit amet',
                'mo_ta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'so_luong' => 1,
                'gia' => 1.5,
            ],
        ];
        parent::init();
    }
}
