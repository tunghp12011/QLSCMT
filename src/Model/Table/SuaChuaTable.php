<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuaChua Model
 *
 * @property \App\Model\Table\LinhKienTable&\Cake\ORM\Association\BelongsToMany $LinhKien
 *
 * @method \App\Model\Entity\SuaChua newEmptyEntity()
 * @method \App\Model\Entity\SuaChua newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SuaChua> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuaChua get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SuaChua findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SuaChua patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SuaChua> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuaChua|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SuaChua saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChua>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChua> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChua>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SuaChua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SuaChua> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SuaChuaTable extends Table
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

        $this->setTable('sua_chua');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('LinhKien', [
            'foreignKey' => 'sua_chua_id',
            'targetForeignKey' => 'linh_kien_id',
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
            ->integer('id_mayTinh')
            ->allowEmptyString('id_mayTinh');

        $validator
            ->date('ngay_bat_dau')
            ->allowEmptyDate('ngay_bat_dau');

        $validator
            ->date('ngay_ket_thuc')
            ->allowEmptyDate('ngay_ket_thuc');

        $validator
            ->decimal('chi_phi')
            ->allowEmptyString('chi_phi');

        $validator
            ->integer('id_nhanVien')
            ->allowEmptyString('id_nhanVien');

        return $validator;
    }
}
