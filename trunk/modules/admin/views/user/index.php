
<?php

use app\assets\admin\dashboard\DashboardAsset;

DashboardAsset::register($this);

$this->title = "CRAZY GUY";
?>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-10 pull-right">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'role',
            'username',
            'email:email',
            // 'passwordreset',
            // 'gender',
            // 'position',
            // 'first_name',
            'last_name',
            'birthday',
            // 'phone',
            // 'mobile',
            // 'fax',
            // 'created',
            // 'updated',
            // 'picture',
            // 'status',
            // 'verify_code',
            // 'session_id',
            // 'zip',
            // 'city',
            // 'address:ntext',
            // 'country_id',
            // 'website',
            // 'mail_userid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>
