<?php
Class ProcApp extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Proccedure','Appoint','Patienscv');
}
?>