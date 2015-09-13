<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;  
?>
<div class="panel widget">
	<div class="panel-body">
		<div class="login-icon entypo-icon"> <i class="icon-key"></i> </div>
		<?php $form = ActiveForm::begin([
			'id'=>'login-form',
			'enableAjaxValidation'=>true,
			'class' => 'form-horizontal',
		]); ?>

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


		<div class="form-group  mgbt-xs-20">
				<div class="col-md-12">
					<div class="label-wrapper sr-only">
						<label class="control-label" for="LoginForm_username"><?php echo Yii::t('app', 'Username')?></label>
					</div>
					<div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
						<?php echo $form->field($model,'username')->textInput([
							'placeholder'=> Yii::t('app', "Username"),
							'class'=>"required",
							'required' => 'required'
						]); ?>
					</div>
					<div class="label-wrapper">
						<label class="control-label sr-only" for="password"><?php echo Yii::t('app', 'Password')?></label>
					</div>
					<div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
						<?php echo $form->field($model,'password')->passwordInput([
							'placeholder'=>Yii::t('app', "Password"),
							'class'=>"required",
							'required' => 'required'
						]); ?>
					</div>
				</div>
			</div>
			<div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
			<div class="form-group">
				<div class="col-md-12 text-center mgbt-xs-5">
					<?php echo Html::submitButton(Yii::t('app', 'Login'), array('class' => 'btn vd_bg-blue vd_white width-100', 'id' => 'login-submit')); ?>
				</div>
				<div class="col-md-12">
					<div class="row">
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
				</div>
			</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>