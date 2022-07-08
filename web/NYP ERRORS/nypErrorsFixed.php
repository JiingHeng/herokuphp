<!DOCTYPE html>
<!--Fix 4: <html> element does not have a [lang] attribute-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Fix 3: [user-scalable="no"] is used in the <meta name="viewport"> element or the [maximum-scale] attribute is less than 5-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Fix 1: Serve responsive images-->
    <img src="web/resources/img/wallpaper.webp" srcset="wallpaper.webp 1536w" sizes="50vw">
    <br>
    <br>
    <!--Fix 2: Optimize Cumulative Layout Shift-->
    <img src="web/resources/img/wallpaper.webp" width="1536" height="1024" alt="wallpaper">
    <br>
    <br>
    <!--Fix 5:Lists do not contain only <li> elements and script supporting elements (<script> and <template>) -->
    <ul>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>
    <br>
    <br>
    <!--Fix 6: Heading Elements are not in a sequentially-descending order-->
    <h1> Page title </h1>
    <h3> Section 1 of page </h3>
    <h3> Section 2 of page </h3>
    <!--Fix 7: Links do not have descriptive text-->
    <p> To , <a href="web/NYP ERRORS/nypErrors.php"</a> for the error page.</p>


</body>
</html>