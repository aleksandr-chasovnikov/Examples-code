<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\ImageUpload;
use app\models\Article;
use app\models\ArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use app\models\Category;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
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

    /**
     * Создает выбор категории из списка
     */
    public function actionSetCategory($id)
    {
        // Выборка из БД
        $article = $this->findModel($id);

        // getCategory() == category (особенность Yii2)
        $selectedCategory = $article->category->id;

        // ArrayHelper предоставляет дополнительные функции массива
        // Берет из выборки только 'id', 'title'
        $categories = ArrayHelper::map( Category::find()->all(), 'id', 'title');

        if (Yii::$app->request->isPost) {

            // берем значение из $_POST['category']
            $category = Yii::$app->request->post('category');

            // сохраняет в БД и перенаправляет
            if ( $article->saveCategory($category) ) {
                
                return $this->redirect(['view', 'id' => $article->id]);
                
            }            
        }

        return $this->render('category', compact('article', 'selectedCategory', 'categories'));
    }

}
