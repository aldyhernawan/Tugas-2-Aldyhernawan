<?php

/**
 * This is the model class for table "User".
 *
 * The followings are the available columns in table 'User':
 * @property string $Nomor
 * @property string $Nama
 * @property string $password
 * @property integer $level_id
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	protected function afterValidate() {
    parent::afterValidate();
     $this->password = $this->result($this->password);
	}
        
	public function result($value)
	{
		return ($value);
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nomor, Nama, password, level_id', 'required'),
			array('level_id', 'numerical', 'integerOnly'=>true),
			array('Nomor, Nama, password', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Nomor, Nama, password, level_id', 'safe', 'on'=>'search'),
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
			'Nomor' => 'Nomor',
			'Nama' => 'Nama',
			'password' => 'Password',
			'level_id' => 'Level',
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

		$criteria->compare('Nomor',$this->Nomor,true);
		$criteria->compare('Nama',$this->Nama,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('level_id',$this->level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}