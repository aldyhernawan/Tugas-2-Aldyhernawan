<?php

/**
 * This is the model class for table "gudang".
 *
 * The followings are the available columns in table 'gudang':
 * @property string $kd_roti
 * @property integer $stok_roti
 */
class Gudang extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Gudang the static model class
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
		return 'gudang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_gudang, kd_roti, stok_roti', 'required'),
			array('stok_roti', 'numerical', 'integerOnly'=>true),
			array('id_gudang', 'length', 'max'=>5),
			array('kd_roti', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_gudang, kd_roti, stok_roti', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		'kdroti'=>array (self::BELONGS_TO, 'MasterRoti','kd_roti'));
	
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_roti' => 'Kd Roti',
			'stok_roti' => 'Stok Roti',
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

		$criteria->compare('kd_roti',$this->kd_roti,true);
		$criteria->compare('stok_roti',$this->stok_roti);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}