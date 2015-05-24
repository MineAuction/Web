{% extends "index.tpl" %}

{% block javascript %}
	<script src="/js/inventory.js"></script>
{% endblock %}

{% block content %}
  <h1>{{ lang.inventory_h1 }}</h1>
  <table class="table table-bordered" id='table_inventory' class="tablesorter">
    <thead>
      <tr>
				<th>{{ lang.item }}</th>
				<th>{{ lang.have_pc }}</th>
				<th>{{ lang.max_price }}</th>
				<th style='width: 350px;'>{{ lang.available_actions }}</th>
			</tr>
    </thead>
    <tbody>
    
    {% for item in inv %}
      <tr>
        <td>
          <input type='hidden' class='row_id' value='{{ item.id }}'>
          <img src='../items_icons/{{ item.img }}' alt='{{ item.name }}' class="img1">{{ item.name }} {{ item.enchants }} {{item.damage | raw}}
        </td>
        <td class='click_max items_qty'>{{ item.qty }}</td>
				<td></td>
        <td class='to_right'>
          <span class="input-prepend input-append">
            <span class="add-on">{{ lang.pieces }}</span>
            <input class="span2 input1 items_count" type="text" placeholder='{{ lang.qty }}' required>
          </span>                                         
          <span class="input-prepend input-append">
            <span class="add-on">{{ settings.currency }}</span>
            <input class="span2 input1 items_price" id="appendedPrependedInput" type="text" placeholder='{{ lang.price_pc }}' required>
          </span>
          <button class='btn btn-primary sell'>{{ lang.sell }}</button>
          <button class='btn btn-success' {{ item.getauction }}>{{ lang.auction }}</button>
        </td>
      </tr>
    {% endfor %}
    
    </tbody>
  </table>
{% endblock %}    