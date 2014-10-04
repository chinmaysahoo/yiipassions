<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
$third_party_scripts = Yii::app()->assetManager->publish(Yii::app()->basePath . '/scripts/');
Yii::app()->clientScript->registerScriptFile($third_party_scripts . '/jquery.tagcanvas.min.js');

//Important for redirection after user is authenticated from facebook.
//@todo: this may/may not work check if user is not authenticated.
Yii::app()->user->setReturnUrl(Yii::app()->getBaseUrl().'/passion/index');

//var_dump(Yii::app()->user->returnUrl);

?>
<div class="container-fluid-tag-cloud">
    <div id="myCanvasContainer">
        <canvas width="950" height="400" id="myCanvas">
            <ul>
                <?php
                foreach($tags_global as $k=>$v){
                ?>
                <li><a href="#<?php echo $v->global_tag_name;?>"><?php echo $v->global_tag_name;?></a></li>
                <?php
                }
                ?>
            </ul>
        </canvas>
    </div>
</div>

<script type="text/javascript">
    window.onload = function() {
        try {
            TagCanvas.Start('myCanvas', '', {textFont: 'Impact,"Arial Black",sans-serif',
                textColour: '#FFD700',
                textHeight: 18,
                weight: true,
                initial: [0.1,-0.1],
                wheelZoom: false,
                radiusX: 4,
                outlineColour: '#FFD700'

            });
        } catch(e) {
            // something went wrong, hide the canvas container
            document.getElementById('myCanvasContainer').style.display = 'none';
        }
    };
</script>
<div class="container-fluid-carousel">
    <div class="row-fluid">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/001.jpg"" alt="">
                                </div>
                                <div class="caption">
                                    <h5>First Caption</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/002.jpg"" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Second Caption</h5>
                                    <p>Consectetur adipiscing elit. consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/003.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Third Caption</h5>
                                    <p>Adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.Lorem ipsum dolor sit amet, consectetur .</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/004.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Fourth Caption</h5>

                                <p>Nunc sed accumsan lorem, Lorem ipsum dolor sit amet, consectetur adipiscing elit.  eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/005.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Fifth Caption</h5>
                                    <p>Ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/006.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Sixth Caption</h5>
                                    <p>Dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/007.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Seventh Caption</h5>
                                    <p>Sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/008.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Eighth Caption</h5>
                                    <p>Amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/001.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Ninth Caption</h5>
                                    <p>Adipiscing lorem ipsum dolor sit amet, consectetur elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/009.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Tenth Caption</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/010.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Eleven Caption</h5>
                                    <p>Elit lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                        <li class="span3">
                            <div>

                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/011.jpg" alt="">
                                </div>
                                <div class="caption">
                                    <h5>Twelve Caption</h5>
                                    <p>Nunc lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                    <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#myCarousel').carousel({interval:5000,wrap:true});
</script>
