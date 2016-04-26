<?php
/* @var $this yii\web\View */

use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'My Yii Application';
?>

<div class="site-index">

	<?php
		echo Carousel::widget([
			'items' => [
				'<img src="http://placehold.it/1920x600/C74BBF/FFF"/>',
				'<img src="http://placehold.it/1920x600/C7A60B/FFF"/>',
				'<img src="http://placehold.it/1920x600/C73D23/FFF"/>',
				'<img src="http://placehold.it/1920x600/06122C/FFF"/>',
			],
			'options' => [
				'class' => 'carousel slide carousel-fade',
				'data-interval' => '8000',
			]
		]);
	?>
	
	<section id='products' class='site-front'>
		<div class='container'>
			<h1>Продукты</h1>
			<div class='row'>
				<div class='col-xs-12'>
					<div class='col-xs-12 col-sm-4'>Bpm'online marketing</div>
					<div class='col-xs-12 col-sm-4'>Bpm'online sales</div>
					<div class='col-xs-12 col-sm-4'>Bpm'online service</div>
					<div class='col-xs-12 col-sm-12'>
						<h4>Отраслевые решения</h4>
						<ul>
							<li>Contact Center</li>
							<li>Программы лояльности клиентов</li>
							<li>Решения для финансовых организаций</li>
							<li>Объекты недвижимости</li>
							<li>Фармацевтика и медучреждения</li>
							<li>Сфера услуг</li>
							<li>FMCG</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id='service' class='site-front'>
		<div class='container'>
			<h1>Услуги</h1>
			<div class='row'>
				<div class='col-xs-12'>
					<ul>
						<li>
							<h3>Системная интеграция</h3>
							<span>(подбор, адаптация, внедрение и сопровождение IT-решений</span>
						</li>
						<li>
							<h3>Разработка специализированных приложений</h3>
							<span>Всё для вас</span>
						</li>
						<li>
							<h3>Сервис</h3>
							<span>поддержка и сопровождение существующих IT-решений</span>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id='clients' class='site-front'>
		<div class='container'>
			<h1>Клиенты</h1>
			<div class='row'>
				<div class='col-xs-12'>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/C7180A/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/C74E00/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/C79D02/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/65C700/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/00C7BB/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/184BC7/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/6102C7/FFF' /></div>
					<div class='col-xs-6 col-sm-3'><img src='http://placehold.it/400/C700B5/FFF' /></div>
				</div>
			</div>
		</div>
	</section>

	<section id='partners' class='banner-partners site-front'>
		<div class='container'>
			<h1>Партнеры</h1>
			<div class='row'>
				<div class='col-xs-12'>
					Terrasoft
				</div>
			</div>
		</div>
	</section>

	<section id='support' class='site-front'>
		<div class='container'>
			<h1>Поддержка</h1>
			<div class='row'>
				<div class='col-xs-12 col-md-6'>
					<h3>Контакты</h3>
					<ul>
						<li>тел: +7(727)327-8285</li>
						<li>моб: +7(777)210-7287</li>
						<li>e-mail: info@b-soft.kz</li>
					</ul>
				</div>
				<div class='col-xs-12 col-md-6'>
					<h3>Свяжитесь с нами</h3>
					<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

						<?= $form->field($model, 'name')->textInput() ?>

						<?= $form->field($model, 'email') ?>

						<?= $form->field($model, 'subject') ?>

						<?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
						]) ?>

						<div class="form-group">
							<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
						</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</section>

	
</div>
