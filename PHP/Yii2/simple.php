<?php 

// перенаправить на последний URL
return $this->goBack( Yii::$app->request->referrer );
return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));

// перенаправить по определенному URL
 return $this->redirect('http://example.com/new', 301);

// обновляет текущую страницу
return $this->refresh();
return Yii::$app->getResponse()->refresh();

// ---------------------------------------------------------------

// задать флэш-сообщение
Yii::$app->getSession()->setFlash('comment', 'Сообщение отправлено.');

// показать флэш сообщение
<?php if( Yii::$app->session->getFlash('comment') ): ?>
	<div class="alert alert-success" role="alert">
		<?= Yii::$app->session->getFlash('comment') ?>
	</div>
<?php endif ?>