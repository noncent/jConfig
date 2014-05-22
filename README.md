jConfig
=======

jConfig is working as function that helps to get config data from server side inside js file as json. jConfig return you all your server side config data as an json format.

<h5>What is jConfig?</h5>

jConfig is working as function that helps to get config data from server side inside js file as json. jConfig return you all your server side config data as an json format.


<h5>Advantage of using jConfig:</h5>

When we works on any Web based project like PHP web site then some time we need server side config data in js file (like appid or somthing else). In js file we can't write server side code. So, here problems occurs, we need to place our js code inside php file. jConfig resolve this issue and you are free to get server side config data inside js file. Actually jConfig not gives you only config data it's give you all server side value, variable value inside js file.

<h5>How to Use jConfig:</h5>

You have to add jQuery lib and jConfig.js file inside your html or php file. Then you can use jConfig function anywhere in any js file.
You can get data like:

```javascript
/**
 * Get Page Title from Server side
 */
console.log(jConfig.get('TITLE'));

or

/**
 * Get Page Description from Server side
 */
console.log(jConfig.get('DESCRIPTION'));
```
also you can see all config data inside browser console like:

```javascript
/**
 * Get All Config Data 
 */
console.log(jConfig.get());
```

<h4>Example Page:</h4>

```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is example page for jConfig plug-in | BETA</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="jConfigAssets/jConfig.js" type="text/javascript"></script>
    </head>
    <body>

    </body>
</html>

```

Cheers!!
Neeraj Singh | neeraj[dot]singh[at]lbi[dot]co[dot]in
<h6>[Document End]</h6>
