<?php

/**
 * This is the model base class for the table "alarm_log".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AlarmLog".
 *
 * Columns in table "alarm_log" available as properties of the model,
 * followed by relations of table "alarm_log" available as properties of the model.
 *
 * @property integer $id
 * @property string $log_time
 * @property string $log_reason
 * @property integer $alarm_config_id
 *
 * @property AlarmConfig $alarmConfig
 */
abstract class BaseAlarmLog extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'alarm_log';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AlarmLog|AlarmLogs', $n);
	}

	public static function representingColumn() {
		return 'log_time';
	}

	public function rules() {
		return array(
			array('log_time, alarm_config_id', 'required'),
			array('alarm_config_id', 'numerical', 'integerOnly'=>true),
			array('log_reason', 'length', 'max'=>45),
			array('log_reason', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, log_time, log_reason, alarm_config_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'alarmConfig' => array(self::BELONGS_TO, 'AlarmConfig', 'alarm_config_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'log_time' => Yii::t('app', 'Log Time'),
			'log_reason' => Yii::t('app', 'Log Reason'),
			'alarm_config_id' => null,
			'alarmConfig' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('log_time', $this->log_time, true);
		$criteria->compare('log_reason', $this->log_reason, true);
		$criteria->compare('alarm_config_id', $this->alarm_config_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}