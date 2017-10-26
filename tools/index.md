---
title: "Tools"
layout: list
---

{% assign items = site.tools | sort: 'priority' | reverse %}
{% for item in items %}
  <div class="content-block">
  {% if item.customUrl %}
  <h3><a href="{{ item.customUrl }}">{{ item.title }}</a></h3>
  <p>{{ item.introduction }}</p>
  {% else %}
  <h3><a href="{{ item.url }}">{{ item.title }}</a></h3>
  <p>{{ item.introduction }}</p>
  {% endif %}
  </div>
{% endfor %}
