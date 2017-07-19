<?
namespace frontend\models;

use yii\base\Model;

class ImageUpload extends Model
{
	public $image;

	/**
	 * Правила валидации
	 */
	public function rules()
	{
		return [
			[['image'], 'required'],
			[['image'], 'file', 'extensions' => 'jpg,png'],
		];
	}

	/**
	 * Сохраняет изображение под новым именем, а старое удаляет
	 */
    public static function uploadFile(UploadedFile $file, $currentImage)
    {
    	$this->image = $file;

    	//Имя старой картинки для удаления
    	$currentImage = Yii::getAlias('@web') . 'uploads/' . $currentImage;

        //удалить старое изображение
    	$this->deleteCurrentImage($currentImage);

    	//Генерируем имя для файла
    	$filename = strtolower( md5( uniqid($file->baseName)) . '.' . $file->extension);

    	//Загружаем под новым именем
    	$file->saveAs( Yii::getAlias('@web') . 'uploads/' . $filename);

    	return $file->name;
    }

    /**
     * Удаление изображения
     */
    public function deleteCurrentImage($image)
    {
    	if ( is_file($image) )  {

	    	unlink($image);
    	}

    }


}