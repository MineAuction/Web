{% extends "index.tpl" %}

{% block javascript %}
	<script src="/js/offers.js"></script>
{% endblock %}

{% block content %}
	<h1>{{ lang.offers_h1_all }}</h1>
	
	<table class="table table-bordered" id="offertable" class="tablesorter"> 
		<thead>
			<tr>
				<th>{{ lang.vendor }}</th>
				<th>{{ lang.item }}</th>
				<th>{{ lang.qty }}</th>
				<th>{{ lang.price_pc }}</th>
				<th>{{ lang.price_sum }}</th>
				<th>{{ lang.available_actions }}</th>
			</tr>
		</thead>
		<tbody>
			{% for item in offers %}
			<tr>
        <td><img class="img1" src='https://minotar.net/avatar/{{ item.playerName }}/32' alt='{{ item.playerName }}'>{{ item.playerName }}</td>
				<td><img class="img1" src='../items_icons/{{ item.img }}' alt='{{ item.name }}'>{{ item.name }}{{ item.itemMeta }}</td>
				<td class='click_max'>{{ item.qty }}</td>
				<td>{{ item.price }} </td>
				<td>{{ item.priceAll }} </td>
				<td class='to_right'>
					<span class="input-prepend input-append">
						<span class="add-on">{{ lang.pieces }}</span>
						<input class="span2 input1 items_count" id="appendedPrependedInput" type="text" placeholder='{{ lang.qty }}' required>
					</span>
					<input type='hidden' name='row_id' class='row_id' value='{{ item.offerId }}' />
					<button class='btn btn-primary offer_buy'>{{ lang.buy }}</button>
				</td>
			</tr>
			{% endfor %}
		</tbody>
	</table>
{% endblock %}