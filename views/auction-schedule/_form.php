<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\AuctionSchedule */
    /* @var $form yii\widgets\ActiveForm */
?>
<div class="auction-schedule-form">
    <?php $form = ActiveForm::begin(); ?>
        <hr>
        <!--<?= $form->field($model, 'datetime_added')->textInput() ?>-->
        <?= $form->field($model, 'user_id')->textInput() ?>
        <?= $form->field($model, 'date')->textInput() ?>
        <hr>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class'=>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>