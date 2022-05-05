<?php

use app\models\Candidates;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CandidatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PHP Candidates';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">PHP Candidates list</h1>

        <?php if (!Yii::$app->user->isGuest): ?>
            <p>
                <?= Html::a('Create Candidate', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        <?php endif; ?>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <?php if(Yii::$app->user->isGuest): ?>
                    <h3>Login to see list of candidates</h3>
                <?php else: ?>

                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'created_at:datetime',
                            'name',
                            [
                                'attribute' => 'birth_date',
                                'value' => function (Candidates $model) {
                                    if (!$model->birth_date)
                                        return '';

                                    return date('d-m-Y', $model->birth_date);
                                },
                            ],
                            [
                                'attribute' => 'years_experience',
                                'value' => function (Candidates $model) {
                                    if (!$model->years_experience)
                                        return '';

                                    return $model->years_experience;
                                },
                            ],
                            'frameworks',
                            [
                                'attribute' => 'resume',
                                'value' => function (Candidates $model) {
                                    return Html::a($model->resume, ['/' . Candidates::RESUME_DIR . '/' . $model->resume], ['target' => '_blank', 'title' => 'Переглянути']);
                                },
                                'format' => 'raw',
                            ],
                            'comment',
                            [
                                'class' => ActionColumn::class,
                                'template' => '{update} {delete}',
                            ],
                        ],
                    ]); ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
