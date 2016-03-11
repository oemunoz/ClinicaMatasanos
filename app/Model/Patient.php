<?php
Class Patient extends AppModel{
	#public $displayField = 'address';
	public $belongsTo = array('Addresse');
	public $hasMany = array('Patienscv','Appoint','Acount');
}
?>