<?php
/* @var $this TakipGrupController */
/* @var $model vtTakipGrup */

$this->breadcrumbs=array(
	'Vt Takip Grups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List vtTakipGrup', 'url'=>array('index')),
	array('label'=>'Manage vtTakipGrup', 'url'=>array('admin')),
);
?>

<h1>Create vtTakipGrup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>