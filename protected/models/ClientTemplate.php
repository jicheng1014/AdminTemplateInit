<?php

Yii::import('application.models._base.BaseClientTemplate');

class ClientTemplate extends BaseClientTemplate
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}