<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

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
            'password',
            'email:email',
            // 'passwordreset',
            // 'gender',
            // 'position',
            // 'first_name',
            // 'last_name',
            // 'birthday',
            // 'phone',
            // 'mobile',
            // 'fax',
            // 'created',
            // 'updated',
            // 'picture',
            // 'status',
            // 'fastbill_customer_id',
            // 'fastbill_dashboard_url:url',
            // 'verify_code',
            // 'session_id',
            // 'description:ntext',
            // 'specialisation:ntext',
            // 'ftp_password',
            // 'ftp_path',
            // 'zip',
            // 'city',
            // 'address:ntext',
            // 'country_id',
            // 'website',
            // 'company_id',
            // 'mail_userid',
            // 'package_id',
            // 'trial_expire',
            // 'payment_status',
            // 'business_license',
            // 'admin_approved',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
