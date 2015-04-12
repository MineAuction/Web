{% extends "index.tpl" %}

{% block content %}
  <h1>Dostupné předměty</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
				<th>Předmět</th>
				<th>item ID</th>
				<th>sub ID</th>
			</tr>
    </thead>
    <tbody>
    
		{% set count = 0 %}
    {% for item in items %}
      <tr>
        <td>
          <img src='../ikony/{{ item.img }}' alt='{{ item.name }}' class="img1">{{ item.name }}
        </td>
        <td>{{ item.itemID }}</td>
				<td>{{ item.itemSubID }}</td>
      </tr>
			{% set count = count + 1 %}
    {% endfor %}
		<p>Zobrazuji {{ count }} předmětů.</p>
    
    </tbody>
  </table>
{% endblock %}  