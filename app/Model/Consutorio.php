<?php
Class Consutorio extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Addresse');		
	public $hasMany = array('Appoints');
}
?>