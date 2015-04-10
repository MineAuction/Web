{% extends "index.tpl" %}

{% block javascript %}
	<script src="/js/inventory.js"></script>
{% endblock %}

{% block content %}
  <h1 style="text-alig:center">Tvůj inventář</h1>
  <table class="table table-bordered" id='table_inventory'>
    <thead>
      <tr>
				<th>Předmět</th>
				<th>Máš kusů</th>
				<th>Max cena</th>
				<th style='width: 350px;'>Prodat</th>
			</tr>
    </thead>
    <tbody>
    
    {% for item in inv %}
      <tr>
        <td>
          <input type='hidden' class='item_id' value='{{item.itemId}}'>
          <input type='hidden' class='item_subid' value='{{item.itemDamage}}'>
          <img src='../ikony/{{item.img}}' alt='{{item.name}}' class="img1">{{ item.name }}
        </td>
        <td class='click_max items_qty'>{{ item.qty }}</td>
				<td></td>
        <td class='to_right'>
          <span class="input-prepend input-append">
            <span class="add-on">ks</span>
            <input class="span2 input1 items_count" type="text" placeholder='Počet'>
          </span>                                         
          <span class="input-prepend input-append">
            <span class="add-on">$</span>
            <input class="span2 input1 items_price" id="appendedPrependedInput" type="text" placeholder='Cena/ks'>
          </span>
          <button class='btn btn-primary sell'>Prodat</button>
          <button class='btn btn-success' {{ item.getauction }}>Dražit</button>
        </td>
      </tr>
    {% endfor %}
    
    </tbody>
  </table>
{% endblock %}    