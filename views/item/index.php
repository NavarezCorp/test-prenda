<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\ItemSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Items';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">
    <h1 class="pull-left"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p class="pull-right"><?= Html::a('Create Item', ['create'], ['class'=>'btn btn-success']) ?></p>
    <hr class="prenda-clear">
    <?=
        GridView::widget([
            'dataProvider'=>$dataProvider,
            'filterModel'=>$searchModel,
            'columns'=>[
                ['class'=>'yii\grid\SerialColumn'],
                //'id',
                //'datetime_added',
                //'user_id',
                //'auction_schedule_id',
                'ticket_no',
                //'category_id',
                ['attribute'=>'category_id', 'value'=>'category.name'],
                //'type_id',
                ['attribute'=>'type_id', 'value'=>'type.name'],
                'price',
                //'description',
                'is_sold',
                ['class'=>'yii\grid\ActionColumn'],
            ],
        ]);
    ?>
</div>