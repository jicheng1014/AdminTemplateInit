<?php

Yii::import('application.models._base.BaseAlarmConfig');

class AlarmConfig extends BaseAlarmConfig
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}