<?php

/**
 * This is the model class for table "master_penjualan".
 *
 * The followings are the available columns in table 'master_penjualan':
 * @property string $id_jual
 * @property string $id_peg
 * @property string $kd_roti
 * @property integer $harga_jual
 * @property integer $banyak_jual
 */
class MasterPenjualan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MasterPenjualan the static model class
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
		return 'master_penjualan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_jual, id_peg, kd_roti, harga_jual, banyak_jual', 'required'),
			array('harga_jual, banyak_jual', 'numerical', 'integerOnly'=>true),
			array('id_jual, id_peg, kd_roti', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_jual, id_peg, kd_roti, harga_jual, banyak_jual', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		'idpeg'=>array (self::BELONGS_TO, 'MasterPegawai','id_peg'),
		'kdroti'=>array (self::BELONGS_TO, 'MasterRoti','kd_roti'));
		
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_jual' => 'Id Jual',
			'id_peg' => 'Id Peg',
			'kd_roti' => 'Kd Roti',
			'harga_jual' => 'Harga Jual',
			'banyak_jual' => 'Banyak Jual',
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

		$criteria->compare('id_jual',$this->id_jual,true);
		$criteria->compare('id_peg',$this->id_peg,true);
		$criteria->compare('kd_roti',$this->kd_roti,true);
		$criteria->compare('harga_jual',$this->harga_jual);
		$criteria->compare('banyak_jual',$this->banyak_jual);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}