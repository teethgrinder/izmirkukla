<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>jQuery Accordion Gallery</title>
        <meta content="This jQuery example shows you how to create an accordion animated gallery" name="description" />
        <script type="text/javascript" src="includes/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="includes/accordionGallery.js"></script>

        <style>
            body{
                padding:0;
            }
            ul{
                list-style: none;
            }
            li{
                float:left;
                margin-right: 10px;
            }
            li img{
                cursor: pointer;
                width:200px;
                height:200px;
                padding:5px;
                border:1px solid gray;
                background-color: white;
                margin-right: 5px;
                box-shadow:1px 1px 5px black;
            }
            .container{
                width:960px;
                height: 1000px;
                margin:0 auto;

            }
            #results{
                margin: 0 auto;
                position: relative;
                margin-top:250px;
            }
            .section{
                margin-bottom: 5px;
                box-shadow:1px 1px 3px black;
            }
            h1{
               border-bottom: 2px solid gray;
                color: silver;
                font-family: Comic Sans MS;
                padding-bottom: 15px;
                padding-left: 50px;
                text-shadow: 1px 1px black;
                margin-top:0;
            }
            .button{
                background-color: silver;
                border: 1px solid black;
                border-radius: 5px 5px 5px 5px;
                box-shadow: 1px 1px 5px black;
                color: black;
                float: right;
                padding: 8px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <a class="button" href="http://www.jqueryload.com/jquery-gallery-with-accordion-effect">Download</a>
        <h1>jQuery Accordion effect Gallery</h1>
            <div class="imgParts">
                <ul>
                    <li><img src="img1.jpg" /></li>
                    <li><img src="img2.jpg" /></li>
                    <li><img src="img3.jpg" /></li>
                    <li><img src="img1.jpg" /></li>
                </ul>
            </div>
            <div id="results">
            </div>
        </div>
    </body>
</html>