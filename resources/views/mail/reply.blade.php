<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CSA - app for recording congregation reports from S-4. Making report handling easier than ever for a Secretary">

    <meta name="author" content="Rojex Technology Nigeria">

    <meta name="description" content="Congregation Secretary's Assistant - app for recording congregation reports from S-4. Making report handling easier than ever for a Secretary">

    <title>About C S A | Rojex Technology</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">


    ul > li.active{
        font-size: bolder;
    }

    html,
    body {
      height: 100%;
      width: 100%;
  }
  body {
      font-family: 'Merriweather', 'Helvetica Neue', Arial, sans-serif;
  }
  hr {
      border-color: #F05F40;
      border-width: 3px;
      max-width: 50px;
  }
  hr.light {
      border-color: white;
  }
  a {
      -webkit-transition: all 0.35s;
      -moz-transition: all 0.35s;
      transition: all 0.35s;
      color: #F05F40;
  }
  a:hover,
  a:focus {
      color: #eb3812;
  }
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
      font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  }
  p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
  }
  .bg-primary {
      background-color: #F05F40;
  }
  .bg-dark {
      background-color: #222222;
      color: white;
  }
  .text-faded {
      color: rgba(255, 255, 255, 0.7);
  }
  section {
      padding: 100px 0;
  }
  aside {
      padding: 50px 0;
  }
  .no-padding {
      padding: 0;
  }
  .navbar-default {
      background-color: white;
      border-color: rgba(34, 34, 34, 0.05);
      font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
      -webkit-transition: all 0.35s;
      -moz-transition: all 0.35s;
      transition: all 0.35s;
  }
  .navbar-default .navbar-header .navbar-brand {
      color: #F05F40;
      font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
      font-weight: 700;
      text-transform: uppercase;
  }
  .navbar-default .navbar-header .navbar-brand:hover,
  .navbar-default .navbar-header .navbar-brand:focus {
      color: #eb3812;
  }
  .navbar-default .navbar-header .navbar-toggle {
      font-weight: 700;
      font-size: 12px;
      color: #222222;
      text-transform: uppercase;
  }
  .navbar-default .nav > li > a,
  .navbar-default .nav > li > a:focus {
      text-transform: uppercase;
      font-weight: 700;
      font-size: 13px;
      color: #222222;
  }
  .navbar-default .nav > li > a:hover,
  .navbar-default .nav > li > a:focus:hover {
      color: #F05F40;
  }
  .navbar-default .nav > li.active > a,
  .navbar-default .nav > li.active > a:focus {
      color: #F05F40 !important;
      background-color: transparent;
  }
  .navbar-default .nav > li.active > a:hover,
  .navbar-default .nav > li.active > a:focus:hover {
      background-color: transparent;
  }
  @media (min-width: 768px) {
      .navbar-default {
        background-color: transparent;
        border-color: rgba(255, 255, 255, 0.3);
    }
    .navbar-default .navbar-header .navbar-brand {
        color: rgba(255, 255, 255, 0.7);
    }
    .navbar-default .navbar-header .navbar-brand:hover,
    .navbar-default .navbar-header .navbar-brand:focus {
        color: white;
    }
    .navbar-default .nav > li > a,
    .navbar-default .nav > li > a:focus {
        color: rgba(255, 255, 255, 0.7);
    }
    .navbar-default .nav > li > a:hover,
    .navbar-default .nav > li > a:focus:hover {
        color: white;
    }
    .navbar-default.affix {
        background-color: white;
        border-color: rgba(34, 34, 34, 0.05);
    }
    .navbar-default.affix .navbar-header .navbar-brand {
        color: #F05F40;
        font-size: 14px;
    }
    .navbar-default.affix .navbar-header .navbar-brand:hover,
    .navbar-default.affix .navbar-header .navbar-brand:focus {
        color: #eb3812;
    }
    .navbar-default.affix .nav > li > a,
    .navbar-default.affix .nav > li > a:focus {
        color: #222222;
    }
    .navbar-default.affix .nav > li > a:hover,
    .navbar-default.affix .nav > li > a:focus:hover {
        color: #F05F40;
    }
}
header {
  position: relative;
  width: 100%;
  /*min-height: auto;*/
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
  background-position: center;
  background-image: none;/*url('../img/main_ui.jpg');*/
  text-align: center;
  color: white;
}
header .header-content {
  position: relative;
  text-align: center;
  padding: 0px 10px 10px;
  width: 100%;
}
header .header-content .header-content-inner h1 {
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 0;
  margin-bottom: 0;
  font-size: 30px;
}
header .header-content .header-content-inner hr {
  margin: 30px auto;
}
header .header-content .header-content-inner p {
  font-weight: 300;
  color: rgba(255, 255, 255, 0.7);
  font-size: 16px;
  margin-bottom: 50px;
}
@media (min-width: 768px) {
  header {
    min-height: 50%;
}
header .header-content {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 0 50px;
}
header .header-content .header-content-inner {
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
}
header .header-content .header-content-inner h1 {
    font-size: 50px;
}
header .header-content .header-content-inner p {
    font-size: 18px;
    max-width: 80%;
    margin-left: auto;
    margin-right: auto;
}
}
.section-heading {
  margin-top: 0;
}
.service-box {
  max-width: 400px;
  margin: 50px auto 0;
}
@media (min-width: 992px) {
  .service-box {
    margin: 20px auto 0;
}
}
.service-box p {
  margin-bottom: 0;
}
.portfolio-box {
  position: relative;
  display: block;
  max-width: 650px;
  margin: 0 auto;
}
.portfolio-box .portfolio-box-caption {
  color: white;
  opacity: 0;
  display: block;
  background: rgba(240, 95, 64, 0.9);
  position: absolute;
  bottom: 0;
  text-align: center;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
}
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content {
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category,
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name {
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  padding: 0 15px;
}
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category {
  text-transform: uppercase;
  font-weight: 600;
  font-size: 14px;
}
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name {
  font-size: 18px;
}
.portfolio-box:hover .portfolio-box-caption {
  opacity: 2;
}
.portfolio-box:focus {
  outline: none;
}
@media (min-width: 768px) {
  .portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-category {
    font-size: 16px;
}
.portfolio-box .portfolio-box-caption .portfolio-box-caption-content .project-name {
    font-size: 22px;
}
}
.call-to-action h2 {
  margin: 0 auto 20px;
}
.text-primary {
  color: #F05F40;
}
.no-gutter > [class*='col-'] {
  padding-right: 0;
  padding-left: 0;
}
.btn-default {
  color: #222222;
  background-color: white;
  border-color: white;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
}
.btn-default:hover,
.btn-default:focus,
.btn-default.focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #222222;
  background-color: #f2f2f2;
  border-color: #ededed;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: white;
  border-color: white;
}
.btn-default .badge {
  color: white;
  background-color: #222222;
}
.btn-primary {
  color: white;
  background-color: #F05F40;
  border-color: #F05F40;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: white;
  background-color: #ee4b28;
  border-color: #ed431f;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #F05F40;
  border-color: #F05F40;
}
.btn-primary .badge {
  color: #F05F40;
  background-color: white;
}
.btn {
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  border: none;
  border-radius: 300px;
  font-weight: 700;
  text-transform: uppercase;
}
.btn-xl {
  padding: 15px 30px;
}
::-moz-selection {
  color: white;
  text-shadow: none;
  background: #222222;
}
::selection {
  color: white;
  text-shadow: none;
  background: #222222;
}
img::selection {
  color: white;
  background: transparent;
}
img::-moz-selection {
  color: white;
  background: transparent;
}
body {
  webkit-tap-highlight-color: #222222;
}

body{
  /*box-shadow: #FBFCFC 1px 1px 1px 1px;*/

  
  height: 100%
  min-height: 900px;
  background-color:white

}


p{
  font-family: "arial";
  font-size: 120%;
  color: darkgray;
}

li{
  color: darkgray;
}


header{
  background-image:url('{{asset('img/header.jpg')}}');
  background-repeat: no-repeat;
  min-height: 150px;
  height:300px;

  padding: 0px 0px 0px;
  width: 100%;
  text-align: center;
  /*box-shadow:blue 5px 2px 30px;*/
}


header .header-content {
  width: 100% !important;
  
  
}

nav {
  position: sticky;
  position: -webkit-sticky;
  top: 0; /* required */
  /*background-color:rgba(100, 99, 181, 0.7);*/
  background-color: white;
  height: 50px;
  /*box-shadow: lightgray 0px 0px 20px;*/
  border: none;
  border-bottom: 1px gray;
  z-index: 100;

}

section {
  padding: 90px 0;
}



@media (min-width: 768px) {
  header {
    min-height: 50%;
}

header .header-content {
    position: absolute;
    top: 40%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 0 50px;
}

nav{
    background-color: white;
}

}

@media (max-width: 768px) {
  header {
    min-height: 50%;
}

header .header-content {
    position: absolute;
    top: 40%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 0 50px;
}



}


a {  
  color: blue;
}

footer{
  position: absolute;
  height:50px;
  margin-bottom: -5px;
  bottom: 0 !important;
}

.page-wrapper{
  box-shadow: 0px -2px 20px 10px #EAEDED;
}



#content-wrapper{

  margin-top: -5px;
  
  border:none;
  
  /*border-radius: 0px 0px 10px 10px;*/

}

#screens > div{
  padding: 3px;

}

#screens > div > a > img{ 
  border-radius: 3px;  
}

#download-count{
  position:fixed;
  right: 0px;  
  top:2;
  z-index: 5;
  width: auto;
  height: auto;
  padding: 3px;
  background-color: gray;
  -webkit-transform:rotate(270deg);
  opacity: 0.3;
  border-radius: 7px 7px 0px 0px;  
}


#download-count > div >span{
  color: white; 
}



#csa-footer{
    /*min-height: 100px;*/
    /*background-color: #778899;*/
    background-color:rgba(100, 99, 181, 0.7);
    /*box-shadow:blue 5px 2px 20px;*/
    margin-top:10px;
    border:none;
    color:white;
    padding-right:2em;
    padding-bottom: 2em;
    padding-top: 2em;
}


.navbar .navbar-inverse{
  background-color:rgba(100, 99, 181, 0.3);
  width: 100%;
}

.affix {
    top:0;
    width: 100%;
    z-index: 9999 !important;
}

.affix-top {
    top:0;
    width: 100%;
    z-index: 9999 !important;
    position: absolute !important;
}
.navbar {
    margin-bottom: 0px;
}

.affix .container-fluid {
 position: relative;
 top: 0;
}


.active{
 background-color:rgba(100, 99, 181, 0.3);
}

.nav > .active > a{
  color: white;
  border-radius: 5px;

}
.btn-primary {
  color: white;
  /*background-color: #F05F40;*/
  background-color: rgba(100, 99, 181, 0.7);
  border-color: #F05F40;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
  border-radius: 5px;
}

.btn-primary:hover{
    background-color: rgba(250, 120,181, 0.4);
}

.row >.form-group{
  margin-left: 3px;
}

.spaced-par{
    text-align: justify;
    line-height: 150%;
}

.portfolio-box-caption-content {
    width:30%;
}

.portfolio-box:hover .portfolio-box-caption {

    background-color: rgba(100, 99, 181, 0.7);
    opacity:1;
}

.img-responsive{
    width:100%;
    height: 100%;
    border-radius: 2px;
}

.padded{
    padding: 5px;   
}

.curved{
    border-radius: 5px;
}


nav{
    background-color: white;
}

</style>

</head>

<body>
    <main class="container page-wrapper fullscreen-container">

        <header class="container-fluid">
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">Congregation Secretary's Assistant</h1>

                    <p style="color:blue;">Designed to help...</p>

                    <!--a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a-->
                </div>
                <br>
            </div>
        </header>


        
        
        
        <section id="content-wrapper">
            <div class="container-fluid">
                <!--div class="row"-->

                <div class="col-md-12">
                    <h2 class="section-heading">Re: {{$data['subject']}}</h2>
                    <hr class="light">
                    <p class="spaced-par">{{$data['info']}}</p>
                    <center>
                        <a href="">Take a look at some UI</a>
                    </center>
                    
                </div>
                <div class="col-sm-1"></div>
                <!--/div-->
            </div>
        </section>


        



    </main>

    <section class="no-padding footer-v8" id="csa-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">

                </div>
                
                
            </div>
            

        </div>
    </section>

    

    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript">
        function acceptDisc(acceptCheck,btnDownload)
        {   
            var check=document.getElementById(acceptCheck).checked;
            if(check==true){
                document.getElementById(btnDownload).disabled=false;
                document.getElementById(btnDownload).style.backgroundColor = "skyblue";
                document.getElementById("mForm").style.display= "inline";

            }else{
        //document.getElementById(btnDownload).disabled=true;
        document.getElementById(btnDownload).style.backgroundColor = "red";
        //document.getElementById("mForm").style.display = "none";
    }
}

function showMessage(){
    document.getElementById("message").style.display= "inline";
}
</script>



</body></html>