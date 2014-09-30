<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="language" content="en" />

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <?php
    $bootstrap_path = Yii::app()->assetManager->publish(Yii::app()->basePath . '/extensions/bootstrap/');

    Yii::app()->bootstrap->register();
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
            <div class="nav-collapse collapse">
                <?php
                if(Yii::app()->user->isGuest):
                ?>
                <p class="navbar-text pull-right">
                    <a href="<?php echo Yii::app()->baseUrl;?>/site/login" class="btn btn-info">Follow Your Passion</a>
                </p>
                <?php
                endif;
                ?>
                <ul class="nav">
                    <li class="active"><a href="<?php echo Yii::app()->baseUrl;?>">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php
                    if(!Yii::app()->user->isGuest)
                    {
                        ?>
                        <a href="<?php echo Yii::app()->baseUrl;?>/site/logout" tabindex="-1">
                            <i class="icon-signout"></i> Logout (<?php echo Yii::app()->user->name;?> )</a>
                    <?php
                    }
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container" id="page">
    <?php
    //var_dump(Yii::app()->user->name);
    /*$x = User::model()->findByEmail(Yii::app()->user->name);
    var_dump($x->id);*/
   /* $userOAuths = UserOAuth::model()->findUser(3);
    var_dump($userOAuths);*/
    ?>

	<!--<div id="mainmenu">
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
	</div>--><!-- mainmenu -->


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Tropix Technologies.<br/>
		All Rights Reserved.<br/>

	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
