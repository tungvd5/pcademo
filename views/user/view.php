<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'role',
            'username',
            'password',
            'email:email',
            'passwordreset',
            'gender',
            'position',
            'first_name',
            'last_name',
            'birthday',
            'phone',
            'mobile',
            'fax',
            'created',
            'updated',
            'picture',
            'status',
            'fastbill_customer_id',
            'fastbill_dashboard_url:url',
            'verify_code',
            'session_id',
            'description:ntext',
            'specialisation:ntext',
            'ftp_password',
            'ftp_path',
            'zip',
            'city',
            'address:ntext',
            'country_id',
            'website',
            'company_id',
            'mail_userid',
            'package_id',
            'trial_expire',
            'payment_status',
            'business_license',
            'admin_approved',
        ],
    ]) ?>

</div>
