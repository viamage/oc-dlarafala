# What did I do?

1. Install octobercms
2. run php artisan october:env
3. setup your DB credentials in .env
4. php artisan october:up
5. php artisan create:plugin Viamage.DlaRafala
6. php artisan create:model Viamage.DlaRafala ServerRequest
7. php artisan create:controller Viamage.DlaRafala ServerRequests
8. php artisan create:component Viamage.DlaRafala UserServerRequest

and then:

1. Plugin.php - uncomment navigation and register component
2. updates/create_server_requests_table.php - setup DB structure
3. updates/version.md - add migration name so it could run on next php artisan october:up. run php artisan 
october:up when done. 
4. models/serverrequest - setup backend form and list fields yaml https://octobercms.com/docs/backend/forms
5. components/ - setup html and basic php methods for component, examples in the code

that's it. now create or install theme from octobercms themes and drop component inside in CMS tab.

I used a simple page in my very raw theme, with code like:

```
layout = "default"
url = "/request"

[user_server_request]
==
{% flash %}<p>{{ message }}</p>{% endflash %}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
{% component 'user_server_request' %}
{% framework %}
```

http://uploads.keios.eu/video/dlarafala.html

https://octobercms.com/docs/themes/development

https://octobercms.com

Not a fan personally, but such cruds can be build even faster with

https://octobercms.com/plugin/rainlab-builder
