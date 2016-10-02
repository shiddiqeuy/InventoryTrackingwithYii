<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beritaacara-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_order'); ?>
		<?php echo $form->textField($model,'tgl_order'); ?>
		<?php echo $form->error($model,'tgl_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_tlp'); ?>
		<?php echo $form->textField($model,'no_tlp'); ?>
		<?php echo $form->error($model,'no_tlp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_speedy'); ?>
		<?php echo $form->textField($model,'no_speedy',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'no_speedy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pelanggan'); ?>
		<?php echo $form->textField($model,'nama_pelanggan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_pelanggan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_bon_modem'); ?>
		<?php echo $form->textField($model,'tgl_bon_modem'); ?>
		<?php echo $form->error($model,'tgl_bon_modem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mac'); ?>
		<?php echo $form->textField($model,'mac',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sn_modem'); ?>
		<?php echo $form->textField($model,'sn_modem',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sn_modem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_modem'); ?>
		<?php echo $form->textField($model,'tipe_modem',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tipe_modem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_psg'); ?>
		<?php echo $form->textField($model,'tgl_psg'); ?>
		<?php echo $form->error($model,'tgl_psg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_cabut'); ?>
		<?php echo $form->textField($model,'tgl_cabut'); ?>
		<?php echo $form->error($model,'tgl_cabut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_agen'); ?>
		<?php echo $form->textField($model,'kode_agen',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kode_agen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paket'); ?>
		<?php echo $form->textField($model,'paket',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'paket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->