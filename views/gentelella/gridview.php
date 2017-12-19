<?php 

$dataProvider = new yii\data\ActiveDataProvider([
    'query' => \app\models\User::find(),
]);

?>

<?=
\yiister\gentelella\widgets\grid\GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'hover' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email',
        ],
    ]
);
?>