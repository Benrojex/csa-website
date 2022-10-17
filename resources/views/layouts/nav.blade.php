    
    <nav>
        <div class="container-fluid"  style="background-color:white; padding-right: 0px; box-shadow: lightgray 0px 1px 10px -1px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{route('index')}}" style="color: rgba(100, 99, 181, 0.7);"> <em>C S A  Home </em></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse nav navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li id="about">
                        <a class="page-scroll" href="{{route('about')}}">About</a>
                    </li>
                    
                    {{-- <li id="screen-shots">
                                <a class="page-scroll" href="{{route('screenshots')}}">Screenshots</a>
                    </li> --}}
                    <li id="download">
                        <a class="page-scroll" href="{{route('download')}}">Download</a>
                    </li>
                    <li id="contact">
                        <a class="page-scroll" href="{{route('contact')}}">Contact</a>
                    </li>
                    <!--
                    <li id="contact">
                        <a class="page-scroll" target="_blank" href="https://paystack.com/pay/csa-support">Donate</a>
                    </li> 
                    --->
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>