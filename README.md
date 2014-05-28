jConfig
=======

jConfig is an utility javascript code to helps PHP developers to get PHP config data/value in js file. Usually  we can't use php code inside js file. If we want to use any PHP config data value inside the js file then we have to write javascript code inside PHP file.
We can't get config data in .js file. So, jConfig is here to resolve this problem.


<h5>What is jConfig?</h5>

jConfig is working as function that helps to get config data from server side inside js file as json. jConfig return you all your server side config data as an json format.


<h5>Why we use jConfig?</h5>

##### Example - 1: Using PHP var in javascript in index.php

```php
<?php
require_once 'class/config.php';
$config = new Config();
?>

<script type = "text/javascript">
    /**
     * Facebook function 
     * to send app request to friends
     *
     * Here variable value set by php
     */
    function sendAppRequest() {
        var title = '<?php echo $config->get("PAGE_TITLE"); ?>';
        var message = '<?php echo $config->get("FB_SHARE_MSG"); ?>';
        FB.ui({
            method: 'apprequests',
            title: title,
            message: message
        }, fbCallback);
    }
    function fbCallback() {
    }
    ;
    /* End */
</script>
```

##### Example - 2: function without config in script.js

```javascript
/**
 * Facebook function 
 * to send app request to friends
 *
 * Here variable value set as static
 */
function sendAppRequest() {
	var title = 'Facebook App Request Window';
	var message = 'Hi!, I am using this app and enjoying allot.. are you';   
    FB.ui({
        method : 'apprequests',
        title : title,
        message : message
    }, fbCallback);
}
function fbCallback() {};
/* End */
```

##### Example - 3: function using php var in script.js with jConfig

```javascript
/**
 * Facebook function 
 * to send app request to friends
 *
 * Here variable value set by server side/config files
 */
function sendAppRequest() {
	var title = jConfig.get('PAGE_TITLE');
	var message = jConfig.get('FB_SHARE_MSG');   
    FB.ui({
        method : 'apprequests',
        title : title,
        message : message
    }, fbCallback);
}
function fbCallback() {};
/* End */
```


<h5>Advantage of using jConfig:</h5>

When we work on any Web based project like PHP web site then some time we need server side config data in js file (like appid or somthing else). In js file we can't write server side code. So, here problems occurs, we need to place our js code inside php file. jConfig resolve this issue and you are free to get server side config data inside js file. Actually jConfig not gives you only config data it's give you all server side value, variable value inside js file.


<h5>How to Use jConfig:</h5>

You have to add jQuery lib and jConfig.js file inside your html or php file. Then you can use jConfig function anywhere in any js file. For <b>config</b> file check <b>class/config.php</b>
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

<h5>Example Page:</h5>

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
        <script type="text/javascript">
            /**
             * Real Example Use
             */
            $(document).ready(function() {
                document.title = jConfig.get('TITLE');
                $('meta[name=description]').remove();
                $('meta[name=keywords]').remove();
                $('head').append('<meta name="description" content="' + jConfig.get('DESCRIPTION') + '">');
                $('head').append('<meta name="keywords" content="' + jConfig.get('KEYWORDS') + '">');
            });
        </script>
    </body>
</html>
```

Cheers!!
Neeraj Singh | neeraj[dot]singh[at]lbi[dot]co[dot]in
<h6>[Document End]</h6>
