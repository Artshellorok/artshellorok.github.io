<?php
						$mysql = new MySQLi();
						// вызов метода (функции в объекте) connect для подключения к базе данных
						$mysql->connect("localhost", "root", "", "tokendb");
						$mysql->set_charset("utf8");
						if($_POST['operator'] != "" && $_POST['text'] != "" && $_POST['phone1'] != "" && $_POST['phone2'] != "" && $_POST['phone3'] != ""){
							$text = $_POST['text'];
							$phonenumber = "+7" . $_POST['operator'] . $_POST['phone1'] . $_POST['phone2'] . $_POST['phone3'];
							$query = "INSERT INTO  `portfolio`.`contacts` (
										`contacts_id` ,
										`contacts_phone` ,
										`contacts_text`
									)
									VALUES (
										NULL ,  '$phonenumber',  '$text'
									);";
							$mysql->query($query);
							echo "Спасибо, я позвоню на $phonenumber когда буду свободен.";
							mail("artoncobaka@list.ru", "Видимо, кто-то с тобой хочет связаться", "Телефон: $phonenumber Текст: $text");
						}
						else{
							echo "Ошибка, возможно вы заполнили не все поля!";
						}
				?>