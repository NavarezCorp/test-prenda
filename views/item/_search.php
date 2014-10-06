<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\ItemSearch */
    /* @var $form yii\widgets\ActiveForm */
?>
<div class="item-search">
    <?php
        $form = ActiveForm::begin([
            'action'=>['index'],
            'method'=>'get',
        ]);
    ?>
        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'datetime_added') ?>
        <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'auction_schedule_id') ?>
        <?= $form->field($model, 'ticket_no') ?>
        <?php // echo $form->field($model, 'category_id') ?>
        <?php // echo $form->field($model, 'type_id') ?>
        <?php // echo $form->field($model, 'price') ?>
        <?php // echo $form->field($model, 'description') ?>
        <?php // echo $form->field($model, 'is_sold') ?>
        <div class="form-group">
            <?= Html::submitButton('Search', ['class'=>'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class'=>'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>