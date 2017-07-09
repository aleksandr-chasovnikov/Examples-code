<?
namespace frontend\models;

use yii\base\Model;

class Article extends ActiveRecord
{
	/**
	 * Запускается перед удалением статьи
	 */
	public function beforeDelete()
	{
		$imageModel = new ImageIpload;
		$imageModel->deleteCurrentImage($this->image);

		return parent::beforeDelete(); //
	}

	/**
	 * Получить изображение
	 */
	public function getImage()
	{
		return $this->image ? '/uploads/' . $this->image :'/no-image.png';
	}
}