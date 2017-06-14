<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property string $no_anggota
 * @property string $no_ktp
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $password
 * @property string $pekerjaan
 * @property string $email
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_anggota', 'no_ktp', 'nama', 'alamat', 'telepon', 'password', 'pekerjaan', 'email'], 'required'],
            [['no_anggota'], 'string', 'max' => 10],
            [['no_ktp', 'pekerjaan', 'email'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 60],
            [['telepon'], 'string', 'max' => 15],
            [['password'], 'string', 'max' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no_anggota' => 'No Anggota',
            'no_ktp' => 'No Ktp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'password' => 'Password',
            'pekerjaan' => 'Pekerjaan',
            'email' => 'Email',
        ];
    }
}
