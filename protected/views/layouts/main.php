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
    $baseUrl = Yii::app()->baseUrl;
    $cs = Yii::app()->getClientScript();
    $bootstrap_path = Yii::app()->assetManager->publish(Yii::app()->basePath . '/extensions/bootstrap/');
    Yii::app()->bootstrap->register();
    $cs->registerCssFile($baseUrl . '/css/font-awesome.css');
    $cs->registerCssFile($baseUrl.'/css/styles.css');
    ?>
    <!--<link rel="stylesheet" type="text/css" href="<?php /*echo Yii::app()->request->baseUrl; */?>/css/styles.css" />-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="wrapper">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">
            <img src="<?php echo Yii::app()->baseUrl;?>/images/logo.png" />
            </a>
            <div class="nav-collapse collapse">
                <?php
                if(Yii::app()->user->isGuest):
                ?>
                    <?php $this->widget('ext.hoauth.widgets.HOAuth'); ?>
                <?php
                endif;
                ?>
                <div class="navbar-text pull-right">
                     <?php
                    if(!Yii::app()->user->isGuest)
                    {
                        ?>
                        <div class="navbar-text pull-right button-area">
                <a>
                        <img src="<?php echo Yii::app()->user->getState("__user_photo_url")?>"/>
                        <?php echo ucfirst(Yii::app()->user->getState("__user_first_name"))
                        ." ".ucfirst(Yii::app()->user->getState("__user_last_name"));?>
                </a>

                        <!--<i class="icon-signout"></i>-->
                        <a href="<?php echo Yii::app()->baseUrl;?>/site/logout" tabindex="-1">
                            Log Out
                        </a>

            </div>

                    <?php
                    }
                    ?>
                </div>
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


	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; Blazing Passions. <?php echo date('Y'); ?>
	</div><!-- footer -->

</div><!-- page -->
</div> <!-- Body Wrapper Div Ends-->
</body>
</html>
