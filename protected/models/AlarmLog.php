<?php

Yii::import('application.models._base.BaseAlarmLog');

class AlarmLog extends BaseAlarmLog
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}