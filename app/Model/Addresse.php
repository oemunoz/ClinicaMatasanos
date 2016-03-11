<?php
Class Addresse extends AppModel{
	//public $displayField = 'address';
	public $hasMany = array('Doctor','Patient','Consutorio');
}
?>