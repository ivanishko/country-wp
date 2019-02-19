<?php 

get_header();
?>

<!--Container-->
<section id="container" class="home-page">
	<div class="wrap-container clearfix">
		<div id="main-content">

			<section class="content-box box-4 box-style-1"><!--Start Box-->
				<div class="wrap-box" >
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-4 noadaptive">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ГЛАВНОЕ</h2>
									</div>
									<div class="item" style="text-align: center">
                                        <a href="/administration/gerb-i-flag/"><img src="/wp-content/uploads/2019/02/image6-366x450.png"  width="50%"/></a>
                                        <p>Геральдические лилии и розы переменных цветов в рассечённом серебряно-червлёном поле – элементы герба Воронцовых и Воронцовых-Дашковых</p>
									</div>
									<div class="item">
                                        <p>Добро пожаловать на обновлённый сайт посёлка Гирей</p>
									</div>
								</div>
							</div>
							<div class="col-2-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ПОСЛЕДНИЕ НОВОСТИ</h2>
									</div>
									<!-- -------- -->
									<?php if(have_posts()): 
										while(have_posts()): the_post(); ?>
									<div class="row">
										<div class="item">
											<div class="col-1-3">
												<div class="item-date-box">
													<div class="item-caption-inner">
														<div class="item-caption-inner1">
															<h3><a href="<?php the_permalink() ?>"><img src=<?php the_post_thumbnail('medium')?></a></h3>
															<span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-2-3">
												<div class="item-content">
													
												<a href="<?php the_permalink() ?>">
													<h3><?php the_title() ?></h3>
												</a>
													<div class="info"><?php the_date(); ?></div>
													<p><?php echo CFS()->get('intro') ?></p>
													<a href="<?php the_permalink() ?>">Далее...</a>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
										<?php endwhile; ?>
								<?php else: ?>
									Записей нет!
								<?php endif; ?>

									<!-- -------- -->





									<a href="/news" class="button bt1">Читать все новости</a>
								</div>
							</div>
							<div class="col-1-4">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>НОВОСТИ СПОРТА</h2>
									</div>
									<?php foreach (getSportsNews() as $post):?>
										<?php //var_dump($post); ?>
										<div class="item">
											<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('medium') ;?></a>
											<div class="item-content">
												<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
												<?php echo get_the_date(); ?>
												
											</div>
										</div>
									<?php endforeach; ?>
								<a href="/sportsnews/" class="button bt1">Читать все новости спорта</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="content-box box-3 box-style-2"><!--Start Box-->
				<div class="wrap-box t-center">
					<div class="zerogrid">
						<div class="title">
							<h2>Добро пожаловать <br><span>в Гирей</span></h2>
						</div>	
						<strong>Посёлок городского типа, Гирейского городское поселение - как бы официально не называли, это всегда наш родной Гирей.</strong>
						<p>Привествуем вас на уникальном сайте посёлка  Гирей, где мы хотели бы в полной мере освещать жизнь нашей малой родины, где родились, выучились и выросли наши друзья и знакомые. В Гирее много интересных мест, уникальных по своему для каждого жителя, будь то район Сахарного, или Спиртазвода, станции или "той сторона", как её называют "Хутор Султан". Наша школе исполнилось уже 106 лет.</p> <p>Все мы любим наш Гирей!</p>
						<a href="/history" class="button bt1">Знать историю</a>
					</div>
				</div>
			</section>


			<section class="content-box box-1 box-style-1"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ОДНОКЛАССНИКИ</h2>
									</div>
									<div class="item">
										<!-- <img src="<?php echo (F_IMG_DIR);?>5.jpg" />-->
										<div class="item-content">
										<!--``	<a href="single.html"><h3>Texas Rangers Finish In Second Place</h3></a>-->
											<div class="info"></div> 
											<div id="ok_group_widget"></div>
															<script>
															!function (d, id, did, st) {
															  var js = d.createElement("script");
															  js.src = "https://connect.ok.ru/connect.js";
															  js.onload = js.onreadystatechange = function () {
															  if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
															    if (!this.executed) {
															      this.executed = true;
															      setTimeout(function () {
															        OK.CONNECT.insertGroupWidget(id,did,st);
															      }, 0);
															    }
															  }};
															  d.documentElement.appendChild(js);
															}(document,"ok_group_widget","44658839126187",'{"width":345,"height":375}');
															</script>
											<a href="#"></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>ФК Гирей в РФЛ</h2>
									</div>
									<div class="row">
										<script type="text/javascript" src="//www.goalstream.org/api/connect/all.js?20"></script>

										<div id="gs_widget_7491"></div>
										<script type="text/javascript">
										    GS.Widgets.ChampStandings("gs_widget_7491", {mode: 0, width: 100, widthUnits: "%", height: "400", title: "Зимнее первенство 2019 | Группа C", color1: "11b848", color2: "ffffff", color3: "000000", color4: "ffffff", textSize: 11, font: "Arial", clubLogos: 1, hideMatchCol: 0, additionally: "champ-full-schedule:0,champ-goalscorers", watermark: 0}, "gchampionship_tour:10360914");
										</script>
									</div>
													
								</div>
							</div>

							<div class="col-1-3">
								<div class="wrap-col">
									<div class="sub-title">
										<h2>В КОНТАКТЕ</h2>
									</div>
									
									<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

									<!-- VK Widget -->
									<div id="vk_groups"></div>
									<script type="text/javascript">
									VK.Widgets.Group("vk_groups", {mode: 0, width: "400", height: "400"}, 10252810);
									</script>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<section class="content-box box-2 box-style-3"><!--Start Box-->
				<div class="wrap-box">
					<div class="zerogrid">
						<div class="title">
							<h2><span>Наш </span>instagram</h2>
						</div>	
						<div class="row">
							  <?php echo do_shortcode( '[instagram-feed num=16 cols=8]' ); ?>
						</div>
					</div>
				</div>
			</section>

			
			
			<div class="bg-white">
				<div class="zerogrid">
					<!-- Slideshow -->
					<div class="callbacks_container">
						<ul class="rslides" id="slider">
							<li>
								<img src="<?php echo (F_IMG_DIR);?>4(1).jpg" alt="">
								<div class="caption">
									<h2>НОВЫЕ ФОТОГРАФИИ</h2>
									<span >Вид со станицы Кавказской</span>
								</div>
							</li>
							<li>
								<img src="<?php echo (F_IMG_DIR);?>5(1).jpg" alt="">
								<div class="caption">
									<h2>НОВЫЕ ФОТОГРАФИИ</h2>
									<span >Вид со станицы Кавказской</span>
								</div>
							</li>
							<li>
								<img src="<?php echo (F_IMG_DIR);?>6(1).jpg" alt="">
								<div class="caption">
									<h2>НОВЫЕ ФОТОГРАФИИ</h2>
									<span >Вид со станицы Кавказской</span>
								</div>
							</li>
							<li>
								<img src="<?php echo (F_IMG_DIR);?>7(2).jpg" alt="">
								<div class="caption">
									<h2>НОВЫЕ ФОТОГРАФИИ</h2>
									<span >Вид со станицы Кавказской</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>


		</div>
	</div>
</section>

<!--////////////////////////////////////Footer-->


<?php get_footer();

?>