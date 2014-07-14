<?php

/**
 * This is the model class for table "master_roti".
 *
 * The followings are the available columns in table 'master_roti':
 * @property string $kd_roti
 * @property integer $nama_roti
 * @property integer $jenis_roti
 */
class MasterRoti extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MasterRoti the static model class
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
		return 'master_roti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_roti, nama_roti, jenis_roti', 'required'),
			array('nama_roti','length', 'max'=>30),
			array('jenis_roti', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_roti, nama_roti, jenis_roti', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}
	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_roti' => 'Kd Roti',
			'nama_roti' => 'Nama Roti',
			'jenis_roti' => 'Jenis Roti',
		);
	}
	public function JenisRoti()
	{
		return array(
			'Roti_Basah'=>'Roti Basah',
			'Roti_Kering'=>'Roti Kering',
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
		$criteria->compare('nama_roti',$this->nama_roti);
		$criteria->compare('jenis_roti',$this->jenis_roti);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}