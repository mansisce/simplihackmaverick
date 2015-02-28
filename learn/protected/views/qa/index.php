<?php
/* @var $this QaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Qas',
);

$this->menu=array(
	array('label'=>'Create Qa', 'url'=>array('create')),
	array('label'=>'Manage Qa', 'url'=>array('admin')),
);
?>

<h1>Qas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
