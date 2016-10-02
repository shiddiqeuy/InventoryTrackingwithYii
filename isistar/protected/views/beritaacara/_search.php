<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_order'); ?>
		<?php echo $form->textField($model,'tgl_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_tlp'); ?>
		<?php echo $form->textField($model,'no_tlp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_speedy'); ?>
		<?php echo $form->textField($model,'no_speedy',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_pelanggan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_bon_modem'); ?>
		<?php echo $form->textField($model,'tgl_bon_modem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mac'); ?>
		<?php echo $form->textField($model,'mac',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sn_modem'); ?>
		<?php echo $form->textField($model,'sn_modem',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipe_modem'); ?>
		<?php echo $form->textField($model,'tipe_modem',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_psg'); ?>
		<?php echo $form->textField($model,'tgl_psg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_cabut'); ?>
		<?php echo $form->textField($model,'tgl_cabut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_agen'); ?>
		<?php echo $form->textField($model,'kode_agen',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paket'); ?>
		<?php echo $form->textField($model,'paket',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->