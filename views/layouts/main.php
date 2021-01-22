<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
     <link rel="shortcut icon" href="гшиш" type="image/x-icon">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
 <div class="wrapper">
<nav class="navbar main-menu navbar-default">
    <div class="container">

        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Home</a>

                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>


<footer class="footer-widget-section" style="margin-top: 210px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"></div>
                    <div class="about-content">
                    </div>
                    <div class="address">
                      

                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                   

                    <div >
                        
                        <div >
                           
                                <div class="single-review">
                                    <div ">
                                        
                                    </div>
                                    <div class="author-id">
                                       

                                        <div class="author-text">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <div >
                                        
                                    <div class="author-id">
                                      

                                        <div class="author-text">
                                       

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div >
                                    <div >
                                        
                                    </div>
                                    <div class="author-id">
                                       

                                        <div class="author-text">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    


                    <div class="custom-post">
                        <div>
                         
                        </div>
                        <div>
                           
                          
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center"> <a href="#"> <i
                            class="fa fa-heart"></i> <a href="#">Daria</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>