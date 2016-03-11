<?php
Class Doctor extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Addresses');
}
?>