<?php

/**
 * This is the model class for table "master_bahan".
 *
 * The followings are the available columns in table 'master_bahan':
 * @property string $kd_bahan
 * @property string $nama_bahan
 * @property string $satuan_bahan
 */
class MasterBahan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MasterBahan the static model class
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
		return 'master_bahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_bahan, nama_bahan, satuan_bahan', 'required'),
			array('kd_bahan', 'length', 'max'=>5),
			array('nama_bahan', 'length', 'max'=>20),
			array('satuan_bahan', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kd_bahan, nama_bahan, satuan_bahan', 'safe', 'on'=>'search'),
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
			'kd_bahan' => 'Kd Bahan',
			'nama_bahan' => 'Nama Bahan',
			'satuan_bahan' => 'Satuan Bahan',
		);
	}
	public function Satuan()
	{
		return array(
			'Sachet'=>'Sachet',
			'Pieces'=>'Pieces',
			'KG'=>'Kilo Gram',
			'Dus'=>'Dus',
			'Pack'=>'Pack',
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

		$criteria->compare('kd_bahan',$this->kd_bahan,true);
		$criteria->compare('nama_bahan',$this->nama_bahan,true);
		$criteria->compare('satuan_bahan',$this->satuan_bahan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}