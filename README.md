# cdn
PHP Class for generating head links and scripts to resources hosted on various CDN's
### libraries
- Angular JS
- Bootstrap
- D3
- Del CSS
- Dojo
- FontAwesome
- jQuery
- jQueryUI
### usage
Simply echo where required:
```php
echo Del\Cdn::angularJavascript('1.5.6');
// output 
// <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
```

### changelog
Default versions have changed in v2.x, just pass in the old version number where you call the code.

For instance, if you used Bootstrap v3.3.2, just pass in `3.3.2`:
```php
echo Cdn::bootstrapJavascript(); // now gives v4.5.3
echo Cdn::bootstrapJavascript('3.3.2'); // you are now upgraded to Del\Cdn v2.x
``` 

