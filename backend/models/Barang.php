<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property integer $kode
 * @property string $nama
 * @property string $jenis
 * @property string $tanggal_masuk
 * @property integer $harga_minimal
 * @property integer $jumlah
 * @property string $spesifikasi
 * @property string $gambar
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'jenis', 'tanggal_masuk', 'harga_minimal', 'jumlah', 'spesifikasi', 'gambar'], 'required'],
            [['kode', 'harga_minimal', 'jumlah'], 'integer'],
            [['tanggal_masuk'], 'safe'],
            [['spesifikasi'], 'string'],
            [['nama', 'gambar'], 'string', 'max' => 50],
            [['jenis'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'jenis' => 'Jenis',
            'tanggal_masuk' => 'Tanggal Masuk',
            'harga_minimal' => 'Harga Minimal',
            'jumlah' => 'Jumlah',
            'spesifikasi' => 'Spesifikasi',
            'gambar' => 'Gambar',
        ];
    }
}
