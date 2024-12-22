<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $faculty
 * @property string $specialization
 * @property string $group
 * @property int $year
 */
class StudentParent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'faculty', 'specialization', 'group', 'year'], 'required'],
            [['year'], 'integer'],
            [['last_name', 'first_name', 'faculty', 'specialization', 'group'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Nume',
            'first_name' => 'Prenume',
            'faculty' => 'Facultate',
            'specialization' => 'Specializare',
            'group' => 'Grupă',
            'year' => 'An de studiu',
        ];
    }
}
