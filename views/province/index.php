<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\ProvinceSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Provinces';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-index">
    <h1 class="pull-left"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p class="pull-right"><?= Html::a('Create Province', ['create'], ['class'=>'btn btn-success']) ?></p>
    <hr class="prenda-clear">
    <?=
        GridView::widget([
            'dataProvider'=>$dataProvider,
            'filterModel'=>$searchModel,
            'columns'=>[
                ['class'=>'yii\grid\SerialColumn'],
                //'id',
                //'datetime_added',
                'name',
                ['class'=>'yii\grid\ActionColumn'],
            ],
        ]);
    ?>
</div>