<?php $this->pageTitle=Yii::app()->name; ?>
<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Input Berita Acara', 'url'=>array('/beritaacara/admin')),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
<center>
<h2>Welcome to Sistem Inventorisasi Modem Plasa Telkom Cimahi </h2>

<?php
$this->widget('application.extensions.s3slider.S3Slider',
        array(
             'images' => array(
                    array('images/1.jpg', 'Telkom The World is in  Your Hand'),
                    array('images/2.jpg', 'Sister Inventorisasi Modem'),
                    array('images/3.jpg', 'Plasa Telkom Cimahi'),
                    array('images/4.jpg', 'i-sistar'),
                    array('images/5.jpg', 'Telkom The World is in Your Hand'),
              ),
              'width' => '640',
              'height' => '380',
        )
  );
?>

</center>