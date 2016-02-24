<!DOCTYPE html>
<html>

<head>
    <title>PHP Include</title>
    <style>
        body {
            background-color: darkgreen;
        }
        
        #container {
            width: 960px;
            min-height: 600px;
            background: ivory;
            color: black;
            font-family: fantasy;
            font-size: 20px;
        }
        
        main {
            min-height: 500px;
        }
        
        footer {
            min-height: 50px;
        }
    </style>
</head>

<body>
    <div id="container">

        <h1>TEXT SHOULD GO HERE</h1>
        <main></main>

        <footer>
            <?php include 'footer.php';?>
        </footer>
    </div>

</body>

</html>