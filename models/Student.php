<?php

namespace app\models;

class Student extends StudentParent
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ecf_university' . '.student';
    }
}
