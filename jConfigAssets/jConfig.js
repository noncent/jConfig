/**
 * jConfig JS
 * 
 * jConfig working as function to get
 * config settings from Server Side languages
 * like PHP, ASP, Ruby and Rail. 
 * 
 * Basically it's an ajax method which is
 * using to get and use Config data in js file.
 * 
 * @author Neeraj Singh
 * @version 1.0
 * @license Free to use
 * @package jQuery
 */

/******************************************************/
/* THE FUNCTION */
/******************************************************/
$.extend({
    jConfig: function() {
        // Set local var
        var configJSON = null;

        // Ajax Error Handling         
        $.ajaxSetup({
            error: function(jqXHR, exception) {
                if (jqXHR.status === 0) {
                    alert('Not connect.\n Verify Network.');
                } else if (jqXHR.status === 404) {
                    alert('Requested page not found. [404]');
                } else if (jqXHR.status === 500) {
                    alert('Internal Server Error [500].');
                } else if (exception === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    alert('Time out error.');
                } else if (exception === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error.\n' + jqXHR.responseText);
                }
            }
        });

        // Ajax Calling
        $.ajax({
            url: 'jConfig.php',
            type: 'POST',
            data: {jConfigKey: false},
            dataType: "json",
            async: false,
            success: function(theResponse) {
                configJSON = theResponse;
            }
        });

        // Return the Response
        return configJSON;
    }
});

/**
 * Collecting all Config Data in 
 * global var jConfig as an JSON
 */
var jConfig = (function() {
    var _private = $.jConfig();
    return {
        get: function(key) {
            if (_private !== null) {
                if (key) {
                    if (_private.data[key]) {
                        return _private.data[key];
                    } else {
                        alert('Sorry, Invalid Key Requested');
                    }
                } else {
                    return _private.data;
                }
            } else {
                alert('Sorry, No Response.');
            }
        }
    };
})(jQuery);
