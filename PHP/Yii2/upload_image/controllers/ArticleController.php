<?php 
namespace app\modules\cabinet\controllers;

use Yii;
// use common\models\Search\AdvertSearch;
// use yii\helpers\BaseFileHelper;
// use yii\helpers\Url;
// use yii\filters\VerbFilter;
// use Imagine\Image\Point;
// use yii\imagine\Image;
// use Imagine\Image\Box;

use common\models\Article;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use frontend\models\ImageUpload;

/**
 * AdvertController implements the CRUD actions for Advert model.
 */
class ArticleController extends \common\controllers\AuthController
{
	/**
	 * Загрзка изображения
	 */
	public function actionSetImage($id)
	{
		$model = new ImageUpload;

		if (Yii::$app->request->isPost) {

			//вытаскиваем данные из БД
			$article = $this->findModel($id);

			//загружаеи файл
			$file = UploadedFile::getInstance($model, 'image');

			//готовим к сохранению в БД
			$article->image = $model->uploadFile($file);

			//сохраняем в БД
			if ( $article->save(false) ) {//отключили валидацию, потому что будут пустые поля, а это вызовет ошибку

				return $this->redirect(['view', 'id' =>$article->id]);
			}
		}

		return $this-render('image', compact('model'));
	}

	/**
	 * Выборка из БД
	 */
	public function findModel($id)
	{
		if (!empty($model = Article::findOne($id)) ) {

			return $model;
		}

		throw new NotFoundHttpException('Страница не найдена!');

	}

}