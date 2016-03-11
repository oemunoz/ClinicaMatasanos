<?php
Class Patient extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Addresses');
}
?>