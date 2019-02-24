<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid top-footer">
		<div class="row">
			<div class="col-1-4">
				<a href="https://gulkevichi.com" target=_blank><img src="<?php echo (F_IMG_DIR);?>19.jpg" /></a>
			</div>
			<div class="col-1-4">
				<a href="http://гирейское.рф" target=_blank><img src="<?php echo (F_IMG_DIR);?>16.jpg" /></a>
			</div>
			<div class="col-1-4">
				<a href="http://girey.my1.ru" target=_blank><img src="<?php echo (F_IMG_DIR);?>17.jpg" /></a>
			</div>
			<div class="col-1-4">
				<a href="http://footgul.ru" target=_blank ><img style="height: 50px; width: auto;"  src="<?php echo (F_IMG_DIR);?>15.jpg" /></a>
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
                        <li><a href="/history">История</a></li>
						<li><a href="/news">Новости</a></li>
						<li><a href="/sportsnews">Новости спорта</a></li>
						<li><a href="/wall-of-sports-glory">Доска спортивной славы</a></li>

						<li><a href="/service">Услуги</a></li>
						<li><a href="/raspisanija">Расписания</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-4 col-footer-3">
				<div class="wrap-col no-adaptive">
					<div class="row">
                        <?php echo do_shortcode( '[instagram-feed num=12 col=2]' ); ?>
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
			<li>
                <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=6307444&amp;from=informer"
                   target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/6307444/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                       style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="6307444" data-lang="ru" /></a>
                <!-- /Yandex.Metrika informer -->

                <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >
                    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                    ym(6307444, "init", {
                        id:6307444,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/6307444" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            </li>
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
<?php wp_footer() ?>

</body></html>