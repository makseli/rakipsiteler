<?php
/* @var $this TakipGrupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vt Takip Grups',
);

$this->menu=array(
	array('label'=>'Create vtTakipGrup', 'url'=>array('create')),
	array('label'=>'Manage vtTakipGrup', 'url'=>array('admin')),
);
?>

<h1>Vt Takip Grups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
