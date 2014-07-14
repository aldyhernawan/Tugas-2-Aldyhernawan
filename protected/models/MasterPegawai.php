<?php

/**
 * This is the model class for table "master_pegawai".
 *
 * The followings are the available columns in table 'master_pegawai':
 * @property string $id_pegawai
 * @property integer $nama_pegawai
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $telepon
 */
class MasterPegawai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MasterPegawai the static model class
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
		return 'master_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pegawai, nama_pegawai, jenis_kelamin, tanggal_lahir, alamat, telepon', 'required'),
			array('nama_pegawai', 'length', 'max'=>30),
			array('id_pegawai', 'length', 'max'=>5),
			array('jenis_kelamin', 'length', 'max'=>10),
			array('alamat', 'length', 'max'=>50),
			array('telepon', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pegawai, nama_pegawai, jenis_kelamin, tanggal_lahir, alamat, telepon', 'safe', 'on'=>'search'),
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
			'id_pegawai' => 'Id Pegawai',
			'nama_pegawai' => 'Nama Pegawai',
			'jenis_kelamin' => 'Jenis Kelamin',
			'tanggal_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'telepon' => 'Telepon',
		);
	}
	public function Kelamin()
	{
		return array(
			'P'=>'Perempuan',
			'L'=>'Laki - Laki',
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

		$criteria->compare('id_pegawai',$this->id_pegawai,true);
		$criteria->compare('nama_pegawai',$this->nama_pegawai);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('telepon',$this->telepon,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}