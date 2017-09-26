<?php

namespace backend\modules\product\controllers;

use Yii;
use backend\modules\product\models\Product;
use backend\modules\product\models\ProductSearch;
use backend\modules\product\models\Category;
use backend\modules\product\models\Group;
use backend\modules\product\models\Suppliers;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        $group = new Group();
        $allGroup = $group->getAllGroup();

        $suppliers = new Suppliers();
        $allSuppliers = $suppliers->getAllsuppliers();

        $cate = new Category();
        $datacat = $cate->getCategoryParent();
        if(empty($datacat)) $datacat = array();

        $time = time();
        $model->created_at = $time;
        $model->updated_at = $time;
        $model->group_ID = '1';

        $myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
        // Get domain portion
        $myUrl .= '://'.$_SERVER['HTTP_HOST'];

        if ($model->load($post_info = Yii::$app->request->post()) && $model->validate()) {
            $model->startSale =  date("Y-m-d", strtotime($post_info['Product']['startSale']));
            $model->endSale =  date("Y-m-d", strtotime($post_info['Product']['endSale']));
            $model->image = str_replace($myUrl, "", $post_info['Product']['image']);
            if($model->save())
                return $this->redirect('index');
        } else {
            return $this->render('create', [
                'model' => $model,
                'allGroup' => $allGroup,
                'datacat' => $datacat,
                'allSuppliers' => $allSuppliers,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $group = new Group();
        $allGroup = $group->getAllGroup();

        $suppliers = new Suppliers();
        $allSuppliers = $suppliers->getAllsuppliers();

        $cate = new Category();
        $datacat = $cate->getCategoryParent();
        if(empty($datacat)) $datacat = array();

        $time = time();
        $model->updated_at = $time;
        
        $myUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] && !in_array(strtolower($_SERVER['HTTPS']),array('off','no'))) ? 'https' : 'http';
        // Get domain portion
        $myUrl .= '://'.$_SERVER['HTTP_HOST'];

        if ($model->load($post_info = Yii::$app->request->post()) && $model->validate()) {
            $model->startSale =  date("Y-m-d", strtotime($post_info['Product']['startSale']));
            $model->endSale =  date("Y-m-d", strtotime($post_info['Product']['endSale']));
            $model->image = str_replace($myUrl, "", $post_info['Product']['image']);
            if($model->save())
            return $this->redirect(['view', 'id' => $model->proID]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'allGroup' => $allGroup,
                'datacat' => $datacat,
                'allSuppliers' => $allSuppliers,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
