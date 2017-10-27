---
description: "ErfGeo. Nederlandse topografie door de tijd (beta)"
layout: "home"
---

<div class="row-flex">

	<div class="six columns content-block">
		<h3><a href="/thesaurus">Thesaurus</a></h3>
		<ul class="links">
		<li><a href="/thesaurus">Zoek via de viewer</a></li>
		<li><a href="/geothesaurus">Tekstueel zoeken in de geothesaurus</a></li>
		<li><a href="/geothesaurus/bronnen">Overzicht gebruikte datasets</a></li>
		</ul>
	</div>

	<div class="six columns content-block">
		<h3><a href="/wat-hoe/index.html">Wat? Hoe?</a></h3>
		<ul class="links">
		{% assign wathoe = site.wat-hoe | sort: 'priority' %}
		{% for item in wathoe limit:2 %}
		  <li><a href="{{ item.url }}">{{ item.title }}</a></li>
		{% endfor %}
		<li><a href="/wat-hoe/">Meer...</a></li>
		</ul>
	</div>

</div>

<div class="row-flex">

	<div class="six columns content-block">
		<h3><a href="/nieuws/index.html">Blog</a></h3>
		<ul class="links">
		{% assign nieuws = site.nieuws | sort: 'priority' %}
		{% for item in nieuws limit:2 %}
		  <li><a href="{{ item.url }}">{{ item.title }}</a></li>
		{% endfor %}
		</ul>
	</div>

	<div class="six columns content-block">
		<h3><a href="/tools/index.html">Tools</a></h3>
		<ul class="links">
		{% assign tools = site.tools | sort: 'priority' | reverse %}
		{% for item in tools %}
		  {% if item.customUrl %}
		  	<li><a href="{{ item.customUrl }}">{{ item.title }}</a></li>
		  {% else %}
		  	<li><a href="{{ item.url }}">{{ item.title }}</a></li>
		  {% endif %}
		{% endfor %}
		</ul>
	</div>

</div>
