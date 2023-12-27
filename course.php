<html>
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/button.css"/>
</head>
<style>
    body{
        background-color:green;
    }
    .container{
        /*background-color:yellow;*/
        margin:5%;
        
    }
    img{
        margin:10px;
        width :inherit;
        height: 85%;
    }
    /*button{
        margin:10px;
        width:100px;
        height:60px;;
        background-color:ORANGE;
    }*/
    
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="./Images/java_book.png" alt="image"><br>
                <a href="java.php">
                <button class="learn-more">JAVA</button></a>
            </div>
            <div class="col-sm">
                <img src="./Images/python_book.png" alt="image"><br>
                <button class="learn-more">PYTHON</button>
            </div>
            <div class="col-sm">
                <img src="./Images/web_book.png" alt="image"><br>
                <button class="learn-more">Web Design</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <img src="./Images/ds_book.png" alt="image"><br>
                <a href="PSoln.php">
                <button class="learn-more">Data Structure</button></a>   
            </div>
            <div class="col-sm">
                <img src="./Images/node_book.png" alt="image"><br>
                <button class="learn-more">Spring BOOT</button>
            </div>
            <div class="col-sm">
                <img src="./Images/sql_book.png" alt="image"><br>
                <button class="learn-more">SQL</button>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>