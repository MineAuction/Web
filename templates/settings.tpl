{% extends "index.tpl" %}



{% block content %}

	<img src="https://minotar.net/body/{{ session.playerName }}/100.png" alt='{{ session.playerName }}' class='player_img'>
	{{ session.playerLang }}
  <div class="span6">
    <div class="widget">
      <div class="widget-header"> <i class="icon-cogs"></i>
        <h3>{{ lang.settings_h1 }}</h3>
      </div>
      
      <div class="widget-content">
				<form method='post'>
					<table>
						<tr>
							<th>{{ lang.default_lang }}:</th>
							<td>
								<select name='lang'>
									{% for row in settings_langs %}
										<option value='{{ row.lang }}' {{ row.selected }}>{{ row.description }}</option>
									{% endfor %}
								</select>
							</td>
						</tr>
						<tr>
							<td colspan='2' class='center'><button class='btn btn-primary btn-large' type='submit'>{{ lang.set }}</button></td>
						</tr>
					</table>
				 </form>
      </div>
    </div>
  </div>    
{% endblock %}