<?php

Yii::import('application.models._base.BaseClient');

class Client extends BaseClient
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}