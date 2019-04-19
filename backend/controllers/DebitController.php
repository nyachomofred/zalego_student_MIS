<?php

namespace backend\controllers;

use Yii;
use backend\models\Debit;
use backend\models\Balance;
use backend\models\DebitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DebitController implements the CRUD actions for Debit model.
 */
class DebitController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Debit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='CampusLayout';
        $searchModel = new DebitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Debit model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    
    public function actionCreate()
    {
        $this->layout='CampusLayout';
        $balance = new Balance();
        $model = new Debit();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->required_amount>=$model->amount_pay){
                if($model->save()){
                    $balance->student_id=$model->student_id;
                    $balance->required_amount=$model->required_amount;
                    $balance->amount_to_pay=$model->amount_pay;
                    $balance->amount_paid=0;
                    $balance->balance=0;
                    $balance->save();
                    return $this->redirect(['balance/index']);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

   
    public function actionUpdate($id)
    {
        $this->layout='CampusLayout';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

   
    public function actionDelete($id)
    {
        $this->layout='CampusLayout';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Debit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Debit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Debit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
