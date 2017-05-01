<?php
namespace frontend\controllers;
use Yii;
use common\helpers\Media;
use triawarman\richFilemanager\FileManagerAction;


class MediaController extends FrontendController
{
    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actions() {
        return[
            'file-manager'=>[
                'class' => FileManagerAction::className(),
                'auth' => true, //INFO: Default true
                'serverConfig' => [
                    'options' =>[
                        "serverRoot" => true,
                        "fileRoot" => "/user_files/"
                    ]
                ],
            ]
        ];
    }
    /*Handles upload of different types of files*/
    public function actionUpload($type,$field,$id=null)
    {
        if($type == 'image'){
            return Media::uploadImage($field);
        }else{
            return Yii::t('app','Type is not an image');
        }
    }

    /**
     * Action to call when you need to delete an uploaded image from temp
     */
    public function actionImageDelete($name)
    {
        return Media::deleteImage($name);
    }

}