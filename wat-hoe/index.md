---
title: "Wat? Hoe?"
layout: list
---

{% assign items = site.wat-hoe | sort: 'priority' %}
{% for item in items %}
  <div class="content-block">
    <h3><a href="{{ item.url }}">{{ item.title }}</a></h3>
    <p>{{ item.excerpt }}</p>
  </div>
{% endfor %}
