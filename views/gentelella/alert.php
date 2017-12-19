
<?php
Yii::$app->session->setFlash('error', 'Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.');
Yii::$app->session->setFlash('success', 'Success alert preview. This alert is dismissable.');
Yii::$app->session->setFlash('warning', 'Warning alert preview. This alert is dismissable.');
Yii::$app->session->setFlash('info', 'Info alert preview. This alert is dismissable.');
?>
<?= \yiister\gentelella\widgets\FlashAlert::widget(['showHeader' => true]) ?>