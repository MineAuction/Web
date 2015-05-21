{% extends "index.tpl" %}

{% block javascript %}
	<script src="/js/findItem.jquery.js"></script>
{% endblock %}

{% block content %}
	<h1>{{ lang.offers_h1_buy }}</h1>
	
  <div class="tab-pane active span6 widget" id="offer_buy">
		<!--
    <div class="widget-header">
      <h3>
        Nakoupit předměty
      </h3>
    </div>
		-->
    <div class="widget-content">
      <table>
        <tr>
          <th>{{ lang.offers_select_item }}:</th>
          <td>
            <span class="input-prepend input-append">
							<span class="add-on icon-search"></span>
							<input class="span2 input1" name='buy_item' id="buy_item" type="text" placeholder='{{ lang.offers_placeholder_item }}' />
						</span> 
						<input type='hidden' id='buy_item_id' name='buy_item_id' /> 
						<input type='hidden' id='buy_item_sid' name='buy_item_sid' />
          </td>
        </tr>
        <tr>
          <th>{{ lang.qty }}:</th>
          <td>
            <span class="input-prepend input-append">
							<span class="add-on">{{ lang.pieces }}</span> 
							<input class="span2 input1" name='buy_qty' id="buy_qty" type="text" placeholder='{{ lang.offers_placeholder_many }}' />
						</span>
          </td>
        </tr>
        <tr>
          <th>{{ lang.max_price }}</th>
          <td>
            <span class="input-prepend input-append">
							<span class="add-on">{{ settings.currency }}</span> 
							<input class="span2 input1" name='buy_price' id="buy_price" type="text" placeholder='{{ lang.price_pc }}' />
						</span>
          </td>
        </tr>
        <tr>
          <td colspan='2' class='center'>
            <button class='btn btn-primary btn-large'>{{ lang.buy }}</button>
          </td>
        </tr>
      </table>
    </div>
  </div>
{% endblock %}