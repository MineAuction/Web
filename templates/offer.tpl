{% extends "index.tpl" %}

{% block javascript %}
	<script src="/js/findItem.jquery.js"></script>
{% endblock %}

{% block content %}		

	<h1>Nabídky</h1>

	<div class="tabbable">
		<ul class="nav nav-tabs">
      <li class="active"><a href="#offer_buy" data-toggle="tab">Koupit</a></li>
			<li><a href="#offer_your" data-toggle="tab">Tvoje</a></li>
			<li><a href="#offer_all" data-toggle="tab">Všechny</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane" id="offer_your">
			<table class="table table-bordered"  id="offertable"  class="tablesorter" > 
					<thead>
						<tr>
							<th>Prodejce</th>
							<th>Item</th>
							<th>Počet</th>
							<th>Cena za kus</th>
							<th>Cena celkem</th>
							<th>Koupit</th>
						</tr>
					</thead>
					<tbody>
						{% for item in myoffers %}
						<tr><td   ><img  class="img1" src='http://achievecraft.com/tools/avatar/32/{{item.playerName}}.png' alt='{{item.playerName}}'>{{item.playerName}}</td>
							<td><img class="img1" src='../ikony/{{item.img}}' alt='{{item.name}}'>{{item.name}}</td>
							<td>{{item.qty}}</td>
							<td>{{item.price}} </td>
							<td>{{item.priceAll}} </td>
							<td class='to_right'>
								<span class="input-prepend input-append">
									<span class="add-on">ks</span>
									<input class="span2 input1" id="appendedPrependedInput" type="text" placeholder='Počet'>
								</span>
								<button class='btn btn-primary'>Koupit</button>
							</td>
						</tr>
						{% endfor %}
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="offer_all" >
				<table class="table table-bordered"  id="offertable"  class="tablesorter" > 
					<thead>
						<tr>
							<th>Prodejce</th>
							<th>Item</th>
							<th>Počet</th>
							<th>Cena za kus</th>
							<th>Cena celkem</th>
							<th>Koupit</th>
						</tr>
					</thead>
					<tbody>
						{% for item in offers %}
						<tr><td   ><img  class="img1" src='http://achievecraft.com/tools/avatar/32/{{item.playerName}}.png' alt='{{item.playerName}}'>{{item.playerName}}</td>
							<td><img class="img1" src='../ikony/{{item.img}}' alt='{{item.name}}'>{{item.name}}</td>
							<td>{{item.qty}}</td>
							<td>{{item.price}} </td>
							<td>{{item.priceAll}} </td>
							<td class='to_right'>
								<span class="input-prepend input-append">
									<span class="add-on">ks</span>
									<input class="span2 input1" id="appendedPrependedInput" type="text" placeholder='Počet'>
								</span>
								<button class='btn btn-primary'>Koupit</button>
							</td>
						</tr>
						{% endfor %}
					</tbody>
				</table>
			</div>
			<div class="tab-pane active" id="offer_buy">
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Nakoupit předměty</h3>
            </div>
            
            <div class="widget-content">
              <table>
                <tr>
                  <th>Vyber předmět:</th>
                  <td>
                    <span class="input-prepend input-append">
                      <span class="add-on icon-search"></span>
                      <input class="span2 input1" name='buy_item' id="buy_item" type="text" placeholder='Zadejte název předmětu'>
                    </span>
                    <input type='hidden' id='buy_item_id' name='buy_item_id'>
                    <input type='hidden' id='buy_item_sid' name='buy_item_sid'>
                  </td>
                </tr>
                <tr>
                  <th>Počet:</th>
                  <td>
                    <span class="input-prepend input-append">
                      <span class="add-on">ks</span>
                      <input class="span2 input1" name='buy_qty' id="buy_qty" type="text" placeholder='Kolik si přeješ koupit?'>
                    </span>
                  </td>
                </tr>
                <tr>
                  <th>Maximální cena:</th>
                  <td>
                    <span class="input-prepend input-append">
                      <span class="add-on">$</span>
                      <input class="span2 input1" name='buy_price' id="buy_price" type="text" placeholder='Cena/ks'>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td colspan='2' class='center'><button class='btn btn-primary btn-large'>Koupit</button></td>
                </tr>
              </table>
            </div>
          </div>
        </div>    
			</div>
		</div>
	</div>

{% endblock %}