<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

    /* @var $this yii\web\View */
    /* @var $model app\models\Item */
    /* @var $form yii\widgets\ActiveForm */

    $category_list = ArrayHelper::map(\app\models\Category::find()->asArray()->all(), 'id', 'name');
    $type_list = ArrayHelper::map(\app\models\Type::find()->where('category_id=1')->asArray()->all(), 'id', 'name');
?>

<div class="item-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= Html::hiddenInput('Item[user_id]', Yii::$app->user->id); ?>
        <hr>
        <table class="table table-striped table-bordered create-item-table">
            <tbody>
                <tr>
                    <th><?= Html::activeLabel($model, 'auction_schedule_id'); ?></th>
                    <td>
                        <?= Html::activeTextInput($model, 'auction_schedule_id', ['class'=>'form-control', 'style'=>'width:300px;']); ?>
                        <?= Html::error($model, 'auction_schedule_id', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'ticket_no'); ?></th>
                    <td>
                        <?= Html::activeTextInput($model, 'ticket_no', ['class'=>'form-control', 'style'=>'width:200px;']); ?>
                        <?= Html::error($model, 'ticket_no', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'category_id'); ?></th>
                    <td>
                        <?= Html::activeDropDownList($model, 'category_id', $category_list, ['class'=>'form-control']) ?>
                        <?= Html::error($model, 'category_id', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'type_id'); ?></th>
                    <td>
                        <?= Html::activeDropDownList($model, 'type_id', $type_list, ['class'=>'form-control']) ?>
                        <?= Html::error($model, 'type_id', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'price'); ?></th>
                    <td>
                        <?= Html::activeTextInput($model, 'price', ['class'=>'form-control', 'style'=>'width:200px;']); ?>
                        <?= Html::error($model, 'price', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'description'); ?></th>
                    <td>
                        <?= Html::activeTextArea($model, 'description', ['class'=>'form-control']); ?>
                        <?= Html::error($model, 'description', ['class'=>'help-block']); ?>
                    </td>
                </tr>
                <tr>
                    <th><label>Image</label></th>
                    <td>
                        <div class="upload_photo_container">
                            <div class="label_container">
                                <div class="inner">
                                    <span class="plus">+</span><br>
                                    <span>Add Photo</span>
                                </div>
                            </div>
                            <div id="preview_photo1" style="height: 100%;"></div>
                            <input type="file" name="photo[]" id="photo1">
                        </div>
                        <div class="upload_photo_container">
                            <div class="label_container">
                                <div class="inner">
                                    <span class="plus">+</span><br>
                                    <span>Add Photo</span>
                                </div>
                            </div>
                            <div id="preview_photo2" style="height: 100%;"></div>
                            <input type="file" name="photo[]" id="photo2">
                        </div>
                        <div class="upload_photo_container">
                            <div class="label_container">
                                <div class="inner">
                                    <span class="plus">+</span><br>
                                    <span>Add Photo</span>
                                </div>
                            </div>
                            <div id="preview_photo3" style="height: 100%;"></div>
                            <input type="file" name="photo[]" id="photo3">
                        </div>
                        <div class="upload_photo_container">
                            <div class="label_container">
                                <div class="inner">
                                    <span class="plus">+</span><br>
                                    <span>Add Photo</span>
                                </div>
                            </div>
                            <div id="preview_photo4" style="height: 100%;"></div>
                            <input type="file" name="photo[]" id="photo4">
                        </div>
                        <div class="upload_photo_container">
                            <div class="label_container">
                                <div class="inner">
                                    <span class="plus">+</span><br>
                                    <span>Add Photo</span>
                                </div>
                            </div>
                            <div id="preview_photo5" style="height: 100%;"></div>
                            <input type="file" name="photo[]" id="photo5">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th><?= Html::activeLabel($model, 'is_sold'); ?></th>
                    <td>
                        <?= Html::activeCheckbox($model, 'is_sold', ['label'=>null]) ?>
                        <?= Html::error($model, 'is_sold', ['class'=>'help-block']); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class'=>$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>