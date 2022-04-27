<?php

/** @var @model \app\models\Article */

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div>
	<a href="<?php echo Url::to(['/article/view', 'slug' => $model->slug]) ?>">
		<h3><?php echo Html::encode($model->title) ?></h3>
	</a>
	<div>
		<?php echo StringHelper::truncateWords($model->getEncodedBody(), 40) ?>
	</div>
	<p class="text-muted text-right">
        <small>
            Created at:
            <b>
                <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
            </b>
            by:
            <b>
                <? echo $model->createdBy->username; ?>
            </b>
        </small>
    </p>
	<hr>
</div>