<?php
Class Doctor extends AppModel{
	//public $displayField = 'address';
	public $belongsTo = array('Addresse');	
	public $hasMany = array('Appoint');
}
?>