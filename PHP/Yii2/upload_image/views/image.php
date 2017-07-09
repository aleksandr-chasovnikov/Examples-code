<?php 

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\Article */
?>

<div class="article-form">
	
	<?php $form = ActiveForm::begin() ?>

	<?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-succes']) ?>
	</div>

	<?php ActiveForm::end() ?>

</div>
