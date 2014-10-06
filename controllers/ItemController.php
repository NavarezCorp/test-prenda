<?php

namespace app\controllers;

use Yii;
use app\models\Item;
use app\models\ItemSearch;
use app\models\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemController implements the CRUD actions for Item model.
 */
class ItemController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Item models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Item model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Item model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Item();

        if($model->load(Yii::$app->request->post()) && $model->save()){
            foreach($_FILES['photo']['name'] as $key => $value){
                if(!empty($value)){
                    $file['name'] = Yii::$app->getSecurity()->generateRandomString() . '_' . $model->id . '_' . $_FILES['photo']['name'][$key];
                    $file['type'] = $_FILES['photo']['type'][$key];
                    $file['tmp_name'] = $_FILES['photo']['tmp_name'][$key];
                    $file['error'] = $_FILES['photo']['error'][$key];
                    $file['size'] = $_FILES['photo']['size'][$key];

                    $this->upload_photo($file, $model->id);
                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }
        else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Item model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Item model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Item model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Item the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected  function upload_photo($file, $model_id){
        $model_images = new Image;
        $model_images->item_id = $model_id;

        $allowed_exts = array(
            "gif",
            "jpeg",
            "jpg",
            "png"
        );

        $allowed_types = array(
            "image/gif",
            "image/jpeg",
            "image/jpg",
            "image/pjpeg",
            "image/x-png",
            "image/png"
        );

        $allowed_size = 128000000;

        $temp = explode(".", $file["name"]);
        $extension = end($temp);

        if(in_array($file["type"], $allowed_types) && ($file["size"] < $allowed_size) && in_array($extension, $allowed_exts)){
            if($file["error"] == 0){
                if(!file_exists(getcwd() . Yii::$app->params['upload_url'] . $file["name"])){
                    move_uploaded_file($file["tmp_name"], getcwd() . Yii::$app->params['upload_url'] . $file["name"]);
                }
                else{
                    echo $file["name"] . " already exists. ";
                    //die();
                }

                $model_images->url = Yii::$app->params['upload_url'] . $file["name"];

                if($model_images->save()){
                    echo 'saved';
                    //die();
                }
                else{
                    echo 'not saved';
                    var_dump($model_images);
                    //die();
                }
            }
            else{
                echo "Return Code: " . $file["error"] . "<br>";
                //die();
            }
        }
        else{
            echo "Invalid file";
            //die();
        }
    }
}
