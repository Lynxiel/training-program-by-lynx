<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
    <?php Yii::app()->bootstrap->register(); ?>
    <!-- customize bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">


    <!--   <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />


	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
        <?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
            'heading' => 'Hello, world!',
            'content' => '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' . TbHtml::button('Learn more', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE)),
        )); ?>
	</div><!-- header -->

	<div id="mainmenu">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_PILLS,
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>


	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by IntelWeb.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
