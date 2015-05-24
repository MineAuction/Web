{% extends "index.tpl" %}

{% block content %}
  <h1><h1>{{ lang.items_h1 }}</h1></h1>
  <table class="table table-bordered">
    <thead>
      <tr>
				<th>{{ lang.item }}</th>
				<th>{{ lang.offers_count }}</th>
				<th>item ID</th>
				<th>sub ID</th>
			</tr>
    </thead>
    <tbody>
    
		{% set count = 0 %}
    {% for item in items %}
      <tr>
        <td>
          <img src='../items_icons/{{ item.img }}' alt='{{ item.name }}' class="img1">{{ item.name }}
        </td>
				<td>{{ item.count }}</td>
        <td>{{ item.itemID }}</td>
				<td>{{ item.itemSubID }}</td>
      </tr>
			{% set count = count + 1 %}
    {% endfor %}
		<p>Zobrazuji {{ count }} předmětů.</p>
    
    </tbody>
  </table>
{% endblock %}  