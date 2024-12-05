<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout3</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #logo_div{
            width: 100%;
            min-height: 50px;
            background-color: lightgrey;
            line-height: 50px;
            text-align: center;
            margin-bottom: 10px;
        }
        #nav_div{
            width: 100%;
            min-height: 30px;
            background-color: rgba(240, 128, 128, 0.515);
            line-height: 30px;
            text-align: center;
            margin-bottom: 10px;
        }
        #header_div{
            width: 100%;
            min-height: 100px;
            background-color: rgba(32, 178, 171, 0.371);
            text-align: center;
            line-height: 100px;
            margin-bottom: 10px;
        }
        #parent_div{
            width: 100%;
            margin-bottom: 10px;
        }
        #sidebar_div{                  
            width: 20%;
            height: 400px;
            line-height: 400px;
            text-align: center;
            background-color: rgba(216, 112, 147, 0.395);
            float: left;
        }
        #body_div{
            width: 75%;
            height: 400px;
            line-height: 400px;
            text-align: center;
            background-color: rgba(216, 112, 147, 0.367); 
            float:right ;
        }
        .clearFix::after{
            content: " ";
            display: block;
            clear: both;
        }
        #footer_div{
            width: 100%;
            min-height: 30px;
            line-height: 30px;
            background-color: rgba(0, 255, 255, 0.273);
            text-align: center;
        }
        #wrapper_div{
            width: 80%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div id="wrapper_div">
    <div id="logo_div">
        LOGO
    </div>
    <nav id="nav_div">
        NAVIGATION
    </nav>
    <header id="header_div">
        HEADER
    </header>
    <div id="parent_div" class="clearFix">
        <div id="sidebar_div">
            SIDEBAR
        </div>
        <div id="body_div">
            BODY AREA
        </div>
    </div>
    <footer id="footer_div">
        FOOTER
    </footer>
</div>
</body>
</html>