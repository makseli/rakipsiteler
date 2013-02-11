<?php
/* @var $this SiteEtiketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vt Site Etikets',
);

$this->menu=array(
	array('label'=>'Create vtSiteEtiket', 'url'=>array('create')),
	array('label'=>'Manage vtSiteEtiket', 'url'=>array('admin')),
);
?>

<h1>Vt Site Etikets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
