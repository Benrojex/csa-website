<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141616695-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141616695-2');
</script>

<link rel="shortcut icon" href="{{asset('img/csa.png')}}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   {{--  <meta name="description" content="Congregation Secretary's Assistant - App used by Congregation Secretary of Jehovahs's Witneses to record congregation reports from S-4. Making report handling easier than ever for a Secretary"> --}}
   <meta name="keyword" content="Congregation Secretary, Field Service Report, S-4,recording reports">
    <meta name="author" content="Rojex Technology Nigeria">

    @yield('pagetags',"")

    <title>@yield('title', ' ') | Congregation Secretary's Assistant</title>

    <!-- Bootstrap Core CSS -->
    <!--link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='preload' as='style'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='preload' as='style'>

    <!-- Plugin CSS -->
    <link href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset('css/creative.css')}}" rel="stylesheet">
    <!--link href="{{asset('css/toastr.min.css')}}" rel="preload"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.css" integrity="sha256-R91pD48xW+oHbpJYGn5xR0Q7tMhH4xOrWn1QqMRINtA=" crossorigin="anonymous" />

<link href="{{asset('vendor/css/headers/header-v8.css')}}" rel="stylesheet">
<link href="{{asset('vendor/css/footers/footer-v8.css')}}" rel="stylesheet">

    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">





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
      hr{
        max-width: 100%;
        width: 100%;
      }

  </style>

</head>
 
<body>
    <main class="container page-wrapper">
   
        @include('layouts.header')

        @include('layouts.nav')
        
        
        
        
        @yield('contents')

        @include('layouts.footer')

       <!-- 
       <aside id="support-link">
           <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <h5>Lend support</h5>
                </div>
            </div>
           </div>
       </aside>

       ---->
    </main>
    

    
    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>


   

    <script src="{{asset('js/custom.js')}}"></script>

@yield('pagejs')
    <!-- Theme JavaScript -->
    <script src="{{asset('js/creative.js')}}"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options.progressBar = true;
        toastr.options.escapeHtml = false;
        toastr.options.extendedTimeOut = 6000;
        toastr.options.hideEasing = 'swing';
        toastr.options.showMethod = 'slideDown';
        toastr.options.closeButton = true;
    </script>
    @if(session("success"))
        <script type="text/javascript">
         toastr.success("{!! session("success") !!}",'Success');
        </script>

    @elseif(session("warning"))
        <script type="text/javascript">
          toastr.warning("{!! session("warning") !!}",'Warning!',{timeOut:50000});
        </script>

    @elseif(session("info"))
        <script type="text/javascript">
         toastr.info("{{ session("info") }}",'Info');
        </script>
  
    @elseif(session("error"))
        <script type="text/javascript">
         toastr.error("{{ session("error") }}",'Error',{timeOut:50000});
        </script>
        
    @endif

</body>

</html>
