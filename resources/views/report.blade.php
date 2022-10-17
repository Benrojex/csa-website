@extends('layouts.main')

@section('pagetags')
<meta name="description" content="Congregation Secretary's Assistant is designed to help record reports from s-4, Sum reports, generate s-21">
@endsection

@section('title', "Give us your feedback")
@section('contents')
<section id="content-wrapper" >
    <div class="container">         

     <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <form action="{{route('feedback')}}" method="post">
                <fieldset>
                    <legend>Fill the form</legend>
                   
                         <div class="form-group">
                            <label for="fname"> Name * </label>
                            <input id="fname" type="text" name="fname" class="form-control" value="{{old('fname')}}" required="" placeholder="Your full name" />
                            <strong class="error">{{$errors->first('fname')}}</strong>

                        </div>                 
                   
                        <div class="form-group">
                            <label for="email">Email * </label>
                            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required="" placeholder="valid email address">
                            <strong class="error">{{$errors->first('email')}}</strong>

                        </div>
                        <div class="form-group">
                            <label for="Information">Information * </label>
                            <textarea id="Information" class="form-control" name="information" rows="5" placeholder="Sufficient information that will hel us understand you."></textarea>
                            <strong class="error">{{$errors->first('information')}}</strong>

                        </div>
                   
                
                
                <div class="form-group">
                        <div class="form-action">
                            <button id="act" class="btn btn-primary btn-xl sr-button">Submit</button>
                        </div>
                </div>



                  
                </fieldset>
                 @csrf
            </form>
        </div>
    </div>
   
    
</div>
</section>

@endsection

@section('pagejs')
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav li').removeClass('active');

        $('#download').addClass('active');
    });
</script>
@endsection
