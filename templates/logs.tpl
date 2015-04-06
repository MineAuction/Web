{% extends "index.tpl" %}



{% block content %}

 <h1 style="text-alig:center">Log</h1>
  <table class="table table-bordered" id='table_inventory'>
    <thead>
      <tr><td style='width: 100px;'>Time</td><td style='width: 50px;'>Komponenta</td><td>Text</td></tr>
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