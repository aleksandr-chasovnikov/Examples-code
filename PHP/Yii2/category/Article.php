<?php

namespace app\models;

use Yii;
use app\models\Category;

/**
 * 
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * Связывание с таблицей 'category'
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Сохраняет категорию в БД
     */
    public function saveCategory($category_id)
    {
        // Выборак из БД
        $category = Category::findOne($category_id);

        if (!empty($category)) {

            //сохраняем значение в 'article' со связью с 'category'
            $this->link('category', $category);
            
            return true;

        }

    }
}
