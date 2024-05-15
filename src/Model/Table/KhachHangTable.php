<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KhachHang Model
 *
 * @method \App\Model\Entity\KhachHang newEmptyEntity()
 * @method \App\Model\Entity\KhachHang newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\KhachHang> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KhachHang get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\KhachHang findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\KhachHang patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\KhachHang> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\KhachHang|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\KhachHang saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\KhachHang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\KhachHang>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\KhachHang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\KhachHang> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\KhachHang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\KhachHang>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\KhachHang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\KhachHang> deleteManyOrFail(iterable $entities, array $options = [])
 */
class KhachHangTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('khach_hang');
        $this->setDisplayField('ten_KH');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ten_KH')
            ->maxLength('ten_KH', 100)
            ->requirePresence('ten_KH', 'create')
            ->notEmptyString('ten_KH');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('so_dt')
            ->maxLength('so_dt', 20)
            ->allowEmptyString('so_dt');

        $validator
            ->scalar('dia_chi')
            ->allowEmptyString('dia_chi');

        return $validator;
    }
}
