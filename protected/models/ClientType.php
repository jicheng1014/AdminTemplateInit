<?php

Yii::import('application.models._base.BaseClientType');

class ClientType extends BaseClientType
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}