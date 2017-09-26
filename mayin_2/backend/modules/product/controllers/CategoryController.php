<?php

namespace backend\modules\product\controllers;

use Yii;
use backend\modules\product\models\Category;
use backend\modules\product\models\CategorySearch;
use backend\modules\product\models\Group;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        $group = new Group();
        $allGroup = $group->getAllGroup();

        $datacat = $model->getCategoryParent();
        if(empty($datacat)) $datacat = array();

        $time = time();
        $model->created_at = $time;
        $model->updated_at = $time;



        if ($model->load(Yii::$app->request->post())) {

            if($model->parent_id==''){
                $model->parent_id = 0;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->idCate]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'allGroup' => $allGroup,
                'datacat' => $datacat,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $group = new Group();
        $allGroup = $group->getAllGroup();

        $datacat = $model->getCategoryParent();
        if(empty($datacat)) $datacat = array();

        $time = time();
        $model->updated_at = $time;

        if ($model->load(Yii::$app->request->post())) {
            if($model->parent_id==''){
                $model->parent_id = 0;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->idCate]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'allGroup' => $allGroup,
                'datacat' => $datacat,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
