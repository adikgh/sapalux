<div class="callback">
	<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Здравствуйте. Пишу вам с сайта. Хочу заказать стирку ковра ..">
		<div type="button" class="callback-btw">
			<i class="fab fa-whatsapp"></i>
			<span>Whatsapp</span>
		</div>
	</a>
	<a target="_blank" href="tel:<?=$site['phone']?>">
		<div type="button" class="callback-bt">
			<i class="fal fa-phone"></i>
			<span>Телефон</span>
		</div>
	</a>
</div>	

<div class="bl_mess">
	<div class="bl_mess_sam"></div>
</div>

<div class="bl_obrf">
	<div class="bl_obrf_f btn_prob_zk"></div>

	<div class="bl_obrf_s">
		<div class="bl_obrf_head">
			<div class="head_c">
				<h4><?=t::w('Order')?></h4>
			</div>
		</div>
		<div class="bl_obrf_con">
			<div class="form">
				<div class="bl_form">
					<input class="name" type="text" placeholder="<?=t::w('Your name')?>" data-lenght="2" data-pr="0">
					<div class="bl_form_icon">
						<i class="fal fa-user"></i>
					</div>
				</div>
				<div class="bl_form">
					<input class="cl_phone phone" type="tel" placeholder="<?=t::w('your number')?>" data-lenght="11" data-pr="0">
					<div class="bl_form_icon">
						<i class="fal fa-phone"></i>
					</div>
				</div>
				<div class="bl_form">
					<div class="btn btn_reg"><span><?=t::w('Request a call')?></span><i class="fal fa-paper-plane"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div class="bl_obrf_foot">
		<div class="btn btn_tr btn_prob_zk"><i class="fal fa-times"></i><span><?=t::w('Close')?></span></div>
	</div>
</div>