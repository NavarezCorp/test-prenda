<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\AuctionScheduleSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Auction Schedules';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="auction-schedule-index">
    <h1 class="pull-left"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p class="pull-right"><?= Html::a('Create Auction Schedule', ['create'], ['class'=>'btn btn-success']) ?></p>
    <hr class="prenda-clear">
    <?=
        GridView::widget([
            'dataProvider'=>$dataProvider,
            'filterModel'=>$searchModel,
            'columns'=>[
                ['class'=>'yii\grid\SerialColumn'],
                //'id',
                //'datetime_added',
                'user_id',
                'date',
                ['class'=>'yii\grid\ActionColumn'],
            ],
        ]);
    ?>
</div>