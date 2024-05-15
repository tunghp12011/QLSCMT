<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LinhKien Model
 *
 * @property \App\Model\Table\SuaChuaTable&\Cake\ORM\Association\BelongsToMany $SuaChua
 *
 * @method \App\Model\Entity\LinhKien newEmptyEntity()
 * @method \App\Model\Entity\LinhKien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\LinhKien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LinhKien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\LinhKien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\LinhKien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\LinhKien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LinhKien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\LinhKien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\LinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LinhKien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LinhKien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LinhKien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LinhKien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LinhKien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LinhKienTable extends Table
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

        $this->setTable('linh_kien');
        $this->setDisplayField('ten_linh_kien');
        $this->setPrimaryKey('id');

        $this->belongsToMany('SuaChua', [
            'foreignKey' => 'linh_kien_id',
            'targetForeignKey' => 'sua_chua_id',
            'joinTable' => 'sua_chua_linh_kien',
        ]);
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
            ->scalar('ten_linh_kien')
            ->maxLength('ten_linh_kien', 100)
            ->requirePresence('ten_linh_kien', 'create')
            ->notEmptyString('ten_linh_kien');

        $validator
            ->scalar('mo_ta')
            ->allowEmptyString('mo_ta');

        $validator
            ->integer('so_luong')
            ->allowEmptyString('so_luong');

        $validator
            ->decimal('gia')
            ->allowEmptyString('gia');

        return $validator;
    }
}
