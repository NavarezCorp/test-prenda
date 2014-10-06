<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\Image */
    /* @var $form yii\widgets\ActiveForm */
?>
<div class="image-form">
    <?php $form = ActiveForm::begin(); ?>
        <hr>
        <!--<?= $form->field($model, 'datetime_added')->textInput() ?>-->
        <?= $form->field($model, 'item_id')->textInput() ?>
        <?= $form->field($model, 'url')->textInput(['maxlength'=>255]) ?>
        <hr>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class'=>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>