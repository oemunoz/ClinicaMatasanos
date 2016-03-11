<?php
Class Appoint extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Doctor','Patient','Consutorio');
	public $hasMany = array('ProcApp');
}
?>