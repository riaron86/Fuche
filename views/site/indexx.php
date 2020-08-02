<?php




use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Orders;
foreach ($orders as $orderss){
    
    echo "
    <div class='orders'>
        <b>$orderss->name</b> <a>$orderss->date</a><br>
        <a>$orderss->comment </a>
        
        </div><br>
";}
?>


<div class="pagination">
    <?php echo LinkPager::widget(['pagination' => $pagination]); ?>
    </div>





<?php $form = ActiveForm::begin(['options' => ['id' => 'inputform', 'options' => ['class' => 'inputform','enctype' => 'multipart/form-data']]])?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'comment')->textarea(['rows' => '6'])?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end() ?>