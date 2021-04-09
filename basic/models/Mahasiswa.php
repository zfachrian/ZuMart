<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nrp
 * @property string $nama
 * @property string $email
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nrp', 'nama', 'email'], 'required'],
            [['nrp'], 'string', 'max' => 10],
            [['nama', 'email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'email' => 'Email',
        ];
    }
}
