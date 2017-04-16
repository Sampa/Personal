<?php
namespace frontend\controllers;

use frontend\models\Article;
use frontend\models\ArticleSearch;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;
use Yii;
use common\helpers\My;
/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends FrontendController
{
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
        $pageSize = 2;

        /**
         * Articles have to be published.
         * @var boolean
         */
        $published = true;

        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $pageSize, $published);
        return $this->render('index.twig', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * 
     * @param  integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) 
        {
            return $this->redirect(['view', 'id' => $model->id]);
        } 
        else 
        {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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
            if ($model->load(Yii::$app->request->post()) && $model->save()) 
            {
                return $this->redirect(['view', 'id' => $model->id]);
            } 
            else 
            {
                return $this->render('update', [
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

        return $this->render('admin', [
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
/*object(yii\data\ActiveDataProvider)#90 (11) {
# ["query"]=> object(yii\db\ActiveQuery)#92 (28)
# { ["sql"]=> NULL ["on"]=> NULL
# ["joinWith"]=> NULL
# ["select"]=> NULL
# ["selectOption"]=> NULL
# ["distinct"]=> NULL ["from"]=>
# NULL ["groupBy"]=> NULL ["join"]=> NULL
# ["having"]=> NULL ["union"]=> NULL ["params"]=> array(0) { }
# ["_events":"yii\base\Component":private]=> array(0) { }
# ["_behaviors":"yii\base\Component":private]=> array(0) { }
# ["where"]=> array(3) { [0]=> string(2) "or" [1]=> array(1)
# { ["status"]=> int(2) } [2]=> array(1) { ["user_id"]=> NULL } }
# ["limit"]=> NULL ["offset"]=> NULL ["orderBy"]=> NULL
# ["indexBy"]=> NULL ["emulateExecution"]=> bool(false) ["modelClass"]=> string(23) "
#frontend\models\Article" ["with"]=> NULL ["asArray"]=> NULL ["multiple"]=> NULL
# ["primaryModel"]=> NULL ["link"]=> NULL ["via"]=> NULL ["inverseOf"]=> NULL } ["key"]=> NULL
# ["db"]=> NULL ["id"]=> NULL ["_sort":"yii\data\BaseDataProvider":private]=> object(yii\data\Sort)#95 (9)
# { ["enableMultiSort"]=> bool(false) ["attributes"]=> array(9) { ["id"]=> array(3) { ["asc"]=> array(1)
# { ["id"]=> int(4) } ["desc"]=> array(1) { ["id"]=> int(3) } ["label"]=> string(2) "ID" } ["user_id"]=> array(3)
# { ["asc"]=> array(1) { ["user_id"]=> int(4) } ["desc"]=> array(1) { ["user_id"]=> int(3) } ["label"]=> string(6) "Author" }
# ["title"]=> array(3) { ["asc"]=> array(1) { ["title"]=> int(4) } ["desc"]=> array(1) { ["title"]=> int(3) }
# ["label"]=> string(5) "Title" } ["summary"]=> array(3) { ["asc"]=> array(1) { ["summary"]=> int(4) } ["desc"]=> array(1)
# { ["summary"]=> int(3) } ["label"]=> string(7) "Summary" } ["content"]=> array(3) { ["asc"]=> array(1) { ["content"]=> int(4) }
# ["desc"]=> array(1) { ["content"]=> int(3) } ["label"]=> string(7) "Content" } ["status"]=> array(3)
# { ["asc"]=> array(1) { ["status"]=> int(4) } ["desc"]=> array(1) { ["status"]=> int(3) } ["label"]=> string(6) "Status" }
# ["category"]=> array(3) { ["asc"]=> array(1) { ["category"]=> int(4) } ["desc"]=> array(1)
# { ["category"]=> int(3) } ["label"]=> string(8) "Category" } ["created_at"]=> array(3)
# { ["asc"]=> array(1) { ["created_at"]=> int(4) } ["desc"]=> array(1) { ["created_at"]=> int(3) }
# ["label"]=> string(10) "Created At" } ["updated_at"]=> array(3) { ["asc"]=> array(1)
# { ["updated_at"]=> int(4) } ["desc"]=> array(1) { ["updated_at"]=> int(3) } ["label"]=> string(10) "Updated At" } }
# ["sortParam"]=> string(4) "sort" ["defaultOrder"]=> array(1) { ["id"]=> int(3) } ["route"]=> NULL
["separator"]=> string(1) "," ["params"]=> NULL ["urlManager"]=> NULL
["_attributeOrders":"yii\data\Sort":private]=> NULL }
["_pagination":"yii\data\BaseDataProvider":private]=> object(yii\data\Pagination)#117 (12)
{ ["pageParam"]=> string(4) "page" ["pageSizeParam"]=> string(8) "per-page" ["forcePageParam"]=> bool(true)
["route"]=> NULL ["params"]=> NULL ["urlManager"]=> NULL ["validatePage"]=> bool(true) ["totalCount"]=> int(0)
