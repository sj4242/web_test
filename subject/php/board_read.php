<!DOCTYPE html>
<html>
<head>
    <title>CLOUD WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google WEB Font URL : https://fonts.google.com/?subset=korean&selection.family=Nanum+Gothic -->
    <!-- Nanum 고딕체중 마음에 드는거 선택 후 해당 링크를 HTML 코드에 삽입 -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
    .navbar {
        font-size: 15px;
        margin-bottom: 0;
        border-radius: 0;
    }
    .carousel-inner > .item > img {
        width:1200px;
        height:600px;
    }
    .modal-content {
        font-size: 15px; 
        margin: 0;
        padding: 0;
    }
    .navbar-brand {
        background-color:#000000
    }
    </style>

</head>

<body style="font-family: 'Nanum Gothic', sans-serif;">

    <!-- Navigation Bar Container -->
    <div class="container">
    <div class="row">
        <div class="col-sm-12">   
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fulid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="../index_auth.html">
                        <img style="max-width:45px; margin-top: -13px;" src="../Bootstrap_Test_image/logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="MyNav">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index_auth.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../phone_auth.html"> Phone </a></li>
                            <li><a href="../tablet_auth.html"> Tablet </a></li>
                            <li><a href="../airpod_auth.html"> Airpod </a></li>
                            <li><a href="../accessary_auth.html"> Accessary </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Event & Community <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4"><a href="https://www.instagram.com/" target="_blank"><img src="../Bootstrap_Test_image/insta.png" class="img-rounded" alt="Error"></a></div>
                                    <div class="col-sm-4"><a href="https://www.facebook.com/" target="_blank"><img src="../Bootstrap_Test_image/facebook.png" class="img-rounded" alt="Error"></a></div>
                                    <div class="col-sm-4"><a href="https://twitter.com/" target="_blank"><img src="../Bootstrap_Test_image/twitter.png" class="img-rounded" alt="Error"></a></div>
                                    </div>
                                
                                <a href="../php/board.php" ><img src="../Bootstrap_Test_image/board.png" class="img-rounded" alt="Error"></a>
                                <a href="../mother_auth.html"><img src="../Bootstrap_Test_image/event.jpg" class="img-rounded" alt="Error"></a>
                                <div class="carousel-caption">

                                </div>

                        </ul>
                    </li><li class="dropdown">
                        <a class="narbar-brand" href="../support_auth.html"> Support </span></a>
                       
                    </li>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./php/logout.php"><span class="glyphicon glyphicon-log-out"></span>  LOGOUT</a></li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
    </div><br>

    <!-- Carousel Container --> 
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
                <div class="item">
                    <img src="../Bootstrap_Test_image/main1.jpg" alt="Laptop_1">
                    <div class="carousel-caption">
                        <h3><strong>Make your life Easy</strong></h3>
                        <h4>Accessary Shopping</h4>
                    </div>
                </div>
    
                <div class="item active">
                    <img src="../Bootstrap_Test_image/main2.jpg" alt="Laptop_2">
                    <div class="carousel-caption">
                        <h3><strong>5% Discount until May 8</strong></h3>
                        <h4> Discount Code : MOTHERSDAY5OFF </h4>
                    </div>
                </div>
    
                <div class="item">
                    <img src="../Bootstrap_Test_image/main3.png" alt="Laptop_3">
                    <div class="carousel-caption">
                        <h3><strong>New Table Coming Soon</strong></h3>
                        <h4>July 10</h4>
                    </div>
                </div>
            </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span> 
        </a>
    </div>
    </div>
    <br><br>

    <!-- Board_Read -->
    <?php
        require_once("./db_con.php");
        $page = $_GET["page"];
        $Board_content_sql = "SELECT * FROM board WHERE No='$page'";
        $result = $conn->query($Board_content_sql);
        $board_data = $result->fetch_assoc();
    ?>

    <div class="container">
        <h1>Board READ</h1><br>
        <blockquote>
        <div class="row">
            <div class="col-sm-4" style="font-size:13pt;">User Name : <code style="font-family: 'Nanum Gothic', sans-serif;"><?php echo $board_data['Userid'];?></code></div>
        </div>
        </blockquote>

        <blockquote>
        <div class="row">
            <div class="col-sm-12">
            <p style="font-size:13pt;">[ Title ] : <code style="font-family: 'Nanum Gothic', sans-serif;"><?php echo $board_data['Title'];?></code></p><br>
            <pre style="font-family: 'Nanum Gothic', sans-serif; font-size:13pt; line-height:200%; background-color:white;"><?php echo $board_data['Content']; ?></pre><br>
            Date Created :  <code style="font-family: 'Nanum Gothic', sans-serif;"><?php echo $board_data['Date']; ?></code>
            </div>   
        </div>
        </blockquote>

        <blockquote>
        <a href="./user_check_mod.php?page=<?php echo $page;?>" class="btn btn-info" role="button">Modified</a>
        <a href="./user_check_del.php?page=<?php echo $page;?>" class="btn btn-info" role="button">Delete</a>
        </blockquote>
    </div>
    <br><br><br>
    
    <!-- 고객센터 Container -->
    <div id="contact" class="container">
    <h3>QUESTION</h3><br>
    <div class="row">
  
    <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span> Seoul, KR</p>
        <p><span class="glyphicon glyphicon-phone"></span> Phone: +82 1544-0000</p>
        <p><span class="glyphicon glyphicon-envelope"></span> Email: cloud@cloud.com</p>
    </div>

    <div class="col-md-8">
        <div class="row">
        <form action="#" method="POST" name="service-form"> 
        <div class="col-sm-6 form-group">
            <input class="form-control" id="name" maxlength="10" placeholder="Name" type="text" required autocomplete="off">
        </div>
        <div class="col-sm-6 form-group">
            <input class="form-control" id="email" maxlength="40" placeholder="Email" type="email" required autocomplete="off">
        </div>
        </div>

        <textarea class="form-control" id="comments" maxlength="100" placeholder="Comment" rows="5" required autocomplete="off"></textarea>
        <br>
        <div class="row">
        <div class="col-md-12 form-group">
            <button class="btn pull-right btn-default" type="submit">SEND</button>
        </div>
        </div>
        </form>
    </div>
    </div>

    <!-- footer Container -->
    <footer class="container text-center">
        <p><span>Cloud System Test Site<br>Copyright &copy; BlaBla</span></p>
    </footer>

</body>
</html>
