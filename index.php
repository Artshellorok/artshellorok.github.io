<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Название</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
		window.onload = function(){
			
		}
	</script>
</head>
<body>
	<div class="aligner">
		<div class="header">
			<div class="header__logo">
				<p class="header__logo__logo">
					Мое портфолио
				</p>
				<p class="header__logo__logoDesc">
					Портфолио верстальщика.
				</p>
			</div>
			<div class="clear header__clear"></div>
			<div class="header__links">
				<div class="currentPage">
					<a href="index.php" class="header__link ">
						ГЛАВНАЯ
					</a>
				</div>
				<div>
					<a href="pages/about.html" class="header__link">
						ОБО МНЕ
					</a>
				</div>
				<div>
					<a href="pages/works.php" class="header__link">
						МОИ РАБОТЫ
					</a>
				</div>
				<div>
					<a href="pages/contacts.html" class="header__link">
						КОНТАКТЫ
					</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear">
			
			</div>
		</div>
		<div class="quote">
			<img src="img/quote.png"/>
			<div class="quote__block">
				<p class="quote__text">
					Креативность означает позволить себе ошибаться. Искусство означает знать, какие именно ошибки надо сохранить
				</p>
				<p class="quote__text">
					-Генри Адамс
				</p>
			</div>
			<div class="quote__image">
				<img src="img/quote_image.png" class="quote__image"/>
			</div>
			<div class="clear"></div>
		</div>
		<div class="portfolio">
			<p class="portfolio__text">
				Портфолио
			</p>
			<?php
				$mysql = new MySQLi();
				
				$mysql->connect("localhost", "root", "", "portfolio");
				$mysql->set_charset("utf8");
				$query = "SELECT * FROM `projects`";
				$result = $mysql->query($query);
				$i = 0;
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$title[$i] = $row["project_title"];
						$desc[$i] = $row["project_description"];
						$imagePath[$i] = $row["project_image_path"];
						$projectPath[$i] = $row["project_path"];
						$i++;
					}
				}
				if($i != 0){
					for($j = 0; $j < $i; $j++){
						echo "<a href='$projectPath[$j]' class='portfolio__link'>
								<div class='portfoilio__example' style ='background: url($imagePath[$j])'>
									<div class='portfolio__example__top'>
										$title[$j]
									</div>
									<div class='portfolio__example__bottom'>
										$desc[$j]
									</div>
								</div>
							</a>";
					}
				}
				else{
					echo '<p class="empty">Здесь пока ничего нет</p>';
				}
			?>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div class="footer">
		<div class="footer__aligner">
			<div class="footer__leftside">
				<p class="footer__name">
					Филиппов Артём
				</p>
				
				<p class="footer__location">
					<img src="img/location.png" class="footer__location__image"/>
					Якутск, Россия.
				</p>
				<div class="footer__about">
					<p class="footer__about__text">
						Меня зовут Артём. Я увлекся версткой и веб-программированием 3 года назад, за такой срок я отлично освоил html5, css3, javascript. В данный момент я осваиваю backend технологии. В основном работаю с макетами в photoshop. Bерстаю кроссбраузерно, валидно и адаптивно. Bсегда готов к сотрудничеству. Если вам понравилось то, что я делаю - напишите мне. Да прибудет с вами «Lorem ipsum dolor sit amet»!
					</p>
				</div>
			</div>
			<div class="footer__skills">
				<p class="footer__skills__header">
					Мои навыки
				</p>
				<div class="footer__skills__skill">
					<p class="footer__skills__p">
						HTML
					</p>
					<div class="skillBar">
						<div class="footer__skills_skill__level">
						
						</div>
					</div>
				</div>
				<div class="footer__skills__skill">
					<p class="footer__skills__p">
						CSS
					</p>
					<div class="skillBar">
						<div class="footer__skills_skill__level bar2">
						
						</div>
					</div>
				</div>
				<div class="footer__skills__skill">
					<p class="footer__skills__p">
						JavaScript
					</p>
					<div class="skillBar">
						<div class="footer__skills_skill__level bar3">
						
						</div>
					</div>
				</div>
				<div class="footer__skills__skill">
					<p class="footer__skills__p">
						PHP
					</p>
					<div class="skillBar">
						<div class="footer__skills_skill__level bar4">
						
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>