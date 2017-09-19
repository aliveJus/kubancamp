<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<div class="footer-logo"><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><img src="<?php echo of_get_option('fooer_logo_url'); ?>"></a></div>
		<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a>
		<span>&copy; <?php echo date('Y'); ?> <em>|</em> <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a></span>
	<?php } ?>
	<!-- <?php if( is_front_page() ) { ?>
		More Summer Camp Templates at <a rel="nofollow" href="" target="_blank">TemplateMonster.com</a>
	<?php } ?> -->

</div>

<div class="pre-counter">

			<div class="offset-1"></div>
			<div id="counter">
				<!-- Yandex.Metrika informer -->
			<a href="https://metrika.yandex.ru/stat/?id=45936132&amp;from=informer"
			target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/45936132/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
			style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="45936132" data-lang="ru" /></a>
			<!-- /Yandex.Metrika informer -->

			<!-- Yandex.Metrika counter -->
			<script type="text/javascript" >
				(function (d, w, c) {
					(w[c] = w[c] || []).push(function() {
						try {
							w.yaCounter45936132 = new Ya.Metrika({
								id:45936132,
								clickmap:true,
								trackLinks:true,
								accurateTrackBounce:true,
								webvisor:true
							});
						} catch(e) { }
					});

					var n = d.getElementsByTagName("script")[0],
						s = d.createElement("script"),
						f = function () { n.parentNode.insertBefore(s, n); };
					s.type = "text/javascript";
					s.async = true;
					s.src = "https://mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f, false);
					} else { f(); }
				})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/45936132" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
		</div>
			<div class="offset-3"></div>
			<div class="developed">
				Разработано: IT отделом АО "Кубань"
	 		</div>
			<div class="offset-1"></div>


</div>
