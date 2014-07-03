<div>
	<h1>{{ name }}</h1>
	<p>posted at: {{ datetime | date('Y-m-d') }}</p>
	<div>
		{{ page_content | raw }}
	</div>
</div>