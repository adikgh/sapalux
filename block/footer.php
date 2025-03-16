	<!-- Связь -->
	<div class="home_sosh lazy_bag" data-src="/assets/img/bag/rabochiy-den.jpg">
		<div class="home_sosh_bag"></div>
		<div class="bl_c">
			<div class="home_sosh_c">
				<div class="head_c">
					<h2><?=t::w('Contact us')?></h2>
				</div>
				<div class="home_sosh_cd">
					<? if ($site['whatsapp'] != null): ?>
						<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>" class="home_sosh_i"><div class="btn"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></div></a>
					<? endif ?>
					<? if ($site['telegram'] != null): ?>
						<a href="" class="home_sosh_i"><div class="btn"><i class="fab fa-telegram-plane"></i><span>Telegram</span></div></a>
					<? endif ?>
					<? if ($site['instagram'] != null): ?>
						<a href="" class="home_sosh_i"><div class="btn"><i class="fab fa-instagram"></i><span>Instagram</span></div></a>
					<? endif ?>
					<? if ($site['phone'] != null): ?>
						<a target="_blank" href="tel:<?=$site['phone']?>" class="home_sosh_i"><div class="btn"><i class="fas fa-phone-alt"></i><span><?=$site['phone_view']?></span></div></a>
					<? endif ?>
					<? if ($site['phone2'] != null): ?>
						<a target="_blank" href="tel:<?=$site['phone2']?>" class="home_sosh_i"><div class="btn"><i class="fas fa-phone-alt"></i><span><?=$site['phone2_view']?></span></div></a>
					<? endif ?>
				</div>
			</div>
		</div>
	</div>

	<!-- maps -->
	<div class="home_maps">
		<div class="bl_c">
			<div class="home_maps_c">
				<div class="head_c">
					<h5><?=t::w('How to find us?')?></h5>
				</div>
				<div class="home_maps_cd">
					<div class="home_maps_cdi">
						<div class="home_maps_icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="home_maps_txt">
							<p><?=t::w('Address:')?></p>
							<span>г. Астана, Шугыла 30</span>
						</div>
					</div>
					<div class="home_maps_cdi">
						<div class="home_maps_icon">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="home_maps_txt">
							<p><?//=t::w('Phone number:?')?></p>
							<a href="tel:<?=$site['phone']?>"><span><?=$site['phone_view']?></span></a>
							<a href="tel:<?=$site['phone2']?>"><span><?=$site['phone2_view']?></span></a>
						</div>
					</div>
					<div class="home_maps_cdi">
						<div class="home_maps_icon">
							<i class="fab fa-instagram" style="font-weight: 600"></i>
						</div>
						<div class="home_maps_txt">
							<a href="https://www.instagram.com/sapa_lux01/" target="_blank"><span>@sapa_lux01</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="home_maps_m">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1464.7586455846056!2d71.35157576598677!3d51.18414064378956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2skz!4v1741943047192!5m2!1sru!2skz" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>

	<!-- start footer -->
	<footer class="footer">
		<div class="bl_c">
			<div class="footer_c">
				<div class="foot_logo">
					<div class="foot_logo_c lazy_bag" data-src="/assets/img/logo/logo_320х.png"></div>
				</div>
				<div class="foot_sn">
					<h6><a href="#"><?=t::w('Our services')?></a></h6>
					<nav>
						<ul>
							<?
								$sql = db::query("select * from menu where menu_id = 2 order by number asc");
						      	while($ana = mysqli_fetch_array($sql)){
									echo '
											<li>
												<a href="'.$ana['href'].'"><span>'.($lang=='kz'?$ana['nm_kz']:$ana['nm_ru']).'</span></a>
											</li>
										';
								}
							?>
						</ul>
					</nav>
				</div>
				<div class="foot_sn">
					<h6><p>Меню</p></h6>
					<nav>
						<ul>
							<?
								$sql = db::query("select * from menu where view = 1 order by number asc");
						      	while($ana = mysqli_fetch_array($sql)){
									echo '
											<li>
												<a href="'.$ana['href'].'"><span>'.($lang=='kz'?$ana['nm_kz']:$ana['nm_ru']).'</span></a>
											</li>
										';
								}
							?>
						</ul>
					</nav>
				</div>
				<div class="foot_sn">
					<h6><a href="#"><?=t::w('How will you contact?')?></a></h6>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<div class="ft_con">
		<div class="bl_c">
			<div class="ft_content">
				<div class="ft_item">© 2025. Все права защищены.</div>
				<div class="ft_item">
					<div class="ft_item_mn">
						<span>Сайт разработали:</span>
						<a href="#" target="_blank"><div class="dev_logo lazy_bag" data-src="https://gprog.kz/assets/img/logo/logo_part.png"></div></a>
					</div>
					<div class="ft_item_mn">
						<a href="#" target="_blank">Заказать сайт</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- js -->
	<script src="/assets/js/norm.js?ver=4"></script>
	<script src="/assets/js/main.js?ver=4"></script>

	<? include "modal.php"; ?>

</body>
</html>