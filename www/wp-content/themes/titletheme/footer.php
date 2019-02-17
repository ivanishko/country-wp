<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid top-footer">
		<div class="row">
			<div class="col-1-4">
				<a href="http://footgul.ru" target=_blank><img style="height: 50px; width: auto;" src="<?php echo (F_IMG_DIR);?>15.jpg" /></a>
			</div>
			<div class="col-1-4">
				<a href="http://гирейское.рф" target=_blank><img src="<?php echo (F_IMG_DIR);?>16.jpg" /></a>
			</div>
			<div class="col-1-4">
				<a href="http://girey.my1.ru" target=_blank><img src="<?php echo (F_IMG_DIR);?>17.jpg" /></a>
			</div>
		<!--	<div class="col-1-5">
				<a href="#"><img src="<?php echo (F_IMG_DIR);?>18.jpg" /></a>
			</div> -->
			<div class="col-1-4">
				<a href="http://wordpress.org" target=_blank rel="nofollow"><img src="<?php echo (F_IMG_DIR);?>19.jpg" /></a>
			</div>
		</div>
	</div>
	<div class="zerogrid wrap-footer">
		<div class="row">
			<div class="col-1-4 col-footer-1">
				<div class="wrap-col">
					<h3>О сайте</h3>
					<p>Собственный патриотический проект Гирейских воспитанников</p>
					
				</div>
			</div>
			<div class="col-1-4 col-footer-2">
				<div class="wrap-col">
					<h3>Главные разделы</h3>
					<ul>
						<li><a href="/news">Новости</a></li>
						<li><a href="/sportsnews">Новости спорта</a></li>
						<li><a href="/">Справка</a></li>
						<li><a href="/">Фотографии</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-4 col-footer-3">
				<div class="wrap-col">
					<h3>Главные фотографии</h3>
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>6.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>7.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>8.jpg" /></a>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>9.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>6.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>7.jpg" /></a>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>6.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>7.jpg" /></a>
								<a href="#"><img src="<?php echo (F_IMG_DIR);?>8.jpg" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4 col-footer-4">
				<div class="wrap-col">
					<h3>Где мы</h3>

					<span><i class="fa fa-map-marker"></i> Краснодарский край,<br> Гулькевичский район,<br> посёлок Гирей</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<div class="zerogrid wrapper">
		Copyright @ 2011-<?php echo date('Y');?> - <a href="http://www.megacode-it.ru" target="_blank" rel="nofollow">Проект Megacode-IT</a>
		<ul class="quick-link">
			<li><a href="#">Ссылка</a></li>
		</ul>
	</div>
</div>

</div>

<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>

</body></html>