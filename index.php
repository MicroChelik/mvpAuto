<?php
	include('html-start.php');
?>

<section class="first-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div>
					<h1>
						В честь открытия нашего сервиса в Перми <b>скидка 50%.</b> Акция продлится <b>до 30 ноября.</b>
					</h1>
				</div>
				<div class="line"></div>
				<div>
					<h3>Разбил или помял машину?</h3>
					<p>Ответь на  5 вопросов <br> и получи скидку на ремонт авто 50%</p>
					<a data-fancybox data-animation-duration="700" data-src="#vic" href="javascript:;">
						<button class="yellowBtn">Получить скидку</button>
					</a>
						<div style="display: none;" id="vic" class="animated-modal">
							<div class="row vic-row">
								<div class="col-lg-8 vik-progress">
									<p class="title">Вопрос <span>1</span> / 5</p>
									<p class="subtitle">пройдено <span>20%</span></p>
									<div class="progress-line">
										<div class="progress-yellow-line"></div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="vic-sale">
										<p class="vic-sale-p">Ваша скидка <b>10%</b></p>
										<p>скидка растет с каждым ответом</p>
									</div>
								</div>


								<form class="vic-form" action="vic.php" method="post" id="vic-form">
									<div class="col-lg-4 div-input-p first-q question active">
										<p class="input-p">Введите марку автомобиля</p>
									</div>
									<div class="col-lg-8 div-input first-q question active">
										<input type="text" name="mark" id="mark">
									</div>
									<!-- <div class="col-lg-4 div-input-p first-q question active">
										<p class="input-p">Введите модель автомобиля</p>
									</div>
									<div class="col-lg-8 div-input first-q question active">
										<input type="text" name="">
									</div> -->

									<div class="col-lg-4 div-input-p second-q question">
										<p class="input-p">Введите модель автомобиля</p>
									</div>
									<div class="col-lg-8 div-input second-q question">
										<input type="text" name="model" id="model">
									</div>

									<div class="col-lg-4 div-input-p third-q question">
										<p class="input-p">Введите пробег автомобиля</p>
									</div>
									<div class="col-lg-8 div-input third-q question">
										<input type="text" name="km" id="km">
									</div>

									<div class="col-lg-4 div-input-p fours-q question">
										<p class="input-p">Что нужно отремонтировать</p>
									</div>
									<div class="col-lg-8 div-input fours-q question">
										<input type="text" name="recover" id="recover">
									</div>

									<div class="col-lg-4 div-input-p fives-q question">
										<p class="input-p">Автомобиль застрахован</p>
									</div>
									<div class="col-lg-8 div-input fives-q question">
										<select name="insured">
											<option>да</option>
											<option>нет</option>
										</select>
									</div>
								</form>

								<div class="col-lg-12 final">
									<p>
										Чтобы зафиксировать скидку, нажмите на кнопку и перейдите по ссылке в диалог Вконтакте с нашим специалистом.
									</p>
									<p>
										<a href="https://vk.com/app5898182_-174880331#s=488062"  id="vic-send">Зафиксировать скидку</a>
									</p>
								</div>


								<div class="col-lg-6 vic-buttons">
									<button id="back" class="one">Назад</button>
									<button class="one" id="forward">Далее</button>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="whiteBg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h3>Зафиксируйте скидку 50% на ремонт по акции</h3>
				<p class="fix-p">
					Для этого запишитесь на бесплатную оценку эксперта сейчас
				</p>
				<a data-fancybox data-animation-duration="700" data-src="#sale" href="javascript:;">
					<button class="yellowBtn">Получить скидку 50% сейчас</button>
				</a>
					<div style="display: none;" id="sale" class="animated-modal">
						<form class="row sale-form" action="send.php" method="post" id="sale-form">
							<div class="col-12">
								<p>Заполните поля для получения скидки</p>
								<input type="text" placeholder="Имя" required="" name="name">
								<input type="tel" placeholder="Номер телефона" required="" name="phoneNumber">
								<input type="mail" placeholder="Email" required="" name="email">
								<input type="submit" value="Отправить" name="">
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</section>
<section class="yellowBg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<h2>Вы можете провести оценку ремонта вашего авто тремя способами:</h2>
			</div>
		</div>
		<div class="row align-items-end">
			<div class="col-lg-4">
				<div class="repair-way">
					<div class="repair-way-img">
						<img src="img/1.svg">
					</div>
					<div class="repair-way-text">
						<p>
							Скинуть фото вашего авто в мессенджер. Наш оценщик ознакомиться с ними. По необходимости, задаст ряд уточняющих вопросов и даст вам предварительную стоимость
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="repair-way">
					<div class="repair-way-img">
						<img src="img/2.svg">
					</div>
					<div class="repair-way-text">
						<p>
							Вы оставляете заявку на оценку. Наш сотрудник связывается с вами и выезжает к вам в любое удобное для вас место и время. На месте дает оценку стоимости работ.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="repair-way">
					<div class="repair-way-img">
						<img src="img/3.svg">
					</div>
					<div class="repair-way-text">
						<p>
							Вы оставляете заявку на оценку. Наш специалист связывается с вами и назначает время осмотра вашего авто на нашей СТО в удобное для вас время.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="important">
					<div class="important-div">
						<p>важно</p>
					</div>
					<p>
						Если найдете предложение, дешевле нашего, то мы вам сделаем скидку от этой цены 10%
					</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="whiteBg triangle">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-left mb-3">
					Кто мы такие и почему нам <br>можно доверить ваш автомобиль
				</h2>
				<p class="p-middle">Компания «MVP AUTO» Это современный центр кузовного ремонта</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p class="p-middle"><b>В нашем активе:</b></p>
			</div>
			<div class="col-lg-4">
				<ul class="img-ul">
					<li>Сеть из 4 станций кузовного ремонта</li>
					<li>Более 60 профессионалов своего дела</li>
					<li>Более 10 000 отремонтированных автомобилей</li>
					<li>Высокие оценки нашей работы</li>
					<li>Большое колличество положительных отзывов</li>
					<li>Многоуровневая система контроля качества ремонта</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<ul class="img-ul">
					<li>Сеть из 4 станций кузовного ремонта</li>
					<li>Более 60 профессионалов своего дела</li>
					<li>Более 10 000 отремонтированных автомобилей</li>
					<li>Высокие оценки нашей работы</li>
					<li>Большое колличество положительных отзывов</li>
					<li>Многоуровневая система контроля качества ремонта</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<div>
					<img src="img/photo.png" class="imgW100 mb-4">
					<blockquote class="blockquote-italic">“Никогда не пойду на компромисс <br> в вопросе качества”</blockquote>
					<p class="text-lg-right author-name">Роман Майнин</p>
					<p class="text-lg-right author-about">владелец сети кузовного ремонта <br>MVP AUTO</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="yellowBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Наиболее частые вопросы, которые задают нам наши клиенты?</h2>
			</div>
			<div class="col-12 questions">
				<div class="accordion" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="question1">
				      <h5 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				           Соответствует ли  заявленная цена действительности? <img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseOne" class="collapse show" aria-labelledby="question1" data-parent="#accordionExample">
				      <div class="card-body">
				        Наша цена по акции 3800 за элемент.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question2">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Какие гарантии, что меня не обманут?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="question2" data-parent="#accordionExample">
				      <div class="card-body">
				        У нас точные сроки выполнения ремонта, прописанные в договоре. Вы можете почитать отзывы наших клиентов, а также приемка автомобиля проходит под видео и фото-фиксацию кузова и пробега, также в цехе и на приемке ведется круглосуточное видеонаблюдение.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question3">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Не отвалится ли краска  через неделю и попадут ли мастера  в цвет?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="question3" data-parent="#accordionExample">
				      <div class="card-body">
				        В нашей мастерской есть собственная колористика со спектрофотометром пятидесятого поколения (lvlа), а также действует гарантия на ЛКП - 1 год. Подтверждаем используемые материалы названиями брендов, а качество сертификатами профессионализма работников
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question4">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          Не испортят ли криворукие мастера автомобиль в других местах, и не заменят ли новые детали на старые?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="question4" data-parent="#accordionExample">
				      <div class="card-body">
				        Приемка вашего автомобиля проходит под видео и фото-фиксацию кузова и пробега, также идет круглосуточное видеонаблюдение в цехе и на приемке.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question5">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          Не будут ли ездить на моем автомобиле по городу?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseFive" class="collapse" aria-labelledby="question5" data-parent="#accordionExample">
				      <div class="card-body">
				        Круглосуточное видеонаблюдение, Ваш автомобиль будет передвигаться только по территории Автотехцентра.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question6">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          Какие гарантии, что после разборки-сборки автомобиль не начнет скрипеть и не появятся “сверчки”?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSix" class="collapse" aria-labelledby="question6" data-parent="#accordionExample">
				      <div class="card-body">
				        Мы соблюдаем технологии кузовного ремонта согласно правилам и нормам завода изготовителя, используем новый крепежный материал, все запчасти устанавливаемые на автомобиль сертифицированы.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question7">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          Отдадут ли мне автомобиль в указанный срок?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseSeven" class="collapse" aria-labelledby="question7" data-parent="#accordionExample">
				      <div class="card-body">
				        Точные сроки выполнения ремонта прописываются в договоре.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question8">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				          Я привык передвигаться по городу на автомобиле, что мне делать пока моя машина находится на ремонте?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseEight" class="collapse" aria-labelledby="question8" data-parent="#accordionExample">
				      <div class="card-body">
				        Мы даем вам подменный автомобиль всего за 500 рублей в сутки.
				      </div>
				    </div>
				  </div>
				  <!-- <div class="card">
				    <div class="card-header" id="question9">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          Не увеличится ли стоимость ремонта относительно первичной калькуляции ?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseNine" class="collapse" aria-labelledby="question9" data-parent="#accordionExample">
				      <div class="card-body">
				        хз
				      </div>
				    </div>
				  </div> -->
				  <div class="card">
				    <div class="card-header" id="question10">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
				           Я не хочу оставлять свой автомобиль на неохраняемой стоянке!<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTen" class="collapse" aria-labelledby="question10" data-parent="#accordionExample">
				      <div class="card-body">
				        У нас охраняемая закрытая стоянка под видеонаблюдением.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question11">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
				          У моей машины красивый салон, не пострадает ли он при ремонте?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseEleven" class="collapse" aria-labelledby="question11" data-parent="#accordionExample">
				      <div class="card-body">
				        При работе салон автомобиля и его элементы укрываются пленкой.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question12">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTvelve" aria-expanded="false" aria-controls="collapseTvelve">
				          Насколько комфортно мне будет ремонтировать у вас свой автомобиль?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTvelve" class="collapse" aria-labelledby="question12" data-parent="#accordionExample">
				      <div class="card-body">
				        Мы гарантируем вам конфиденциальность обращения. <br>
						Можем провести оценку ремонта по фото (Email, Viber, WhatsApp, Telegram, VK, Facebook). <br>
						В распоряжении бесплатный эвакуатор, кстати мы можем сами забрать ваш автомобиль на нашем эвакуаторе и вернуть его вам в готовом виде. <br>
						Если же вы хотите присутствовать лично при сдаче автомобиля в ремонт, то к вашим услугам удобная зона ожидания ( кофе, чай, Wi-Fi, пресса) и бесплатное такси, чтобы добраться до дома.

				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="question13">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
				          Как я узнаю что будут делать с моей машиной?<img src="img/icons/plus.svg" class="plus"> <img src="img/icons/minus.svg" class="minus">
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThirty" class="collapse" aria-labelledby="question13" data-parent="#accordionExample">
				      <div class="card-body">
				        Профессиональные мастера приемщики подробно объяснят все этапы ремонта вашего авто. И не бойтесь испачкаться, у нас чистая современная приемка. Кстати и наши производственные площади отличаются чистотой!
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-9 text-center">
				<h3>Зафиксируйте скидку 50% на ремонт по акции</h3>
				<p class="fix-p">Для этого запишитесь на бесплатную оценку эксперта сейчас</p>
				<a data-fancybox data-animation-duration="700" data-src="#sale" href="javascript:;">
					<button class="blackBtn">Получить скидку 50% сейчас</button>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="whiteBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>А вот так выглядит наш СТО</h2>
			</div>
		</div>
		<div class="row stoPhotos">
			<div class="col-lg-4">
				<img src="img/sto1.png">
			</div>
			<div class="col-lg-4">
				<img src="img/sto2.png">
			</div>
			<div class="col-lg-4">
				<img src="img/sto3.png">
			</div>
			<div class="col-lg-4">
				<img src="img/sto4.png">
			</div>
			<div class="col-lg-4">
				<img src="img/sto5.png">
			</div>
			<div class="col-lg-4">
				<img src="img/sto6.png">
			</div>
		</div>
	</div>
</section>
<section class="yellowBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Фото наших работ до/после</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 portfolio d-flex">
				<div class="before portfolio-img-1">
					<div class="portfolio-text">
						<p>до</p>
					</div>
				</div>
				<div class="after portfolio-img-2">
					<div class="portfolio-text-2">
						<p>после</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 portfolio d-flex">
				<div class="before portfolio-img-3">
					<div class="portfolio-text">
						<p>до</p>
					</div>
				</div>
				<div class="after portfolio-img-4">
					<div class="portfolio-text-2">
						<p>после</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 portfolio d-flex">
				<div class="before portfolio-img-5">
					<div class="portfolio-text">
						<p>до</p>
					</div>
				</div>
				<div class="after portfolio-img-6">
					<div class="portfolio-text-2">
						<p>после</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 portfolio d-flex">
				<div class="before portfolio-img-7">
					<div class="portfolio-text">
						<p>до</p>
					</div>
				</div>
				<div class="after portfolio-img-8">
					<div class="portfolio-text-2">
						<p>после</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="whiteBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Отзывы наших клиентов</h2>
			</div>
		</div>
		<div class="row slider-reviews">
			<div class="col-lg-6">
				<div class="review-card">
					<blockquote>
						Ремонтировалась в данном сервисе по ОСАГО. Сделали даже раньше срока, что очень радует... теперь капот как у нового авто, краска подобрана как родная. Машину вымыли как снаружи так и внутри. Мне очень понравилось обслуживание, мастер Максим профессионально отвечал на все вопросы. Также в данном сервисе можно воспользоваться подменным авто по адекватной цене. Буду рекомендовать этот сервис друзьям и знакомым. 
					</blockquote>
					<p>Ольга Мерзлякова</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review-card">
					<blockquote>
						“Отправили в данную организацию по направлению от Альфастрахования по ремонту после ДТП. Машина у меня почти новая и конечно-же хотел попасть к официалам, но не получилось и отправили сюда. Был приятно удивлён, что у нас в городе начали появляться такие автосервисы. Везде всё чисто, чистые сотрудники, чистый бокс. Всё масштабно и красиво. Машину сделали в срок без нюансов. Рад что качество обслуживания наконец-то дошло и до сторонних автосервисов”.
					</blockquote>
					<p>Василий Алабужев</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review-card">
					<blockquote>
						 “Попала в MVP auto после ДТП по ОСАГО от страховой.    Отремонтировали раньше указанного срока, восстановили  и покрасили капот, восстановили геометрию кузова, поменяли все поврежденные элементы, теперь машина как новая!!! Машину выдали чистую как снаружи, так и в салоне. Первый автосервис на моей памяти, который так аккуратно относится к авто клиента.Понравилось  и обслуживание, мастер Максим профессионально отвечал на все вопросы, дал много рекомендаций. Также , чтобы не "выпадать из жизни" можно воспользоваться "подменным" авто по адекватной!!! цене. Буду рекомендовать данный сервис , кузовной ремонт делают профессионально,  оснащение сервиса соответствует их профилю, цена и качество соответствуют!!!” 
					</blockquote>
					<p>Ольга Мерзлякова</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review-card">
					<blockquote>
						“Смело могу рекомендовать этот автосервис для кузовного ремонта, проверено на личном авто. Все изменения только в лучшую сторону. Сделали машину раньше указанного срока, исправили все повреждения, проделанной работой доволен. Руководство подбирает очень грамотных спецов и держится за клиентов.”
					</blockquote>
					<p>Максим Акулов</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review-card">
					<blockquote>
						“Страховая отправила на ремонт в данный сервис, (ремонт бампера). Отремонтировали отлично, зазоры на месте, цвет 1 в 1, в общем доволен, спасибо ребятам за работу! Отдельное спасибо мастеру Максиму, все чётко, грамотно, быстро, по делу!”
					</blockquote>
					<p>Ашот П.</p>
				</div>
			</div>
		</div>
			<div class="row justify-content-around slider-reviews-arrows arrows d-lg-flex d-none">
				<div class="col-auto">
					<img src="img/icons/left-arrow.svg" class="prev" alt="назад">
				</div>
				<div class="col-auto">
					<img src="img/icons/right-arrow.svg" class="next" alt="вперед">
				</div>
			</div>
		<div class="row justify-content-center">
			<div class="col-lg-9 text-center">
				<h3>Зафиксируйте скидку 50% на ремонт по акции</h3>
				<p class="fix-p">Для этого запишитесь на бесплатную оценку эксперта сейчас</p>
				<a data-fancybox data-animation-duration="700" data-src="#sale" href="javascript:;">
					<button class="yellowBtn">Получить скидку 50% сейчас</button>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="yellowBg">
	<div class="container">
		<div class="row myth-row">
			<div class="col-12">
				<h2>Мифы о кузовном ремонте</h2>
			</div>
			<div class="col-12 myth-card">
				<div class="myth-photo">
					<img src="img/myth1.png">
				</div>
				<div class="myth-text">
					<h3>Миф №1</h3>
					<p class="myth-theme">Качественно провести кузовной ремонт можно только на станциях официального дилера</p>
					<p>
						Это самый частый и распространённый миф. В штате официальных дилеров работают ровно те же люди что и на мультибрэндовых станциях кузовного ремонта. При этом, как правило, эти сотрудники в стенах официального дилера зарабатывают меньшие деньги из чего можно судить о прямой зависимости на качество выполняемых работ.
					</p>
				</div>
			</div>
			<div class="col-12 myth-card">
				<div class="myth-photo">
					<img src="img/myth2.png">
				</div>
				<div class="myth-text">
					<h3>Миф №2</h3>
					<p class="myth-theme">Качественно провести кузовной ремонт можно только на станциях официального дилера</p>
					<p>
						Это самый частый и распространённый миф. В штате официальных дилеров работают ровно те же люди что и на мультибрэндовых станциях кузовного ремонта. При этом, как правило, эти сотрудники в стенах официального дилера зарабатывают меньшие деньги из чего можно судить о прямой зависимости на качество выполняемых работ.
					</p>
				</div>
			</div>
			<div class="col-12 myth-card align-items-start">
				<div class="myth-photo">
					<img src="img/myth3.png">
				</div>
				<div class="myth-text">
					<h3>Миф №3</h3>
					<p class="myth-theme">Качественно провести кузовной ремонт можно только на станциях официального дилера</p>
					<p>
						Это очень большое заблуждение. 
					</p>
					<p>
						Да по закону ремонтная организация может использовать детали сторонних производителей, но любые запчасти применяемые в ходе ремонта должны иметь сертификат качества. 
					</p>
					<p>
						В большинстве случаев это те же оригинальные детали поставляемые на конвейер только под собственной маркой производителя. 
					</p>
					<p>
						Ни одна крупная организация не будет использовать "Китайские" запчасти и материалы - это только снизит итоговые прибыли, так как автомобили, выполненные с применением таких запчастей, придётся ещё по многу раз переделывать. 
					</p>
					<p>
						И плюс к этому добавится отрицательный авторитет как станции кузовного ремонта так и страховой компании. 
					</p>
					<p>
						Поэтому никакой "опасности" в ремонте по направлению от страховой компании нет.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="whiteBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Как происходит процесс работы с нами</h2>
			</div>
		</div>
		<div class="row justify-content-between working-process">
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process1.svg">
					<p>Осмотр автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process2.svg">
					<p>Расчет стоимости работ и запчастей</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process3.svg">
					<p>Оформление заказ-наряда</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process4.svg">
					<p>Заказ и ожидание запчастей</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process5.svg">
					<p>Прием автомобиля в работу</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-between working-process">
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process6.svg">
					<p>Окраска элементов автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process10.svg">
					<p>Подготовка к окраске элементов</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process9.svg">
					<p>Рихтовка необходимых элементов</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process8.svg">
					<p>Разборка необходимых для ремонта элементов автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process7.svg">
					<p>Мойка автомобиля</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-between working-process mb-0">
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process11.svg">
					<p>Сборка элементов автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process12.svg">
					<p>Проверка качества работ</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process13.svg">
					<p>Мойка кузова и салона автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process14.svg">
					<p>Сдача автомобиля клиенту</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process15.svg">
					<p>Расчет клиентов за работы</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-between slider-working-process">
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process1.svg">
					<p>Осмотр автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process2.svg">
					<p>Расчет стоимости работ и запчастей</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process3.svg">
					<p>Оформление заказ-наряда</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process4.svg">
					<p>Заказ и ожидание запчастей</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process5.svg">
					<p>Прием автомобиля в работу</p>
				</div>
			</div>			
			
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process7.svg">
					<p>Мойка автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process8.svg">
					<p>Разборка необходимых для ремонта элементов автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process9.svg">
					<p>Рихтовка необходимых элементов</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process10.svg">
					<p>Подготовка к окраске элементов</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process6.svg">
					<p>Окраска элементов автомобиля</p>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process11.svg">
					<p>Сборка элементов автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process12.svg">
					<p>Проверка качества работ</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process13.svg">
					<p>Мойка кузова и салона автомобиля</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process14.svg">
					<p>Сдача автомобиля клиенту</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="process">
					<img src="img/icons/process15.svg">
					<p>Расчет клиентов за работы</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="yellowBg">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-3">Подведем итог.</h2>
				<p class="result-p">Что вы получаете, начав работать с нами сейчас</p>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="result-card">
					<div class="result-number">1</div>
					<p>Качественный ремонт вашего авто от проверенного</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="result-card">
					<div class="result-number">2</div>
					<p>100% безопасность</p>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="result-card">
					<div class="result-number">3</div>
					<p>Гарантия фиксированной цены</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="result-card">
					<div class="result-number">4</div>
					<p>1 год гарантии на все кузовные работы и ЛКП</p>
				</div>
			</div>
			<div class="col-lg-10 offset-lg-1">
				<div class="result-card">
					<div class="result-number">5</div>
					<p>Скидка 50% от прайса. Если вы находите цену ниже и документально подтверждаете, то мы снижаем ее еще на 10%</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-9 text-center">
				<h3>Зафиксируйте скидку 50% на ремонт по акции</h3>
				<p class="fix-p">Для этого запишитесь на бесплатную оценку эксперта сейчас</p>
				<a data-fancybox data-animation-duration="700" data-src="#sale" href="javascript:;">
					<button class="blackBtn">Получить скидку 50% сейчас</button>
				</a>
			</div>
		</div>
	</div>
</section>



<?php
	include('html-end.php');
?>