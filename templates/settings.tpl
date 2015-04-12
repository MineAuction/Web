{% extends "index.tpl" %}



{% block content %}

	<img src="https://minotar.net/body/{{ session.playerName }}/100.png" alt='{{ session.playerName }}' class='player_img'>
	
  <div class="span6">
    <div class="widget">
      <div class="widget-header"> <i class="icon-cogs"></i>
        <h3>Nastavení</h3>
      </div>
      
      <div class="widget-content">
        <table>
          <tr>
            <th>Výchozí jazyk:</th>
            <td>
							<select name='lang'>
								<option value='cz'>Czech (Česky)</option>
								<option value='en'>English (English)</option>
							</select>
            </td>
          </tr>
          <tr>
            <td colspan='2' class='center'><button class='btn btn-primary btn-large'>Nastavit</button></td>
          </tr>
        </table>
      </div>
    </div>
  </div>    
{% endblock %}