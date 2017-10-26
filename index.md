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

<script type="text/javascript">
	var keyHandlerMap = {
			thesaurusSearch: thesaurusSearchKeyUp
		};

	function genericKeyHandler(e){
		var target = e.target || e.srcElement,
			handlerName = target.dataset.keyuphandler,
			handler = keyHandlerMap[handlerName];

		if(handler){
			handler.call(target, e);
		}
	}

	function thesaurusSearchKeyUp(e){
		var enterCode = 13;

		if(e.keyCode === enterCode){
			search();
			//location.href = '/thesaurus/#search=' + this.value
		}
	}

	document.addEventListener('keyup', genericKeyHandler);

	function search(){
		var searchstring = document.getElementById('searchstring').value;
		location.href = '/thesaurus/#search=' + searchstring;
	}
</script>
