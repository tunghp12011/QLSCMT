<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NhanVien Model
 *
 * @method \App\Model\Entity\NhanVien newEmptyEntity()
 * @method \App\Model\Entity\NhanVien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\NhanVien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NhanVien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\NhanVien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\NhanVien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\NhanVien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NhanVien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\NhanVien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\NhanVien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NhanVien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NhanVien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NhanVien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NhanVien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NhanVien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\NhanVien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\NhanVien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NhanVienTable extends Table
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

        $this->setTable('nhan_vien');
        $this->setDisplayField('ten_nv');
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
            ->scalar('ten_nv')
            ->maxLength('ten_nv', 100)
            ->requirePresence('ten_nv', 'create')
            ->notEmptyString('ten_nv');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('so_dt')
            ->maxLength('so_dt', 20)
            ->allowEmptyString('so_dt');

        $validator
            ->scalar('dia_chi')
            ->allowEmptyString('dia_chi');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);

        return $rules;
    }
}
