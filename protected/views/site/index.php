<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->pageTitle=Yii::app()->name;
$third_party_scripts = Yii::app()->assetManager->publish(Yii::app()->basePath . '/scripts/');
Yii::app()->clientScript->registerScriptFile($third_party_scripts . '/jquery.tagcanvas.min.js');
?>
<div class="container-fluid-tag-cloud">
    <div id="myCanvasContainer">
        <canvas width="950" height="400" id="myCanvas">
            <ul>
                <li><a href="#origami/">Origami for Kids</a></li>
                <li><a href="#palm-reading-palmistry/">Palmistry</a></li>
                <li><a href="#paper-crafts/">Paper Crafts</a></li>
                <li><a href="#paragliding/">Paragliding</a></li>
                <li><a href="#pet-adoptions/">Pet Adoption</a></li>
                <li><a href="#photography/">Photography </a></li>

                <li><a href="#exercises/">Physical Exercises and Fitness Activities</a></li>

                <li><a href="#quilting/">Quilting</a></li>
                <li><a href="#radios/">Radio</a></li>
                <li><a href="#reading/">Reading</a></li>
                <li><a href="#riddles/">Riddles</a></li>
                <li><a href="#sand-art-sand-sculpting-and-sand-crafts.html">Sand Sculpting and Sand Crafts</a></li>
                <li><a href="#sewing/">Sewing</a></li>
                <li><a href="#singing-lessons/">Singing Lessons</a></li>
                <li><a href="#space-explorations/">Space Exploration</a></li>
                <li><a href="#stamp-collecting/">Stamp Collecting </a>
                <li><a href="#how-to-play-sudoku-step-by-step.html">Sudoku Puzzles</a></li>
                <li><a href="#climbing/">Climbing</a></li>

                <li><a href="#sailing/">Sailing </a> and <a href="#boating/">Boating</a></li>
                <li><a href="#salsa-dancing/">Salsa Dancing</a></li>
                <li><a href="#scrapbooking/">Scrapbooking</a></li>
                <li><a href="#scubadiving/">Scuba Diving</a></li>
                <li><a href="#skateboarding/">Skateboarding</a></li>
                <li><a href="#essential-tips-about-skydiving-for-the-first-time.html">Skydiving / Parachuting</a></li>
                <li><a href="#snow-skiing/">Snow Skiing</a></li>
                <li><a href="#snowboarding/">Snowboarding</a></li>
                <li><a href="#speed-skating-rules-and-regulations.html">Radio</a></li>
                <li><a href="#stained-glass/">Stained Glass</a></li>
                <li><a href="#surfing/">Surfing </a></li>
                <li><a href="#swimming/">Swimming</a></li>
                <li><a href="#tango-dancing-lessons-tango-dance-steps.html">Tango Dance</a></li>
                <li><a href="#treasure-hunting/">Treasure Hunting</a></li>
                <li><a href="#how-to-choose-proper-trekking-poles.html">Trekking</a></li>
                <li><a href="#vacations/">Vacations / Traveling</a></li>
                <li><a href="#watercolor-paintings/">Watercolor Paintings</a></li>
                <li><a href="#wood-carvings-and-crafts.html">Wood Carving</a></li>
                <li><a href="#woodworking/">Woodworking</a></li>
                <li><a href="#writing/">Writing</a></li>

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
                            <div align="center">
                                <div class="caption">
                                    <h5>First Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/001.jpg"" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Second Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/002.jpg"" alt="">
                                </div>
                                <p>Consectetur adipiscing elit. consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Third Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/003.jpg" alt="">
                                </div>
                                <p>Adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.Lorem ipsum dolor sit amet, consectetur .</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Fourth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/004.jpg" alt="">
                                </div>
                                <p>Nunc sed accumsan lorem, Lorem ipsum dolor sit amet, consectetur adipiscing elit.  eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Fifth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/005.jpg" alt="">
                                </div>
                                <p>Ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Sixth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/006.jpg" alt="">
                                </div>
                                <p>Dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Seventh Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/007.jpg" alt="">
                                </div>
                                <p>Sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Eighth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/008.jpg" alt="">
                                </div>
                                <p>Amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Ninth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/001.jpg" alt="">
                                </div>
                                <p>Adipiscing lorem ipsum dolor sit amet, consectetur elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Tenth Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/009.jpg" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Eleven Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/010.jpg" alt="">
                                </div>
                                <p>Elit lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div align="center">
                                <div class="caption">
                                    <h5>Twelve Caption</h5>
                                </div>
                                <div class="thumbnail">
                                    <img src="<?php echo Yii::app()->baseUrl ?>/images/011.jpg" alt="">
                                </div>
                                <p>Nunc lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed accumsan lorem, eget lobortis metus.</p>
                                <a class="btn btn-mini btn-info" href="#"><i class="icon-tag icon-white"></i>&nbsp;View Detail</a>
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
