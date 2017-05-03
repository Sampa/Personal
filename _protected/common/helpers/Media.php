<?php
/**
 * Created by PhpStorm.
 * User: Happyjuiced
 * Date: 2017-04-29
 * Time: 11:22
 */

namespace common\helpers;

use Yii;
use yii\base\Object;
use yii\helpers\StringHelper;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use yii\helpers\Json;
use yii\helpers\Html;

class Media extends Object
{
    const uploadDir = '@uploads';
    const ds = DIRECTORY_SEPARATOR;
    /**
     * Returns files in a $subfolder and returns them as an array
     */
    public static function getFiles($folder,$subfolder){
        $dir = Yii::getAlias(self::uploadDir) . self::ds . $folder . $subfolder;
        if(is_dir($dir)){
            return FileHelper::findFiles($dir);
        }
        return null;
    }

    /**
     * Returns an array with the attachments belonging to the specific model
     * @param $model
     * @return array with the list of files
     */
    public static function getAttachments($model){
        $dir = Yii::getAlias(self::uploadDir). self::ds . StringHelper::baseName($model->className()) . self::ds . $model->id;
        if(is_dir($dir)){
            return FileHelper::findFiles($dir);
        }
        return null;
    }

    /**
     * @return a json respones with the file information
     * Uploads an image from a form where the formfield is $field and puts it in a temp folder
     * The file still need to be moved from temp directory when the form is submitted
     */
    public static function uploadImage($field){
        $imageFile = UploadedFile::getInstanceByName($field);
        $directory = Yii::getAlias(self::uploadDir.'/img/temp') . self::ds . Yii::$app->session->id . self::ds;
        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        }

        if ($imageFile) {
            $uid = str_replace('.','_', uniqid(time(), true));
            $fileName = $uid . '.' . $imageFile->extension;
            $filePath = $directory . $fileName;
            if ($imageFile->saveAs($filePath)) {
                $path = self::ds. $directory . $fileName;
                return Json::encode([
                    'files' => [
                        [
                            'name' => $fileName,
                            'size' => $imageFile->size,
                            'url' => $path,
                            'thumbnailUrl' => $path,
                            'deleteUrl' => '/media/image-delete?name=' . $fileName,
                            'deleteType' => 'POST',
                        ],
                    ],
                ]);
            }
        }

        return '';
    }

    /*deletes an uploaded image, better use the one with yii2-attachments */
    public static function deleteImage($name)
    {
        $directory = Yii::getAlias(self::uploadDir.'/img/temp') . self::ds . Yii::$app->session->id;
        if (is_file($directory . self::ds . $name)) {
            unlink($directory . self::ds . $name);
        }

        $files = FileHelper::findFiles($directory);
        $output = [];
        foreach ($files as $file) {
            $fileName = basename($file);
            $path = self::ds. self::uploadDir . self::ds . Yii::$app->session->id . self::ds . $fileName;
            $output['files'][] = [
                'name' => $fileName,
                'size' => filesize($file),
                'url' => $path,
                'thumbnailUrl' => $path,
                'deleteUrl' => '/media/image-delete?name=' . $fileName,
                'deleteType' => 'POST',
            ];
        }
        return Json::encode($output);
    }

    /**
     * if the size is less than 1 MB, show the size in KB
     * if it's between 1 MB - 1 GB show it in MB
     * if it's larger - in GB
     * @param $bytes
     * @return string formatted size
     *
     */
    public static function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    /**
     * @param $model with yii2 attachments behaviour
     *
     */
    public static function getFilesInfo($model, $json=false, $mimes = null)
    {
        if(is_array($model->files)) {
            //we check the mimes vs our allowed mimes array
            if( !is_array($mimes) ){
                $mimes = [
                    'image' => ['image/png','image/gif','image/jpg', 'image/jpeg'], //TODO: image/*
                    'text' => ['text/plain'],
                    'pdf' => ['application/pdf'],
                    'video' => [],//TODO: solve this somehow
                ];
            };

            $files = null;

            foreach ($model->files as $file) {
                $info = [];
                $group = explode('/',$file->mime)[0];
                $info['path'] = $file->path;
                $info['id'] = $file->id;
                $info['name'] = $file->name;
                $info['model'] = $file->model;
                $info['size'] = $file->size;
                $info['type'] = $file->type; //file extension
                $info['group'] = $group;//image/text etc
                $info['mime'] = $file->mime;
                $info['url'] = Html::a($file->name, $file->url,[]);


                //create arrays based on mime type
                if( in_array($file->mime, $mimes['image']) ){
                    $files['image'][] = $info;
                } elseif( in_array($file->mime, $mimes['text']) ) {
                    $files['text'][] = $info;
                } elseif( in_array($file->mime, $mimes['pdf']) ){
                    $files['pdf'][] = $info;
                }else{
                    $files['other'] = $info;
                }
                $files[] = $info;
            }
            if($json) //if user requested the response in json format
                $files = Json::encode($files);

            return  $files;

        } else {
            return [];
        }
    }

}