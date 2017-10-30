---
title: "Blog"
layout: list
---

{% assign items = site.nieuws | sort: 'priority' %}
{% for item in items %}
  <div class="content-block">
    <time class="published">{{ item.created | date: "%d-%m-%Y" }}</time>
    <h3><a href="{{ item.url }}">{{ item.title }}</a></h3>
    <p>{{ item.excerpt }}</p>
  </div>
{% endfor %}
