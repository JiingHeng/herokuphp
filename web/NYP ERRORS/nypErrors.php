<!DOCTYPE html>
<!--ERROR 4: <html> element does not have a [lang] attribute-->
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Error 3: [user-scalable="no"] is used in the <meta name="viewport"> element or the [maximum-scale] attribute is less than 5-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Document</title>
</head>
<body>
    <!--Error 1: Serve responsive images-->
    <img src="web/resources/img/wallpaper.jpg">
    <br>
    <br>
    <!--Error 2: Optimize Cumulative Layout Shift-->
    <img src="web/resources/img/wallpaper.jpg">
    <br>
    <br>
    <!--Error 5: Lists do not contain only <li> elements and script supporting elements (<script> and <template>)-->
    <ul> <p> List item 1 </p> </ul>
    <!--Error 6: Heading Elements are not in a sequentially-descending order-->
    <h3> Page title </h3>
    <!--Error 7: Links do not have descriptive text-->
    <p> Error , <a href="web/NYP ERRORS/nypErrors.php"></a>.</p>
    
</body>
</html>