<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div style="padding: 5px;margin-top:25px;background-color:#f5f5f5;width:1160px;height:220px;border-bottom:3px dotted black;">
    <div style="display:block;float:left;margin-left:120px;margin-top:25px">
        <b>Телефон:(499)340-94-71<br>
        Email:<p style="text-decoration:underline">info@future-group.ru</a></b><br>
        <p style="font-size:35pt;">Комментарии</p>
    </div>
    <div style="display:block;float:right;margin-right:100px;">
        <img src="..\web\imgs\logo.png" style="height: 165px;width: 176px;">
    </div>
</div>
<div class="wrap">
 
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<div style="padding: 5px;margin-top:25px;background-color:#f5f5f5;width:1160px;height:220px;">
     <div style="display:block;float:left;margin-left:100px;margin-top:5px;">
            <img src="..\web\imgs\logo.png" style="height: 105px;width: 110px;">
    </div>
    <div style="display:block;float:left;margin-left:25px;margin-top:20px;">
        <b>Телефон:(499)340-94-71<br>
        Email: <a style="text-decoration:underline;color:black">info@future-group.ru</a><br>
        Адрес: <a style="text-decoration:underline;color:black">115088т Москва ул. 2 Машиностроениябд.7 стр.1</a><br>
        </b>
        <a style="display:block;color:black;margin-top:10px;">&#169; 2010-2014 Future. Все права защищены</a>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
