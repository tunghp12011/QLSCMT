<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuaChuaLinhKien Model
 *
 * @method \App\Model\Entity\SuaChuaLinhKien newEmptyEntity()
 * @method \App\Model\Entity\SuaChuaLinhKien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SuaChuaLinhKien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuaChuaLinhKien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SuaChuaLinhKien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SuaChuaLinhKien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SuaChuaLinhKien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuaChuaLinhKien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SuaChuaLinhKien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChuaLinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChuaLinhKien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChuaLinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChuaLinhKien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChuaLinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChuaLinhKien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChuaLinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChuaLinhKien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SuaChuaLinhKienTable extends Table
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

        $this->setTable('sua_chua_linh_kien');
        $this->setDisplayField('id');
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
            ->integer('id_sua_chua')
            ->allowEmptyString('id_sua_chua');

        $validator
            ->integer('id_linh_kien')
            ->allowEmptyString('id_linh_kien');

        $validator
            ->integer('so_luong')
            ->allowEmptyString('so_luong');

        return $validator;
    }
}
