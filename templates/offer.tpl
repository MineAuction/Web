{% extends "index.tpl" %}



{% block content %}
 <h1 style="text-alig:center">Nabídky ke koupi</h1>
  <table class="table table-bordered">
    <thead>
      <tr><td>Prodejce</td><td>Item</td><td>Počet</td><td>Cena 1 itemu</td><td>Cena celkem</td><td>Koupit</td></tr>
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
{% endblock %}