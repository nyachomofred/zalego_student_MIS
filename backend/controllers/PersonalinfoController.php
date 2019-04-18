<?php

namespace backend\controllers;

use Yii;
use backend\models\Personalinfo;
use backend\models\Sponsorinfo;
use backend\models\Employerinfo;
use backend\models\Academicinfo;
use backend\models\College;
use backend\models\Employmentinfo;
use backend\models\Courseapplied;
use backend\models\EmployerinfoSearch;
use backend\models\PersonalinfoSearch;
use backend\models\SponsorinfoSearch;
use backend\models\AcademicinfoSearch;
use backend\models\CollegeSearch;
use backend\models\EmploymentinfoSearch;
use backend\models\CourseappliedSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonalinfoController implements the CRUD actions for Personalinfo model.
 */
class PersonalinfoController extends Controller
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
     * Lists all Personalinfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PersonalinfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Personalinfo model.
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

    /**
     * Creates a new Personalinfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Personalinfo();
        $sponsorinfo=new Sponsorinfo();
        $employerinfo=new Employerinfo();
        $academicinfo=new Academicinfo();
        $college=new College();
        $employmentinfo=new Employmentinfo();
        $courseapplied=new Courseapplied();
        
        if ($model->load(Yii::$app->request->post()) && $sponsorinfo->load(Yii::$app->request->post())&& 
         $employerinfo->load(Yii::$app->request->post())&& $academicinfo->load(Yii::$app->request->post())&& $college->load(Yii::$app->request->post()) &&
         $employmentinfo->load(Yii::$app->request->post()) && $courseapplied->load(Yii::$app->request->post())) {
             if($model->validate()&& $sponsorinfo->validate()&& $employerinfo->validate()&& $academicinfo->validate()&& $college->validate()&& $employmentinfo->validate()&& $courseapplied->validate()){
                $model->save();
                $sponsorinfo->student_id=$model->id;
                $sponsorinfo->save();
                $employerinfo->student_id=$model->id;
                $employerinfo->save();
                $academicinfo->student_id=$model->id;
                $academicinfo->save();
                $college->student_id=$model->id;
                $college->save();
                $employmentinfo->student_id=$model->id;
                $employmentinfo->save();
                $courseapplied->student_id=$model->id;
                $courseapplied->course=implode(",",$courseapplied->course);
                $courseapplied->save();
                return $this->redirect(['view', 'id' => $model->id]);
             }
           
          
        }

        return $this->render('create', [
            'model' => $model,
            'sponsorinfo'=>$sponsorinfo,
            'employerinfo'=>$employerinfo,
            'academicinfo'=>$academicinfo,
            'college'=>$college,
            'employmentinfo'=>$employmentinfo,
            'courseapplied'=>$courseapplied,

        ]);
    }

    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personalinfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Personalinfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Personalinfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Personalinfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
