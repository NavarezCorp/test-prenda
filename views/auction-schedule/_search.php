<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\AuctionScheduleSearch */
    /* @var $form yii\widgets\ActiveForm */
?>
<div class="auction-schedule-search">
    <?php
        $form = ActiveForm::begin([
            'action'=>['index'],
            'method'=>'get',
        ]);
    ?>
        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'datetime_added') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'date') ?>
        <div class="form-group">
            <?= Html::submitButton('Search', ['class'=>'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>