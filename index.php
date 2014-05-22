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
