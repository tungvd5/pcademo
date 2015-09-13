<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;  
?>
<?php $form = ActiveForm::begin([
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
	'class' => 'form-horizontal',
]); ?>
<div class="form-group">
	<div class="col-sm-12">
		<?php if (count($model->getErrors()) || Yii::$app->getSession()->hasFlash('error')):?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
				<span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>
				<?php echo Html::errorSummary($model);?>
				<?php if(Yii::$app->getSession()->hasFlash('error'))
					echo Yii::$app->getSession()->getFlash('error'); ?>
			</div>
			<?php endif; ?>

		<?php if(Yii::$app->getSession()->hasFlash('success')):?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i>
				</button>
				<span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>

				<?php echo Yii::$app->getSession()->getFlash('success'); ?>
			</div>
		<?php endif; ?>

	</div>
</div>
<div class="form-group">
    <div class="col-sm-12">
        <?php echo $form->field($model,'username')->textInput([
			'placeholder'=> Yii::t('app', "Username"),
			'class'=>"form-control required",
			'required' => 'required'
		]); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <?php echo $form->field($model,'password')->passwordInput([
			'placeholder'=>Yii::t('app', "Password"),
			'class'=>"form-control required",
			'required' => 'required'
		]); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <?php echo Html::submitButton( Yii::t('app', 'Login'), ['class' => 'btn btn-primary btn-block']) ?>
    </div>
</div>

<div class="form-group">
    <div class="col-xs-6">
        <div class="vd_checkbox">
			<input type="checkbox" id="checkbox-1" value="1">
			<label for="checkbox-1"> <?php echo Yii::t('app', 'Remember me')?></label>
		</div>
    </div>
    <div class="col-xs-6 text-right">
        <div class=""> <a href="<?php echo Yii::$app->getUrlManager()->createUrl('/forget-password') ?>"><?php echo Yii::t('app', 'Forget Password?')?> </a> </div>
    </div>
</div>

<?php ActiveForm::end(); ?>	    