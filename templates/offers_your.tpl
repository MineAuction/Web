{% extends "index.tpl" %}

{% block content %}
	<h1>{{ lang.offers_h1_your }}</h1>
	
	<table class="table table-bordered"  id="offertable"  class="tablesorter" > 
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
			{% for item in myoffers %}
			<tr>
        <td><img class="img1" src='https://minotar.net/avatar/{{ item.playerName }}/32' alt='{{ item.playerName }}'>{{ item.playerName }}</td>
				<td><img class="img1" src='../items_icons/{{ item.img }}' alt='{{ item.name }}'>{{ item.name }}</td>
				<td>{{ item.qty }}</td>
				<td>{{ item.price }} </td>
				<td>{{ item.priceAll }} </td>
				<td class='to_right'><button class='btn btn-primary'>{{ lang.cancel }}</button></td>
			</tr>
			{% endfor %}
		</tbody>
	</table>
{% endblock %}