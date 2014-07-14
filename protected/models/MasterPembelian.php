<?php

/**
 * This is the model class for table "master_pembelian".
 *
 * The followings are the available columns in table 'master_pembelian':
 * @property string $id_beli
 * @property integer $id_pegawai
 * @property integer $kd_bahan
 * @property integer $harga_beli
 * @property integer $banyak_beli
 * @property string $tanggal_beli
 * @property string $tanggal_expired
 */
class MasterPembelian extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MasterPembelian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'master_pembelian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_beli, id_pegawai, kd_bahan, harga_beli, banyak_beli, tanggal_beli, tanggal_expired', 'required'),
			array('harga_beli, banyak_beli', 'numerical', 'integerOnly'=>true),
			array('id_beli', 'length', 'max'=>5),
			array('id_pegawai', 'length', 'max'=>5),
			array('kd_bahan', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_beli, id_pegawai, kd_bahan, harga_beli, banyak_beli, tanggal_beli, tanggal_expired', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		'idpeg'=>array (self::BELONGS_TO, 'MasterPegawai','id_pegawai'),
		'kdbhn'=>array (self::BELONGS_TO, 'MasterBahan','kd_bahan'));
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_beli' => 'Id Beli',
			'id_pegawai' => 'Id Pegawai',
			'kd_bahan' => 'Kd Bahan',
			'harga_beli' => 'Harga Beli',
			'banyak_beli' => 'Banyak Beli',
			'tanggal_beli' => 'Tanggal Beli',
			'tanggal_expired' => 'Tanggal Expired',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_beli',$this->id_beli,true);
		$criteria->compare('id_pegawai',$this->id_pegawai);
		$criteria->compare('kd_bahan',$this->kd_bahan);
		$criteria->compare('harga_beli',$this->harga_beli);
		$criteria->compare('banyak_beli',$this->banyak_beli);
		$criteria->compare('tanggal_beli',$this->tanggal_beli,true);
		$criteria->compare('tanggal_expired',$this->tanggal_expired,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}