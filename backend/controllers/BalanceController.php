<?php

namespace backend\controllers;

use Yii;
use backend\models\Balance;
use backend\models\BalanceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BalanceController implements the CRUD actions for Balance model.
 */
class BalanceController extends Controller
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
     * Lists all Balance models.
     * @return mixed
     */
    public function actionIndex()
    {
       // $this->layout='CampusLayout';
        $searchModel = new BalanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    //create invoice page
    public function actionInvoice($id)
    {
        return $this->render('invoice',['model'=>$this->findModel($id)]);
    }
    public function actionView($id)
    {
       // $this->layout='CampusLayout';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $this->layout='CampusLayout';
        $model = new Balance();

        if ($model->load(Yii::$app->request->post())) {
            if($model->required_amount>=$model->amount_to_pay){
                $model->amount_paid=0;
                $model->balance=$model->amount_to_pay-$model->amount_paid;
                $model->save();
                Yii::$app->session->setFlash('debit', '
                   <div class="alert alert-success alert-dismissable">
                   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                   <strong> </strong> Succcess.</div>'
               );
               return $this->redirect(['index']);
            }
             
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    
    public function actionUpdate($id)
    {
        //$this->layout='CampusLayout';
         $bal=new Balance();
         $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->required_amount>=$model->amount_to_pay){
                $amount_to_pay=Balance::find()->where(['student_id'=>$model->student_id])->sum('amount_to_pay');
                $amountpaid=Balance::find()->where(['student_id'=>$model->student_id])->sum('amount_paid');
                $balance=$amount_to_pay-$amountpaid;
                Yii::$app->db->createCommand()
                ->update('balance', ['required_amount' => $model->required_amount,'amount_to_pay'=>$model->amount_to_pay,'balance'=>$balance], ['student_id' => $model->student_id])
                ->execute();
                Yii::$app->session->setFlash('update', '
                <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong> </strong> update sucessfull.</div>'
             );
             return $this->redirect(['index']);
            }
            
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    
    protected function findModel($id)
    {
        if (($model = Balance::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
