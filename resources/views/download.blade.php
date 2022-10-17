@extends('layouts.main')

@section('pagetags')


<meta name="description" content="Download CSA, Congregation Secretary's Assistant download." />
@endsection

@section('title', "Download Congregation Secretary's Assistant")
@section('contents')


<section  id="content-wrapper">
    <!-------
    <aside id="support-link">
        <h5>Lend support</h5>
    </aside>
    -------->
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3 id="ready"></h3>
                
                <p>
                    By downloading this software, you agree that you understand the meaning of the terms in the few lines oulined below. 
                </p>
                <p>
                    <ul>
                        <li>
                            This website does not belong to  the <em><strong>organization</strong>*</em> or any of its legal/corporate entities.
                        </li>
                        <li>
                            The software provided here, CSA or any other is neither from the organization or any of its legal/corporate entities.
                        </li>
                        <li>
                            There is no claim here that the organization recommended/endorsed the use of any software provided here.
                        </li>
                    </ul>
                </p>


                <h3>Futher information</h3>
                
                <p>
                    <ul>
                        <li>
                            C S A is free and will continue to be free.
                        </li>
                        <li>
                            We are collecting users information to ensure its downloaded by only humans who will benefit from its use. We do not share the information you provide here with any third party.
                        </li>

                    </ul>
                </p>
                <p>
                    While CSA is completely free as mentioned earlier, if you would like to use <span class="primary"> CSA Plus </span> - which has much more features, you are required to pay just a yearly token of &#8358;5000. This is used to offset the costs incured on the resources needed for CSA Plus to keep providing services to you.
                </p>
                
                

                @if(session()->has('url') &&\Carbon\Carbon::now()->getTimestamp() < session('expireTime') || auth()->check())

                    @if(auth()->check())
                    <center>
                        <a class="btn btn-xlarge btn-primary" href="{{route('download1')}}" target="_blank" onclick="showMessage()"> <i class="fa fa-download"></i>Download</a>
                    </center>
                    @else
                    <center>
                        <a class="btn btn-xlarge btn-primary" href="{{session('url')}}" target="_blank" onclick="showMessage()"><i class="fa fa-download"></i> Download Free</a>
                    </center>
                    @endif

                @endif


                <center  id="message" style="display: none">
                    <p>
                       Thank you for downloading Congregation Secretary's Assistant. <br>
                       At any time you can download and install CSA Plus for more fetures that will make your work much more easier and support the work done in bringing this to you. 
                   </p>
               </center>

           </div>




       </div>

       @if(!session()->has('url') || \Carbon\Carbon::now()->getTimestamp() > session('expireTime') && !auth()->check())
               <div class="container">
                <div class="col-md-1"></div>
                <div class="col-md-8">

                    @if(!auth()->check())
                    <p>To download CSA Plus, click                           
                        <span><strong><a class="btn" id="btn-plus" href="{{ route('downloadPlus')}}">CSA Plus </a></strong></span>
                    </p>
                    <p>
                        Or click <span><strong><a class="btn" id="btn-free" onclick="javascript:void(0);">CSA</a></strong></span>to fill a form for free download.
                    </p>
                    @endif


                    {{-- <form action="{{route('app.user.register')}}" method="get" class="form-horizontal"> --}}
                    <form action="{{route('email.validate')}}" method="post" class="form-horizontal" id="free-form">
                        
                        <fieldset>
                            <legend>Fill the form to download free</legend>
                            @csrf

                            @if(!auth()->check())
                            <div class="row">
                              <div class="col-md-5"> 

                               <div class="form-group">
                                <label for="name"> Name * </label>
                                <input type="text" name="fname" class="form-control" value=" {{old('fname')}} " required="" />
                                <strong class="error">{{$errors->first('fname')}}</strong>

                            </div>

                            <div class="form-group">
                                <label for="surname"> Surname * </label>
                                <input type="text" name="surname" class="form-control" value=" {{ old('surname') }} " required="">
                                <strong class="error">{{$errors->first('surname')}}</strong>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="email">Email * </label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required="">
                                <strong class="error">{{$errors->first('email')}}</strong>

                            </div>
                            <div class="form-group">
                                <label for="phone">Phone </label>
                                <input type="text" name="phone" class="form-control" value="{{old('phone')}}" required="" maxlength="12">
                                <strong class="error">{{$errors->first('phone')}}</strong>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="ch" class="checkbox" style="margin-left: 30px;">
                                    <input id="ch" type="checkbox" name="agree" onclick="acceptDisc('ch','act');" data-toggle="mForm" style="float: left;"> I understand and agree</label>
                                    <small style="color: red;">{{$errors->first('agree')}}</small>
                                </div>
                            </div>      

                        </div>
                        <div class="form-group">
                            <div class="form-action">
                                <button id="act" class="btn btn-primary btn-xl sr-button">Submit</button>
                            </div>
                        </div>

                        @endif
                    </fieldset>
                </form>
            </div>
        </div>
      @endif
   </div>
</section>

@endsection

@section('pagejs')
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav li').removeClass('active');
        $('#download').addClass('active');

    });

    let ff = document.getElementById("free-form");
    ff.style.display = "none";
    let btnFree = document.querySelector('#btn-free');

    btnFree.addEventListener('click', function(){
       if(ff.style.display=="none"){
        ff.style.display = "block";
        }else if(ff.style.display=="block"){
        ff.style.display = "none"; 
        }    
    });
</script>
@endsection
