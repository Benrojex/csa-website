<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Download App  Congregtion Secretary's Assistant </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="http://localhost:8001/css/creative.css" rel="stylesheet">
    <link href="http://localhost:8001/css/toastr.min.css" rel="stylesheet">
    <link href="http://localhost:8001/css/custom.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <nav id="mainNav" class="nav navbar-primary navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://localhost:8001">C S A </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="http://localhost:8001/about">About</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="http://localhost:8001/screenshots">Screenshots</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost:8001/download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost:8001/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="mhead">
        <div class="header-content">
            <div class="header-content-inner">
                <h2 id="homeHeading">Congregation Secretary's Assistant</h2>
                <hr>
                <p style="color:blue;">Designed to help...</p>

                <!--a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a-->
            </div>
            
        </div>
    </header>

    <div class="container">

       

            <h3>Disclaimer </h3>

            <p>
                By downloading this software, you agree that you understand the meaning of the terms of this disclaimer as oulined in the following lines. 
            </p>

            <ul>
                <li>
                    This website does not belong to and is never affilliated with the 'organization' or any of its legal/corporate entities.
                </li>
                <li>
                    The software provided here, CSA or any other is neither from the organization or any of its legal/corporate entities.
                </li>
                <li>
                    The organization did not recommend or approve the use of any software provided here.
                </li>
            </ul>





            <h3>Futher information</h3>

            <ul>
                <li>
                    C S A is free and will continue to be free.
                </li>
                <li>
                    We are collecting users information to ensure its downloaded by only humans who will benefit from its use. We do not share the information you provide here with any third party.
                </li>

            </ul>



                <form action="http://localhost:8001/register/app-user" method="get" class="form-horizontal">


                    <div class="form-check">

                        <input id="ch" type="checkbox" name="agree" onclick="acceptDisc('ch','act');" class="form-check-input" >
                        <label class="form-check-label" for="ch">I understand and agree</label>

                    </div>



                    <div class="form-group">
                        <label for="name"> Name * </label>
                        <input type="text" name="name" class="form-control" value="" required="">
                        <strong class="error"></strong>

                    </div>

                    <div class="form-group">
                        <label for="surname"> Surname * </label>
                        <input type="text" name="surname" class="form-control" value="" required="">
                        <strong class="error"></strong>

                    </div>
                    <div class="form-group">
                        <label for="email">Email * </label>
                        <input type="email" name="email" class="form-control" value="" required="">
                        <strong class="error"></strong>

                    </div>
                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="text" name="phone" class="form-control" value="" required="">
                        <strong class="error"></strong>

                    </div>
                    <div class="tooltip">Why fill form?
                        <span class="tooltiptext">This software is absolutely free, and will continue to be free.
                        However, its use should never be abused. Thus, we intend to ensure that only humans - not bots should download and use it.</span>
                    </div>
                    <div class="form-actions">
                        <button id="act" class="btn btn-primary btn-xl sr-button">Submit</button>
                    </div>
                </form>

    </div>

        









        <div id="csa-footer">
            <div class="container-fluid">
                <div class="row">
                    
                    <span style="float:right;">Approximate Downloads:39</span>
                </div>

            </div>
        </div>

    




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://localhost:8001/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>



    <script src="http://localhost:8001/js/custom.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <script src="http://localhost:8001/js/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options.progressBar = true;
        toastr.options.escapeHtml = false;
        toastr.options.extendedTimeOut = 6000;
        toastr.options.hideEasing = 'swing';
        toastr.options.showMethod = 'slideDown';
        toastr.options.closeButton = true;
    </script>



</body>

</html>
