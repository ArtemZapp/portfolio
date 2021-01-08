<!DOCTYPE html>
<html lang="ru">
    <head>
		<meta charset="UTF-8" />
		<title>MetaParser</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="parsefromapi" />
		<meta name="author" content="ArtemZ" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link href='https://fonts.googleapis.com/css?family=Poiret+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="demo-tables.css" />
		<link rel="stylesheet" type="text/css" href="single.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="container">
			<header class="clearfix"><h1>MetaParser <span>v 3.0</span></h1></header>
			<section>

				<button type="button" class="collapsible"><h1>Openworld</h1></button>
				<div class="content">
					<button type="button" class="collapsible_head"><h3>Количество подписчиков</h3></button>
					<div class="content">
						<hr><hr>
						<h2>Facebook</h2>
						<hr>https://www.facebook.com/openworld.global/<hr>
						<table class="rounded">
							<tr>
								<th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>
							<!-- <tr>
								<td>К 30 дням назад</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>К 7 дням назад</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>К предыдущему дню</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr> -->
							<tr>
								<td><b>Всего</b></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><?php  include 'parse.php';  echo parse_fb();?></td>
							</tr>
						</table>
						<!-- <table class="color">
							<tr>
								<th>Процент/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>
							<tr>
								<td>К предыдущему дню</td>
								<td>+20%</td>
								<td>-20%</td>
								<td>-2%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td>К 7 дням назад</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td>К 30 дням назад</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td><b>Всего</b></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>40.3</td>
							</tr>
						</table> -->
						<hr><hr>
						<h2>VK</h2>
						<hr>vk.com/openworld.global<hr>
						<table class="rounded">
							<tr>
								<th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад</td>
								<td><p id="vk_subs_diff_7"></p></td>
								<td><p id="vk_subs_diff_6"></p></td>
								<td><p id="vk_subs_diff_5"></p></td>
								<td><p id="vk_subs_diff_4"></p></td>
								<td><p id="vk_subs_diff_3"></p></td>
								<td><p id="vk_subs_diff_2"></p></td>
								<td><p id="vk_subs_diff_1"></p></td>
								<td><p id="vk_subs_diff_0"></p></td>
							</tr>
							<tr>
								<td>К 7 дням назад</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>К предыдущему дню</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td><b>Всего</b></td>
								<td><p id="vk_members_count_7"></p></td>
								<td><p id="vk_members_count_6"></p></td>
								<td><p id="vk_members_count_5"></p></td>
								<td><p id="vk_members_count_4"></p></td>
								<td><p id="vk_members_count_3"></p></td>
								<td><p id="vk_members_count_2"></p></td>
								<td><p id="vk_members_count_1"></p></td>
								<td><p id="vk_members_count"></p></td>
							</tr>
						</table>

						<!-- <table class="color">
							<tr>
								<th>Процент/День</th>
								<th>22 Feb</th>
								<th>23 Feb</th>
								<th>24 Feb</th>
								<th>25 Feb</th>
								<th>26 Feb</th>
								<th>27 Feb</th>
								<th>28 Feb</th>
								<th><mark>29 Feb</mark></th>
							</tr>
							<tr>
								<td>К предыдущему дню</td>
								<td>+20%</td>
								<td>-20%</td>
								<td>-2%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td>К 7 дням назад</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td>К 30 дням назад</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
								<td>+12%</td>
							</tr>
							<tr>
								<td><b>Всего</b></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>40.3</td>
							</tr>
						</table> -->

						<hr><hr>
						<h2>Youtube</h2>
						<hr>https://www.youtube.com/channel/UCnunjdwy-UtYxFLJAHtBqDw/<hr>
						<table class="rounded">
							<tr>
								<th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>
							<tr>
								<td>К 30 дням назад</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>К 7 дням назад</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td>К предыдущему дню</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
							<tr>
								<td><b>Всего</b></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td><p id="youtube_all_subs"></p></td>
							</tr>
						</table>

						<!-- <table class="color">
							<tr><th>Процент/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>+20%</td><td>-20%</td><td>-2%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 7 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 30 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>40.3</td></tr>
						</table> -->

						<!-- <hr><hr>
						<h2>Twitter</h2>
						<hr>https://twitter.com/openworldglobal<hr>
						<table class="rounded">
							<tr><th>Количество/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+4</td></tr>
							<tr><td>К 7 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+28</td></tr>
							<tr><td>К 30 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+79</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>9534</td></tr>
						</table>
						<table class="color">
							<tr><th>Процент/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>+20%</td><td>-20%</td><td>-2%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 7 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 30 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>40.3</td></tr>
						</table>

						<hr><hr>
						<h2>Instagram</h2>
						<hr>https://www.instagram.com/openworld.global/<hr>
						<table class="rounded">
							<tr><th>Количество/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+4</td></tr>
							<tr><td>К 7 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+28</td></tr>
							<tr><td>К 30 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+79</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>9534</td></tr>
						</table>
						<table class="color">
							<tr><th>Процент/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>+20%</td><td>-20%</td><td>-2%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 7 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 30 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>40.3</td></tr>
						</table>

						<hr><hr>
						<h2>Telegram</h2>
						<hr>https://t.me/owglobal<hr>
						<table class="rounded">
							<tr><th>Количество/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+4</td></tr>
							<tr><td>К 7 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+28</td></tr>
							<tr><td>К 30 дням назад</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>+79</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>9534</td></tr>
						</table>
						<table class="color">
							<tr><th>Процент/День</th><th>22 Feb</th><th>23 Feb</th><th>24 Feb</th><th>25 Feb</th><th>26 Feb</th><th>27 Feb</th><th>28 Feb</th><th><mark>29 Feb</mark></th></tr>
							<tr><td>К предыдущему дню</td><td>+20%</td><td>-20%</td><td>-2%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 7 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td>К 30 дням назад</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td><td>+12%</td></tr>
							<tr><td><b>Всего</b></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>40.3</td></tr>
						</table>
						<hr><hr> -->
					</div>

					<button type="button" class="collapsible_head"><h3>Общая статистика</h3></button>
					<div class="content">
					<hr><hr>
					<h2>Facebook</h2>
					<hr>https://www.facebook.com/openworld.global/<hr>
					<h4>Охват публикаций</h4>

						<table class="table_blur">

							<tr><th>Количество/День/Процент</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад<br><i>Общий</i><br><i>Платный</i><br><i>Органический</i></td>
								<td>
									<p id="page_impressions_unique_7_month"></p>
									<p id="page_impressions_paid_unique_7_month"></p>
									<p id="page_impressions_organic_unique_7_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_6_month"></p>
									<p id="page_impressions_paid_unique_6_month"></p>
									<p id="page_impressions_organic_unique_6_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_5_month"></p>
									<p id="page_impressions_paid_unique_5_month"></p>
									<p id="page_impressions_organic_unique_5_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_4_month"></p>
									<p id="page_impressions_paid_unique_4_month"></p>
									<p id="page_impressions_organic_unique_4_month"></p>
								</td>

								<td>

									<p id="page_impressions_unique_3_month"></p>
									<p id="page_impressions_paid_unique_3_month"></p>
									<p id="page_impressions_organic_unique_3_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_2_month"></p>
									<p id="page_impressions_paid_unique_2_month"></p>
									<p id="page_impressions_organic_unique_2_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_1_month"></p>
									<p id="page_impressions_paid_unique_1_month"></p>
									<p id="page_impressions_organic_unique_1_month"></p>
								</td>

								<td>
									<p id="page_impressions_unique_0_month"></p>
									<p id="page_impressions_paid_unique_0_month"></p>
									<p id="page_impressions_organic_unique_0_month"></p>
								</td>
							</tr>
							</tr>

							<tr>
								<td>К 7 дням назад<br><i>Общий</i><br><i>Платный</i><br><i>Органический</i></td>
								<td>
									<p id="page_impressions_unique_7_week"></p>
									<p id="page_impressions_paid_unique_7_week"></p>
									<p id="page_impressions_organic_unique_7_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_6_week"></p>
									<p id="page_impressions_paid_unique_6_week"></p>
									<p id="page_impressions_organic_unique_6_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_5_week"></p>
									<p id="page_impressions_paid_unique_5_week"></p>
									<p id="page_impressions_organic_unique_5_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_4_week"></p>
									<p id="page_impressions_paid_unique_4_week"></p>
									<p id="page_impressions_organic_unique_4_week"></p>
								</td>

								<td>

									<p id="page_impressions_unique_3_week"></p>
									<p id="page_impressions_paid_unique_3_week"></p>
									<p id="page_impressions_organic_unique_3_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_2_week"></p>
									<p id="page_impressions_paid_unique_2_week"></p>
									<p id="page_impressions_organic_unique_2_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_1_week"></p>
									<p id="page_impressions_paid_unique_1_week"></p>
									<p id="page_impressions_organic_unique_1_week"></p>
								</td>

								<td>
									<p id="page_impressions_unique_0_week"></p>
									<p id="page_impressions_paid_unique_0_week"></p>
									<p id="page_impressions_organic_unique_0_week"></p>
								</td>
							</tr>
							</tr>

							<tr>
								<td>К предыдущему дню<br><i>Общий</i><br><i>Платный</i><br><i>Органический</i></td>
								<td>
									<p id="page_impressions_unique_7_day"></p>
									<p id="page_impressions_paid_unique_7_day"></p>
									<p id="page_impressions_organic_unique_7_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_6_day"></p>
									<p id="page_impressions_paid_unique_6_day"></p>
									<p id="page_impressions_organic_unique_6_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_5_day"></p>
									<p id="page_impressions_paid_unique_5_day"></p>
									<p id="page_impressions_organic_unique_5_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_4_day"></p>
									<p id="page_impressions_paid_unique_4_day"></p>
									<p id="page_impressions_organic_unique_4_day"></p>
								</td>

								<td>

									<p id="page_impressions_unique_3_day"></p>
									<p id="page_impressions_paid_unique_3_day"></p>
									<p id="page_impressions_organic_unique_3_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_2_day"></p>
									<p id="page_impressions_paid_unique_2_day"></p>
									<p id="page_impressions_organic_unique_2_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_1_day"></p>
									<p id="page_impressions_paid_unique_1_day"></p>
									<p id="page_impressions_organic_unique_1_day"></p>
								</td>

								<td>
									<p id="page_impressions_unique_0_day"></p>
									<p id="page_impressions_paid_unique_0_day"></p>
									<p id="page_impressions_organic_unique_0_day"></p>
								</td>
							</tr>

							<tr>
								<td><b>Всего<br><i>Общий</i><br><i>Платный</i><br><i>Органический</i></td>

								<td>
									<p id="page_impressions_unique_7"></p>
									<p id="page_impressions_paid_unique_7"></p>
									<p id="page_impressions_organic_unique_7"></p>
								</td>

								<td>
									<p id="page_impressions_unique_6"></p>
									<p id="page_impressions_paid_unique_6"></p>
									<p id="page_impressions_organic_unique_6"></p>
								</td>

								<td>
									<p id="page_impressions_unique_5"></p>
									<p id="page_impressions_paid_unique_5"></p>
									<p id="page_impressions_organic_unique_5"></p>
								</td>

								<td>
									<p id="page_impressions_unique_4"></p>
									<p id="page_impressions_paid_unique_4"></p>
									<p id="page_impressions_organic_unique_4"></p>
								</td>

								<td>

									<p id="page_impressions_unique_3"></p>
									<p id="page_impressions_paid_unique_3"></p>
									<p id="page_impressions_organic_unique_3"></p>
								</td>

								<td>
									<p id="page_impressions_unique_2"></p>
									<p id="page_impressions_paid_unique_2"></p>
									<p id="page_impressions_organic_unique_2"></p>
								</td>

								<td>
									<p id="page_impressions_unique_1"></p>
									<p id="page_impressions_paid_unique_1"></p>
									<p id="page_impressions_organic_unique_1"></p>
								</td>

								<td>
									<p id="page_impressions_unique_0"></p>
									<p id="page_impressions_paid_unique_0"></p>
									<p id="page_impressions_organic_unique_0"></p>
								</td>
								
							</tr>
						</table>

					<h4>Вовлеченность для публикаций</h4>

						<table class="table_blur">
							
							<tr><th>Количество/День/Процент</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>
							
							<tr>
								<td>К 30 дням назад</td>
								<td>
									<p id="page_post_engagements_7_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_6_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_5_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_4_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_3_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_2_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_1_month"></p>
								</td>

								<td>
									<p id="page_post_engagements_0_month"></p>
								</td>
							</tr>

							<tr>
								<td>К 7 дням назад</td>
								<td>
									<p id="page_post_engagements_7_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_6_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_5_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_4_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_3_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_2_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_1_week"></p>
								</td>

								<td>
									<p id="page_post_engagements_0_week"></p>
								</td>
							</tr>

							<tr>
								<td>К предыдущему дню</td>
								<td>
									<p id="page_post_engagements_7_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_6_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_5_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_4_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_3_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_2_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_1_day"></p>
								</td>

								<td>
									<p id="page_post_engagements_0_day"></p>
								</td>
							</tr>

							<tr>
								<td><b>Всего</b></td>

								<td>
									<p id="page_post_engagements_7"></p>
								</td>

								<td>
									<p id="page_post_engagements_6"></p>
								</td>

								<td>
									<p id="page_post_engagements_5"></p>
								</td>

								<td>
									<p id="page_post_engagements_4"></p>
								</td>

								<td>
									<p id="page_post_engagements_3"></p>
								</td>

								<td>
									<p id="page_post_engagements_2"></p>
								</td>

								<td>
									<p id="page_post_engagements_1"></p>
								</td>

								<td>
									<p id="page_post_engagements_0"></p>
								</td>
								
							</tr>
						</table>

					<h4>Реакции</h4>

						<table class="table_blur">
							
							<tr><th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>
									<p><b>Всего</b></p>
									<p>Лайки</p>
									<p>Сердце</p>
									<p>Вау</p>
									<p>Ха-ха</p>
									<p>Грустно</p>
									<p>Злой</p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_7"></p>
									<p id="page_actions_post_reactions_like_7"></p>
									<p id="page_actions_post_reactions_love_7"></p>
									<p id="page_actions_post_reactions_wow_7"></p>
									<p id="page_actions_post_reactions_haha_7"></p>
									<p id="page_actions_post_reactions_sorry_7"></p>
									<p id="page_actions_post_reactions_anger_7"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_6"></p>
									<p id="page_actions_post_reactions_like_6"></p>
									<p id="page_actions_post_reactions_love_6"></p>
									<p id="page_actions_post_reactions_wow_6"></p>
									<p id="page_actions_post_reactions_haha_6"></p>
									<p id="page_actions_post_reactions_sorry_6"></p>
									<p id="page_actions_post_reactions_anger_6"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_5"></p>
									<p id="page_actions_post_reactions_like_5"></p>
									<p id="page_actions_post_reactions_love_5"></p>
									<p id="page_actions_post_reactions_wow_5"></p>
									<p id="page_actions_post_reactions_haha_5"></p>
									<p id="page_actions_post_reactions_sorry_5"></p>
									<p id="page_actions_post_reactions_anger_5"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_4"></p>
									<p id="page_actions_post_reactions_like_4"></p>
									<p id="page_actions_post_reactions_love_4"></p>
									<p id="page_actions_post_reactions_wow_4"></p>
									<p id="page_actions_post_reactions_haha_4"></p>
									<p id="page_actions_post_reactions_sorry_4"></p>
									<p id="page_actions_post_reactions_anger_4"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_3"></p>
									<p id="page_actions_post_reactions_like_3"></p>
									<p id="page_actions_post_reactions_love_3"></p>
									<p id="page_actions_post_reactions_wow_3"></p>
									<p id="page_actions_post_reactions_haha_3"></p>
									<p id="page_actions_post_reactions_sorry_3"></p>
									<p id="page_actions_post_reactions_anger_3"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_2"></p>
									<p id="page_actions_post_reactions_like_2"></p>
									<p id="page_actions_post_reactions_love_2"></p>
									<p id="page_actions_post_reactions_wow_2"></p>
									<p id="page_actions_post_reactions_haha_2"></p>
									<p id="page_actions_post_reactions_sorry_2"></p>
									<p id="page_actions_post_reactions_anger_2"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_1"></p>
									<p id="page_actions_post_reactions_like_1"></p>
									<p id="page_actions_post_reactions_love_1"></p>
									<p id="page_actions_post_reactions_wow_1"></p>
									<p id="page_actions_post_reactions_haha_1"></p>
									<p id="page_actions_post_reactions_sorry_1"></p>
									<p id="page_actions_post_reactions_anger_1"></p>
								</td>

								<td>
									<p id="page_actions_post_reactions_total_0"></p>
									<p id="page_actions_post_reactions_like_0"></p>
									<p id="page_actions_post_reactions_love_0"></p>
									<p id="page_actions_post_reactions_wow_0"></p>
									<p id="page_actions_post_reactions_haha_0"></p>
									<p id="page_actions_post_reactions_sorry_0"></p>
									<p id="page_actions_post_reactions_anger_0"></p>
								</td>
								
							</tr>
						</table>


					<hr><hr>
					<h2>Youtube</h2>
					<hr>https://www.youtube.com/channel/UCnunjdwy-UtYxFLJAHtBqDw/
					<br>Всего видео:<p id="youtube_all_videos"></p>
					Общее количество просмотров: <p id="youtube_all_views"></p>
					<hr>
					<h4>Общая статистика</h4>

						<table class="table_blur">

							<tr><th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад<br><i>comments</i><br><i>shares</i><br><i>likes</i><br><i>dislikes</i><br><i>views</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						
							<tr>
								<td>К 7 дням назад<br><i>comments</i><br><i>shares</i><br><i>likes</i><br><i>dislikes</i><br><i>views</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К предыдущему дню<br><i>comments</i><br><i>shares</i><br><i>likes</i><br><i>dislikes</i><br><i>views</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td><b>Всего<br><i>comments</i><br><i>shares</i><br><i>likes</i><br><i>dislikes</i><br><i>views</i></td>

								<td>
									<p id="youtube_comments_day_7"></p>
									<p id="youtube_shares_day_7"></p>
									<p id="youtube_likes_day_7"></p>
									<p id="youtube_dislikes_day_7"></p>
									<p id="youtube_views_day_7"></p>
								</td>

								<td>
									<p id="youtube_comments_day_6"></p>
									<p id="youtube_shares_day_6"></p>
									<p id="youtube_likes_day_6"></p>
									<p id="youtube_dislikes_day_6"></p>
									<p id="youtube_views_day_6"></p>
								</td>

								<td>
									<p id="youtube_comments_day_5"></p>
									<p id="youtube_shares_day_5"></p>
									<p id="youtube_likes_day_5"></p>
									<p id="youtube_dislikes_day_5"></p>
									<p id="youtube_views_day_5"></p>
								</td>

								<td>
									<p id="youtube_comments_day_4"></p>
									<p id="youtube_shares_day_4"></p>
									<p id="youtube_likes_day_4"></p>
									<p id="youtube_dislikes_day_4"></p>
									<p id="youtube_views_day_4"></p>
								</td>

								<td>
									<p id="youtube_comments_day_3"></p>
									<p id="youtube_shares_day_3"></p>
									<p id="youtube_likes_day_3"></p>
									<p id="youtube_dislikes_day_3"></p>
									<p id="youtube_views_day_3"></p>
								</td>

								<td>
									<p id="youtube_comments_day_2"></p>
									<p id="youtube_shares_day_2"></p>
									<p id="youtube_likes_day_2"></p>
									<p id="youtube_dislikes_day_2"></p>
									<p id="youtube_views_day_2"></p>
								</td>

								<td>
									<p id="youtube_comments_day_1"></p>
									<p id="youtube_shares_day_1"></p>
									<p id="youtube_likes_day_1"></p>
									<p id="youtube_dislikes_day_1"></p>
									<p id="youtube_views_day_1"></p>
								</td>

								<td>
									<p id="youtube_comments_day_0"></p>
									<p id="youtube_shares_day_0"></p>
									<p id="youtube_likes_day_0"></p>
									<p id="youtube_dislikes_day_0"></p>
									<p id="youtube_views_day_0"></p>
								</td>
								
							</tr>
						</table>
					<h4>По времени просмотра</h4>

						<table class="table_blur">

							<tr><th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад<br><i>estimatedMinutesWatched</i><br><i>averageViewDuration</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>
						
							<tr>
								<td>К 7 дням назад<br><i>estimatedMinutesWatched</i><br><i>averageViewDuration</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К предыдущему дню<br><i>estimatedMinutesWatched</i><br><i>averageViewDuration</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td><b>Всего<br><i>estimatedMinutesWatched</i><br><i>averageViewDuration</i></td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_7"></p>
									<p id="youtube_averageViewDuration_day_7"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_6"></p>
									<p id="youtube_averageViewDuration_day_6"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_5"></p>
									<p id="youtube_averageViewDuration_day_5"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_4"></p>
									<p id="youtube_averageViewDuration_day_4"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_3"></p>
									<p id="youtube_averageViewDuration_day_3"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_2"></p>
									<p id="youtube_averageViewDuration_day_2"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_1"></p>
									<p id="youtube_averageViewDuration_day_1"></p>
								</td>

								<td>
									<p id="youtube_estimatedMinutesWatched_day_0"></p>
									<p id="youtube_averageViewDuration_day_0"></p>
								</td>
								
							</tr>
						</table>

					<hr><hr>
					<h2>VK</h2>
					<hr>https://vk.com/openworld.global<hr>
					
					<h4>Охват публикаций</h4>

						<table class="table_blur">

							<tr><th>Количество/День/Процент</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад<br><i>Общий</i><br><i>mobile</i><br><i>Подписчики</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К 7 дням назад<br><i>Общий</i><br><i>mobile</i><br><i>Органический</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К предыдущему дню<br><i>Общий</i><br><i>mobile</i><br><i>Органический</i></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td><b>Всего<br><i>Общий</i><br><i>mobile</i><br><i>Органический</i></td>

								<td>
									<p id="vk_reach_7"></p>
									<p id="vk_mobile_reach_7"></p>
									<p id="reach_subscribers_7"></p>
								</td>

								<td>
									<p id="vk_reach_6"></p>
									<p id="vk_mobile_reach_6"></p>
									<p id="reach_subscribers_6"></p>
								</td>

								<td>
									<p id="vk_reach_5"></p>
									<p id="vk_mobile_reach_5"></p>
									<p id="reach_subscribers_5"></p>
								</td>

								<td>
									<p id="vk_reach_4"></p>
									<p id="vk_mobile_reach_4"></p>
									<p id="reach_subscribers_4"></p>
								</td>

								<td>

									<p id="vk_reach_3"></p>
									<p id="vk_mobile_reach_3"></p>
									<p id="reach_subscribers_3"></p>
								</td>

								<td>
									<p id="vk_reach_2"></p>
									<p id="vk_mobile_reach_2"></p>
									<p id="reach_subscribers_2"></p>
								</td>

								<td>
									<p id="vk_reach_1"></p>
									<p id="vk_mobile_reach_1"></p>
									<p id="reach_subscribers_1"></p>
								</td>

								<td>
									<p id="vk_reach_0"></p>
									<p id="vk_mobile_reach_0"></p>
									<p id="reach_subscribers_0"></p>
								</td>
								
							</tr>
						</table>


					<h4>Вовлеченность</h4>
						<table class="table_blur">
							
							<tr><th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>
									<p><b>Всего просмотров</b></p>
									<p><b>Всего посетителей</b></p>
								</td>

								<td>
									<p id="vk_views_7"></p>
									<p id="vk_visitors_7"></p>
								</td>

								<td>
									<p id="vk_views_6"></p>
									<p id="vk_visitors_6"></p>
								</td>

								<td>
									<p id="vk_views_5"></p>
									<p id="vk_visitors_5"></p>
								</td>

								<td>
									<p id="vk_views_4"></p>
									<p id="vk_visitors_4"></p>
								</td>

								<td>
									<p id="vk_views_3"></p>
									<p id="vk_visitors_3"></p>
								</td>

								<td>
									<p id="vk_views_2"></p>
									<p id="vk_visitors_2"></p>
								</td>

								<td>
									<p id="vk_views_1"></p>
									<p id="vk_visitors_1"></p>
								</td>

								<td>
									<p id="vk_views_0"></p>
									<p id="vk_visitors_0"></p>
								</td>
								
							</tr>
						</table>

					<h4>Реакции</h4>

						<table class="table_blur">

							<tr><th>Количество/День</th>
								<th><p class="date7"></p></th>
								<th><p class="date6"></p></th>
								<th><p class="date5"></p></th>
								<th><p class="date4"></p></th>
								<th><p class="date3"></p></th>
								<th><p class="date2"></p></th>
								<th><p class="date1"></p></th>
								<th><mark><p class="date0"></p></mark></th>
							</tr>

							<tr>
								<td>К 30 дням назад<br><p><i>Комментариев</i></p><p><i>Лайков</i></p><p><i>Репостов</i></p></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К 7 дням назад<br><p><i>Комментариев</i></p><p><i>Лайков</i></p><p><i>Репостов</i></p></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td>К предыдущему дню<br><p><i>Комментариев</i></p><p><i>Лайков</i></p><p><i>Репостов</i></p></td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
							</tr>

							<tr>
								<td><p><i>Комментариев</i></p><p><i>Лайков</i></p><p><i>Репостов</i></p></td>

								<td>
									<p id="vk_comments_7"></p>
									<p id="vk_likes_7"></p>
									<p id="vk_copies_7"></p>
								</td>

								<td>
									<p id="vk_comments_6"></p>
									<p id="vk_likes_6"></p>
									<p id="vk_copies_6"></p>
								</td>

								<td>
									<p id="vk_comments_5"></p>
									<p id="vk_likes_5"></p>
									<p id="vk_copies_5"></p>
								</td>

								<td>
									<p id="vk_comments_4"></p>
									<p id="vk_likes_4"></p>
									<p id="vk_copies_4"></p>
								</td>

								<td>

									<p id="vk_comments_3"></p>
									<p id="vk_likes_3"></p>
									<p id="vk_copies_3"></p>
								</td>

								<td>
									<p id="vk_comments_2"></p>
									<p id="vk_likes_2"></p>
									<p id="vk_copies_2"></p>
								</td>

								<td>
									<p id="vk_comments_1"></p>
									<p id="vk_likes_1"></p>
									<p id="vk_copies_1"></p>
								</td>

								<td>
									<p id="vk_comments_0"></p>
									<p id="vk_likes_0"></p>
									<p id="vk_copies_0"></p>
								</td>
								
							</tr>
						</table>

					
					</div>

					<button type="button" class="collapsible_head"><h3>Топ посты</h3></button>
					<div class="content">
						<h3>Топ посты фб</h3>
						    <button onclick="clicktable(10)" class="btn">10</button>
						    <button onclick="clicktable(30)" class="btn">30</button>
						    <button onclick="clicktable(100)" class="btn">100</button>
						<div id="top_post_table"> </div>
						<h3>Топ видео youtube</h3>
							<button onclick="clicktable_youtube(5)" class="btn">5</button>
						    <button onclick="clicktable_youtube(10)" class="btn">10</button>
						    <button onclick="clicktable_youtube(30)" class="btn">30</button>
						    <button onclick="clicktable_youtube(50)" class="btn">50</button>
						    <!-- <button onclick="clicktable_youtube()" class="dropbtn">Все видео</button> -->
						    <button class="dropbtn">Сортировка API (внутреняя) по всем видео канала:</button>
							<select id="order_type" name="order">
							    <option value="0">Общему времени просмотра</option>
							    <option value="2">Количеству подписавшихся</option>
							    <option value="3">Количеству просмотров</option>
							    <option value="4">По времени</option>
							    <option value="6">Названию</option>
							</select>
							<!-- <div class="dropdown" style="float:right;">
							  <button class="dropbtn">Сортировка по всем видео канала</button>
							  <div class="dropdown-content">
							    <a onclick="clicktable_youtube(10, 'date')">Время</a>
							    <a onclick="clicktable_youtube(10, 'rating')">Рейтинг</a>
							    <a onclick="clicktable_youtube(10, 'relevance')">Релевантность</a>
							    <a onclick="clicktable_youtube(10, 'title')">Название</a>
							    <a onclick="clicktable_youtube(10, 'viewCount')">Количество просмотров</a>
							  </div>
							</div> -->
						<div id="top_video_youtube"> </div>

						<h3>Топ посты вк</h3>
						    <button onclick="clicktable_vk(10)" class="btn">10</button>
						    <button onclick="clicktable_vk(30)" class="btn">30</button>
						    <button onclick="clicktable_vk(100)" class="btn">100</button>
						<div id="top_post_vk_table"> </div>
							

					</div>
					</div>
				</div>
			</section>

			<!-- <section>
			
				<button type="button" class="collapsible"><h1>Another project ... </h1></button>
				<div class="content">
				<hr><hr>
				<h2>Примеры таблиц</h2>
				<hr>link<hr>
				<h3>2. Цветная таблица</h3>
				<table class="color">
					<tr><th>Company</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
					<tr><td>Microsoft</td><td>20.3</td><td>30.5</td><td>23.5</td><td>40.3</td></tr>
					<tr><td>Google</td><td>50.2</td><td>40.63</td><td>45.23</td><td>39.3</td></tr>
					<tr><td>Apple</td><td>25.4</td><td>30.2</td><td>33.3</td><td>36.7</td></tr>
					<tr><td>IBM</td><td>20.4</td><td>15.6</td><td>22.3</td><td>29.3</td></tr>
				</table>
				<h3>4. Таблица с раздельными ячейками</h3>
				<table class="separate">
					<tr><th>Company</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
					<tr><td>Microsoft</td><td>20.3</td><td>30.5</td><td>23.5</td><td>40.3</td></tr>
					<tr><td>Google</td><td>50.2</td><td>40.63</td><td>45.23</td><td>39.3</td></tr>
					<tr><td>Apple</td><td>25.4</td><td>30.2</td><td>33.3</td><td>36.7</td></tr>
					<tr><td>IBM</td><td>20.4</td><td>15.6</td><td>22.3</td><td>29.3</td></tr>
				</table>

				<h3>5. Таблица-календарь</h3>
				<table class="table5">
					<tr><th colspan="5">My working weeks, March 2015</th></tr>
					<tr><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td></tr>
					<tr><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
					<tr><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td></tr>
					<tr><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td></tr>
					<tr><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td></tr>
					<tr><td>30</td><td>31</td><td colspan="3"></td></tr>
				</table>

				<h3>6. Таблица-жалюзи</h3>
				<table class="blinds">
					<tr><th>Employee</th><th>Salary</th><th>Bonus</th><th>Supervisor</th></tr>
					<tr><td>Stephen C. Cox</td><td>$300</td><td>$50</td><td>Bob</td></tr>
					<tr><td>Josephin Tan</td><td>$150</td><td>-</td><td>Annie</td></tr>
					<tr><td>Joyce Ming</td><td>$200</td><td>$35</td><td>Andy</td></tr>
					<tr><td>James A. Pentel</td><td>$175</td><td>$25</td><td>Annie</td></tr>
				</table>

				 <h3>7. Таблица-зебра</h3>
				<table class="zebra">
					<tr><th></th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
					<tr><td class="round-top">Microsoft</td><td>20.3</td><td>30.5</td><td>23.5</td><td>40.3</td></tr>
					<tr><td>Google</td><td>50.2</td><td>40.63</td><td>45.23</td><td>39.3</td></tr>
					<tr><td>Apple</td><td>25.4</td><td>30.2</td><td>33.3</td><td>36.7</td></tr>
					<tr><td class="round-bottom">IBM</td><td>20.4</td><td>15.6</td><td>22.3</td><td>29.3</td></tr>
				</table>

				<h3>8. Таблица-меню</h3>
				<table class="table-menu">
					<caption>Холодные закуски</caption>
					<tr><th>Наименование</th><th>Выход, гр.</th><th>Цена, руб.</th></tr>
					<tr><td>Ассорти из овощей, зелени и сыра</td><td>250</td><td>190</td></tr>
					<tr><td>Ассорти мясное</td><td>250</td><td>300</td></tr>
					<tr><td>Ассорти рыбное (семга с/с, форель с/с)</td><td>250</td><td>350</td></tr>
					<tr><td>Ассорти грибное</td><td>120</td><td>150</td></tr>
					<tr><td>Соления из бочки (помидоры, огурцы, перец, чеснок, капуста)</td><td>250</td><td>180</td></tr>
				</table>

				<h3>9. Таблица с акцентом на первый столбец</h3>
				<table class="table_col">
					<colgroup><col style="background:#C7DAF0;"></colgroup>
					<tr><th>Comedy</th><th>Adventure</th><th>Action</th><th>Children</th></tr>
					<tr><td>Scary Movie</td><td>Indiana Jones</td><td>The Punisher</td><td>Wall-E</td></tr>
					<tr><td>Epic Movie</td><td>Star Wars</td><td>Bad Boys</td><td>Madagascar</td></tr>
					<tr><td>Spartan</td><td>LOTR</td><td>Die Hard</td><td>Finding Nemo</td></tr>
					<tr><td>Dr. Dolittle</td><td>The Mummy</td><td>300</td><td>A Bug&#39;s Life</td></tr>
				</table>

				<h3>10. Таблица с эффектом размытия строк при наведении</h3>
				<table class="table_blur">
					<tr><th>Company</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
					<tr><td>Microsoft</td><td>20.3</td><td>30.5</td><td>23.5</td><td>40.3</td></tr>
					<tr><td>Google</td><td>50.2</td><td>40.63</td><td>45.23</td><td>39.3</td></tr>
					<tr><td>Apple</td><td>25.4</td><td>30.2</td><td>33.3</td><td>36.7</td></tr>
					<tr><td>IBM</td><td>20.4</td><td>15.6</td><td>22.3</td><td>29.3</td></tr>
				</table>

				<h3>11. Таблица-прайс</h3>
				<table class="table_price">
					<caption>Plans&Pricing</caption>
					<tr><th>Plan</th><th colspan="2">Price</th></tr>
					<tr><td>Basic</td><td>10$</td><td><a>Select</a></td></tr>
					<tr><td>Professional</td><td>20$</td><td><a>Select</a></td></tr>
					<tr><td>Premium</td><td>30$</td><td><a>Select</a></td></tr>
					<tr><td>Platinum</td><td>60$</td><td><a>Select</a></td></tr>
				</table>
				
				<h3>12. Таблица с темным фоном и с подчеркиванием текста при наведении</h3>
				<table class="table_dark">
					<tr><th>Company</th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
					<tr><td>Microsoft</td><td>20.3</td><td>30.5</td><td>23.5</td><td>40.3</td></tr>
					<tr><td>Google</td><td>50.2</td><td>40.63</td><td>45.23</td><td>39.3</td></tr>
					<tr><td>Apple</td><td>25.4</td><td>30.2</td><td>33.3</td><td>36.7</td></tr>
					<tr><td>IBM</td><td>20.4</td><td>15.6</td><td>22.3</td><td>29.3</td></tr>
				</table>
				</div>
			</section> -->	
  	</div>
	
  	<script>
		var coll = document.getElementsByClassName("collapsible");
		var coll_head = document.getElementsByClassName("collapsible_head");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var content = this.nextElementSibling;
		    if (content.style.display === "block") {
		      content.style.display = "none";
		    } else {
		      content.style.display = "block";
		    }
		  });
		  }

		for (i = 0; i < coll_head.length; i++) {
		  coll_head[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var content = this.nextElementSibling;
		    if (content.style.display === "block") {
		      content.style.display = "none";
		    } else {
		      content.style.display = "block";
		    }
		  });
		}

		function dateEdit(changeableDate) {
		   	var date =  new Date();
		   	date.setDate(date.getDate() - changeableDate);
			year = date.getFullYear();
			y = year.toString().substr(-2);
			m = date.getMonth() + 1;
			d = date.getDate();
		 }

		const arraySparse = [0,1,2,3,4,5,6,7];

		arraySparse.forEach(function(element){
			var els = document.getElementsByClassName("date"+element);
			Array.prototype.forEach.call(els, function(el) {
				dateEdit(element);
			    el.innerHTML = d + "." + m;
			});
		});

		/*dropdown button*/
			/*function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}

			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {
			    var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			    for (i = 0; i < dropdowns.length; i++) {
			      var openDropdown = dropdowns[i];
			      if (openDropdown.classList.contains('show')) {
			        openDropdown.classList.remove('show');
			      }
			    }
			  }
			}*/
	</script>
	<script  src="main.js"></script>
</body>
</html>