<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\FileHelper;
use yii\data\ArrayDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;
use frontend\models\Article;
use frontend\models\ArticleSearch;
use common\helpers\Media;
/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends FrontendController
{
    const PAGE_SIZE = 6;
    private $uploadDir = "@uploads/article";
    private $viewaffix = '.twig'; //null to use .php views, can be set to .twig
    /**
     * Lists all Article models.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        /**
         * How many articles we want to display per page.
         * @var integer
         */
        $pageSize = self::PAGE_SIZE;

        /**
         * Articles have to be published.
         * @var boolean
         */
        $published = true;
        $searchModel = new ArticleSearch();
        $params = Yii::$app->request->queryParams;
        if(isset(Yii::$app->request->queryParams['category'])){
            $category =  Yii::$app->request->queryParams['category'];
            $params['ArticleSearch']['category'] = Article::getCategoryId($category);
        }
        $dataProvider = $searchModel->search($params, $pageSize, $published);

        return $this->render('index'.$this->viewaffix, [

            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /** Search page **/

    public function actionSearch(){
        /**
         * How many articles we want to display per page.
         * @var integer
         */

        $pageSize = self::PAGE_SIZE;
        /**
         * Articles have to be published.
         * @var boolean
         */
        $published = true;
        $searchModel = new ArticleSearch();
        $params = Yii::$app->request->queryParams;
        $dataProvider = $searchModel->search($params, $pageSize, $published);

        return $this->render('search'.$this->viewaffix,[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => new Article()
        ]);
    }

    /**
     * Displays a single Article model.
     * 
     * @param  integer $id
     * @return mixed
     */
    public function actionView($id,$title="")
    {
        $model = $this->findModel($id);
        $directory = Yii::getAlias($this->uploadDir. DIRECTORY_SEPARATOR) . $model->id; //where we want to save the file
        return $this->render('view'.$this->viewaffix, [
            'model' => $model,
            'attachments' => $model->attachments,
            'dir' => $directory,
        ]);
    }



    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * 
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

        $model->user_id = Yii::$app->user->id;
        if ($model->load(Yii::$app->request->post() ))
        {
            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create'.$this->viewaffix, [
            'model' => $model,
        ]);
    }
    public function createPath($path) {
        if (is_dir($path)) return true;
        $prev_path = substr($path, 0, strrpos($path, '/', -2) + 1 );
        $return = createPath($prev_path);
        return ($return && is_writable($prev_path)) ? mkdir($path) : false;
    }
    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * 
     * @param  integer $id
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->user->can('updateArticle', ['model' => $model])) 
        {
            if ($model->load(Yii::$app->request->post()))
            {
                if($model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }else{
                    print_r($model->getErrors());
                }
            } 
            else 
            {
                return $this->render('update'.$this->viewaffix, [
                    'model' => $model,
                ]);
            }
        }
        else
        {
            throw new MethodNotAllowedHttpException(Yii::t('app', 'You are not allowed to access this page.'));
        } 
    }



    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * 
     * @param  integer $id
     * @return mixed
     *
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect('admin');
    }

    /**
     * Manage Articles.
     * 
     * @return mixed
     */
    public function actionAdmin()
    {
        /**
         * How many articles we want to display per page.
         * @var integer
         */
        $pageSize = 11;

        /**
         * Only admin+ roles can see everything.
         * Editors will be able to see only published articles and their own drafts @see: search(). 
         * @var boolean
         */
        $published = (Yii::$app->user->can('admin')) ? false : true ;

        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $pageSize, $published);

        return $this->render('admin'.$this->viewaffix, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * 
     * @param integer  $id
     * @return Article The loaded model.
     * 
     * @throws NotFoundHttpException if the model cannot be found.
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) 
        {
            return $model;
        } 
        else 
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}