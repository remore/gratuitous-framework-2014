<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ page_title }} | Example Company Website</title>
</head>
<body>
  <header>
    <h1>Foobar Company</h1>
    This is header part.
    
    <a href="/generic_company_website/web/index">TOP page</a>
    <a href="/generic_company_website/web/product_series_x/">Product Series X</a>
    <a href="/generic_company_website/web/product_series_y/">Product Series Y</a>
  </header>
  
  <main>
    <div style="background-color:#eeeeee; width:100%; padding:5px; margin:5px;">
    {{ page_content | raw }}
    </div>
  </main>

  <footer>
    Copyright 2014 @remore
  </footer>
</body>
</html>