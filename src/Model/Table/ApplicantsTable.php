<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applicants Model
 *
 * @method \App\Model\Entity\Applicant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Applicant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Applicant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Applicant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Applicant|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Applicant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Applicant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Applicant findOrCreate($search, callable $callback = null, $options = [])
 */
class ApplicantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('applicants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 222)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('fname')
            ->maxLength('fname', 222)
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->scalar('cnic')
            ->maxLength('cnic', 222)
            ->requirePresence('cnic', 'create')
            ->notEmpty('cnic');

        $validator
            ->dateTime('date of birth')
            ->requirePresence('date of birth', 'create')
            ->notEmpty('date of birth');

        $validator
            ->scalar('current address')
            ->maxLength('current address', 222)
            ->requirePresence('current address', 'create')
            ->notEmpty('current address');

        $validator
            ->scalar('permanent address')
            ->maxLength('permanent address', 222)
            ->requirePresence('permanent address', 'create')
            ->notEmpty('permanent address');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 222)
            ->requirePresence('zipcode', 'create')
            ->notEmpty('zipcode');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('telephone number')
            ->maxLength('telephone number', 222)
            ->requirePresence('telephone number', 'create')
            ->notEmpty('telephone number');

        $validator
            ->scalar('mobile number')
            ->maxLength('mobile number', 222)
            ->requirePresence('mobile number', 'create')
            ->notEmpty('mobile number');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
