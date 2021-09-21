<!Doctype>
<html lang="ru">
<head>
	<!--Ссылка на файлы со свойствами элементов сайта-->
	<link rel="stylesheet" href="master.css">
	<link rel="stylesheet" href="filter.css">
</head>
<body>
	<header>
		<!--Логотип компании-->
		<div class="logo">
			<img src="img/logo.png" class="logo-img" height=140px>
		</div>
		<!--Номер телефона компании-->		
		<div class="logo2">
			<img src="img/call.png" class="logo-img2" height=55px width=55px>
			<span class="logo-title">+7 351 111 22 33</span>
		</div>
	</header>
	<!--Слайдер-->
	<div class="carousel-wrapper">
		<span id="item-1" width=1600px></span>
		<span id="item-2" width=1600px></span>
		<span id="item-3" width=1600px></span>
		<span id="item-4" width=1600px></span>
		<!-- 1й элемент слайдера -->
		<div class="carousel-item item-1">
			<p class="car-text">Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</p>
			<a class="arrow arrow-prev" href="#item-4"></a>
			<a class="arrow arrow-next" href="#item-2"></a>
		</div>
		<!-- 2й элемент слайдера -->
		<div class="carousel-item item-2">
			<p class="car-text">Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</p>
			<a class="arrow arrow-prev" href="#item-1"></a>
			<a class="arrow arrow-next" href="#item-3"></a>
		</div>
		<!-- 3й элемент слайдера -->
		<div class="carousel-item item-3">
			<p class="car-text">Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</p>
			<a class="arrow arrow-prev" href="#item-2"></a>
			<a class="arrow arrow-next" href="#item-4"></a>
		</div>
		<!-- 3й элемент слайдера -->
		<div class="carousel-item item-4">
			<p class="car-text">Гарантия действует в течении 3 лет!</p>
			<a class="arrow arrow-prev" href="#item-3"></a>
			<a class="arrow arrow-next" href="#item-1"></a>
		</div>
	</div>
	<!--Блоки с информацией о товарах-->
	<div class="wrapper">
		<img src="img/elsam.jpg" width="425px" height="425px" class="content">
		<div class="sidebar">
			<h2 class="h2">Электросамокат</h2>
			<p class="p">Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.</p>
		</div>	
	</div>
	<div class="wrapper">
		<img src="img/tov1.jpg" width="425px" height="425px" class="content">
		<div class="sidebar">
			<h2 class="h2">Гироскутер</h2>
			<p class="p">Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног. Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками. Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.</p>
		</div>
	</div>
	<div class="wrapper">
		<img src="img/tov4.jpg" width="425px" height="425px" class="content">
		<div class="sidebar">
			<h2 class="h2">Сигвей</h2>
			<p class="p">Сигвей - средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов.</p>
		</div>
	</div>
	<!--Бренды-->
	<div align="center"><h2 class="trms">Бренды</h2></div>
	<div align="center">
		<table class="gucci">
			<tr>
				<td align="center"><img src="img/brand/br1.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br2.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br3.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br4.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br5.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br6.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br7.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br8.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br9.jpg" width="75%" height="75%"></td>
				<td align="center"><img src="img/brand/br10.jpg" width="75%" height="75%"></td>
			</tr>
		</table>
	</div>
	<!--Таблица доступных товаров-->
	<h1 align=center class="trms">ДОСТУПНЫЕ ТОВАРЫ</h1>
	<div class="categories">
		<input type="radio" id="all" name="color"/>
			<label for="all">ВСЕ</label>
			<input type="radio" id="gyro" name="color"/>
			<label for="gyro">ГИРОСКУТЕРЫ</label>
			<input type="radio" id="seeg" name="color"/>
			<label for="seeg">СИГВЕИ</label>
			<input type="radio" id="elsam" name="color"/>
			<label for="elsam">ЭЛЕКТРОСАМОКАТЫ</label>
			<div class="tile gyro">
				<img src="img/tov1.png" width=200px>
				<p class="trms2">Smart Balance 6.5" Ver. 1</p>
				<p class="trms">8990 ₽</p>
			</div>
			<div class="tile gyro">
				<img src="img/tov2.png" width=200px>
				<p class="trms2">Kiwano KO-X ES-03</p>
				<p class="trms">18900 ₽</p>
			</div>
			<div class="tile seeg">
				<img src="img/tov3.png" width=200px>
				<p class="trms2">Minirobot Mini PRO 36V</p>
				<p class="trms">15990 ₽</p>
			</div>
			<div class="tile seeg">
				<img src="img/tov4.png" width=200px>
				<p class="trms2">Xiaomi Ninebot Mini</p>
				<p class="trms">22900 ₽</p>
			</div>
			<div class="tile seeg">
				<img src="img/tov5.png" width=200px>
				<p class="trms2">Hili E+</p>
				<p class="trms">39900 ₽</p>
			</div>
			<div class="tile elsam">
				<img src="img/tov6.png" width=200px>
				<p class="trms2">Yamato PES MINI</p>
				<p class="trms">15900 ₽</p>
			</div>
			<div class="tile elsam">
				<img src="img/tov7.png" width=200px>
				<p class="trms2">KUGOO S2</p>
				<p class="trms">14900 ₽</p>
			</div>
	</div>
	<!--Прочее-->
	<center><img src="img/personal.jpg" width=100% height="auto"></center>
	<center><p class="per">Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</p></center>
	<center><p class="per">Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России. Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</p></center>
	<!--Консультанты-->
	<center>
		<table class="table">
			<tr>
				<th></th>
				<th><p class="cons">Консультанты<p></th>
				<th></th>
			</tr>
			<tr>
				<td align="center"><img src="img/placeholder1.png" width="200px"></td>
				<td align="center"><img src="img/placeholder2.jpg" width="200px"></td>
				<td align="center"><img src="img/placeholder3.jpg" width="200px"></td>
			</tr>
			<tr>
				<td align="center"><p class="cons">Захаров Андрей Борисович</p></td>
				<td align="center"><p class="cons">Пупкин Василий Васильевич</p></td>
				<td align="center"><p class="cons">Иванов Иван Иванович</p></td>
			</tr>
			<tr>
				<td width=300px align="center"><p class="cons">Менеджер-консультант My Gyro</p></td>
				<td width=300px align="center"><p class="cons">Старший консультант My Gyro</p></td>
				<td width=300px align="center"><p class="cons">Квалифицированный специалист сервисного центра My Gyro</p></td>
			</tr>
		</table>
	</center>
	<!--Поле подписки-->
	<div class="cont" align="center">
		<p><b class="trms">ФИО</b></p>
		<p><input type="text" placeholder="Ковид Тигрович Тамачмян" name="ФИО" required></p>
		<p><b class="trms">E-mail</b></p>
		<p><input type="text" placeholder="пиши свою почту, нагибатор1337" name="email" required></p>
		<button type="submit" class="subscribe"><img src="img/subscribe.png" width="200px" height="50px"></button>
	</div>
	<!--Кнопка "Назад"-->
	<div align="center"><a href="#"><img src="img/back.png" width=50px height=50px></a></div>
</body>
</html>
