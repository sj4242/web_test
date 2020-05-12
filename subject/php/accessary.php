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
        <nav class="navbar navbar-inverse">
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
                    <li><a href="./index_auth.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="phone.html"> Phone </a></li>
                            <li><a href="tablet.html"> Tablet </a></li>
                            <li><a href="airpod.html"> Airpod </a></li>
                            <li><a href="accessary.html"> Accessary </a></li>
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
                                
                                <a href="./board.php" ><img src="./Bootstrap_Test_image/board.png" class="img-rounded" alt="Error"></a>
                                <a href="./event.html"><img src="Bootstrap_test_image/event.jpg" class="img-rounded" alt="Error"></a>
                                <div class="carousel-caption">

                                </div>

                        </ul>
                    </li><li class="dropdown">
                        <a class="narbar-brand" href="./support.html"> Support </span></a>
                       
                    </li>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span>  LOGOUT</a></li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
    </div><br>




            <!-- Container 1 -->
            <div class="container">
            <h1></h1>
            <p class="text-center"><br><br><br><br><img src="./Bootstrap_Test_image/accessary_main.png" class="img-rounded" alt="Error"></p>
            <!-- src���� Image�� �����θ� ���� ���� ���� ��ο� �̹����� �����ϹǷ� ��λ��� -->
            <!-- alt������ Image�� �ε��� �� ���� ��Ȳ���� ǥ�� �� �޽��� ���� -->
            <br><br>
            </div>


    <!-- Catalog product-->
    <div id="STORE" class="container text-center" >
        <div class="col-sm-3"><a href="./phone.html" target="_blank"><img src="./Bootstrap_Test_image/option1.png" class="img-rounded" alt="Error"></a></div>
        <div class="col-sm-3"><a href="./tablet.html" target="_blank"><img src="./Bootstrap_Test_image/option2.png" class="img-rounded" alt="Error"></a></div>
        <div class="col-sm-3"><a href="./airpod.html" target="_blank"><img src="./Bootstrap_Test_image/option3.png" class="img-rounded" alt="Error"></a></div>
        <div class="col-sm-3"><a href="./accessary.html" target="_blank"><img src="./Bootstrap_Test_image/option4.png" class="img-rounded" alt="Error"></a></div>
    </body>


    <!-- Main Content (Collapse) product-->
    <div id="STORE" class="container text-center" >
        <h3></h3>
        <br>



        <div class="col-sm-4">
            <a href="#STORE2" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary2.png" alt="product2" width="200" height="250">
            </a>
            <br>
            <div id="STORE2" class="collapse collapse in">
                <h5 class="text-center"><strong>[ fineApple Case ]</strong></h5>
                <p>Price : ￦100,000</p>
                <p>6.1 / 6.5 / 7.1inch</p>
            </div>
        </div>
        <div class="col-sm-4">
            <a href="#STORE5" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary5.png" alt="product5" width="200" height="250">
            </a>
            <br>
            <div id="STORE5" class="collapse collapse in">
                <h5 class="text-center"><strong>[ Power ]</strong></h5>
                <p>Price : ￦30,000</p>
                <p>12w</p>
            </div>
        </div>
        
        <div class="col-sm-4">
            <a href="#STORE3" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary3.png" alt="product3" width="200" height="250">
            </a>
            <br>
            <div id="STORE3" class="collapse collapse in">
                <h5 class="text-center"><strong>[ Cable ]</strong></h5>
                <p>Price : ￦20,000</p>
                <p>1m</p>
            </div>
        </div>
        </div>
        <br><br>

        <div class="row">
        <div class="col-sm-4">
            <a href="#STORE4" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary4.png" alt="product4" width="200" height="250">
            </a>
            <br>
            <div id="STORE4" class="collapse collapse in">
                <h5 class="text-center"><strong>[ Charging Case ]</strong></h5>
                <p>Price : ￦30,000</p>
                <p>1000wh</p>
            </div>
        </div>
        <div class="col-sm-4">
            <a href="#STORE4" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary7.png" alt="product4" width="200" height="250">
            </a>
            <br>
            <div id="STORE4" class="collapse collapse in">
                <h5 class="text-center"><strong>[ Charging Case ]</strong></h5>
                <p>Price : ￦30,000</p>
                <p>1000wh</p>
            </div>
        </div>



        <div class="col-sm-4">
            <a href="#STORE6" data-toggle="collapse">
                <img src="Bootstrap_Test_image/accessary6.png" alt="product6" width="200" height="250">
            </a>
            <br>
            <div id="STORE6" class="collapse collapse in">
                <h5 class="text-center"><strong>[ Wireless charging  ]</strong></h5>
                <p>Price : ￦20,000</p>
                <p>5w</p>
            </div>
        </div>
        </div>
    </div>
    </div>
    <br><br><br>
    </body>



 <!-- �������� Container -->
 <div id="contact" class="container">
    <h3>QUESTION</h3><br>
    <div class="row">
  
    <div class="col-md-4">
        <p><span class="glyphicon glyphicon-map-marker"></span> Seoul, KR</p>
        <p><span class="glyphicon glyphicon-phone"></span> Phone: +82 1111-1111</p>
        <p><span class="glyphicon glyphicon-envelope"></span> Email: YSH@KMG.com</p>
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




    
    
 <!-- Down Manu -->
 
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">shop and learn</a></div>
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">Services</a></div>
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">Store</a></div>
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">For business</a></div>
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">Account</a></div>
 <div class="btn col-sm-4" ><a href="./homepage.html" target="_blank">About Us</a></div>
 <div class="btn list-group"></div>

<!-- footer Container -->
<footer class="container text-center">
    <p><span>More ways to shop: Find Our Store or other retailer near you. Or call 1111-1111. </span></p>
    <p><span>Cloud System Test Site<br>Copyright &copy; Shanghwancchang</span></p>
</footer>
</html>
