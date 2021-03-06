<?php

/**
 * This is the model base class for the table "user".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "User".
 *
 * Columns in table "user" available as properties of the model,
 * followed by relations of table "user" available as properties of the model.
 *
 * @property integer $id
 * @property string $username
 * @property string $chinese_name
 * @property string $passwd
 * @property string $last_login_ip
 * @property string $last_login_time
 *
 * @property Client[] $clients
 */
abstract class BaseUser extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'user';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'username';
	}

	public function rules() {
		return array(
			array('username, passwd', 'required'),
			array('username, chinese_name, last_login_ip', 'length', 'max'=>45),
			array('passwd', 'length', 'max'=>300),
			array('last_login_time', 'safe'),
			array('chinese_name, last_login_ip, last_login_time', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, username, chinese_name, passwd, last_login_ip, last_login_time', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'clients' => array(self::HAS_MANY, 'Client', 'last_update_user_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'username' => Yii::t('app', 'Username'),
			'chinese_name' => Yii::t('app', 'Chinese Name'),
			'passwd' => Yii::t('app', 'Passwd'),
			'last_login_ip' => Yii::t('app', 'Last Login Ip'),
			'last_login_time' => Yii::t('app', 'Last Login Time'),
			'clients' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('username', $this->username, true);
		$criteria->compare('chinese_name', $this->chinese_name, true);
		$criteria->compare('passwd', $this->passwd, true);
		$criteria->compare('last_login_ip', $this->last_login_ip, true);
		$criteria->compare('last_login_time', $this->last_login_time, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}