{% for key, entry in entries %}
<div>
	<h4><a href="{{key}}">{{ entry.name }}</a></h4>
	<p>{{ entry.description }}</p>
</div>
{% endfor %}
