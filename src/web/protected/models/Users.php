<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property integer $id_employee
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $activeKey
 * @property boolean $superuser
 * @property integer $id_rol
 * @property string $create_at
 * @property string $lastvist_at
 * @property integer $id_status
 *
 * The followings are the available model relations:
 * @property Rol $idRol
 * @property Employee $idEmployee
 * @property StatusEmployee $idStatus
 * @property ConnectingTrace[] $connectingTraces
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_employee, id_rol, id_status', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>50),
			array('username, email, activeKey, superuser, create_at, lastvist_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_employee, username, password, email, activeKey, superuser, id_rol, create_at, lastvist_at, id_status', 'safe', 'on'=>'search'),
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
			'idRol' => array(self::BELONGS_TO, 'Rol', 'id_rol'),
			'idEmployee' => array(self::BELONGS_TO, 'Employee', 'id_employee'),
			'idStatus' => array(self::BELONGS_TO, 'StatusEmployee', 'id_status'),
			'connectingTraces' => array(self::HAS_MANY, 'ConnectingTrace', 'id_user'),
                        'sysSessions' => array(self::HAS_MANY, 'SysSession', 'id_users'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_employee' => 'Id Employee',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activeKey' => 'Active Key',
			'superuser' => 'Superuser',
			'id_rol' => 'Id Rol',
			'create_at' => 'Create At',
			'lastvist_at' => 'Lastvist At',
			'id_status' => 'Id Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_employee',$this->id_employee);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activeKey',$this->activeKey,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvist_at',$this->lastvist_at,true);
		$criteria->compare('id_status',$this->id_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
