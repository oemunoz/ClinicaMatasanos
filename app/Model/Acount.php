<?php
Class Acount extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Insurance','Patient');
}
?>