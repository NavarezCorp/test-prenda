<?php
    use yii\helpers\Html;

    /* @var $this yii\web\View */
    /* @var $model app\models\AuctionSchedule */

    $this->title = 'Create Auction Schedule';
    $this->params['breadcrumbs'][] = ['label'=>'Auction Schedules', 'url'=>['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="auction-schedule-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <?=
        $this->render('_form', [
            'model' => $model,
        ])
    ?>
</div>