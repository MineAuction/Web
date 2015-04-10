{% extends "index.tpl" %}

{% block content %}
	<h1 style="text-alig:center">Log</h1>
  <table class="table table-bordered" id='table_inventory'>
    <thead>
      <tr>
				<th style='width: 100px;'>Time</th>
				<th style='width: 50px;'>Komponenta</th>
				<th>Text</th>
			</tr>
    </thead>
    <tbody>
    
    {% for logs in logs %}
      <tr class="{{ logs.level }}">
        <td>{{ logs.time }}</td>
        <td>{{ logs.component }}</td>
        <td>{{ logs.text }}</td> 
      </tr>
    {% endfor %}
    
    </tbody>
  </table>
{% endblock %}