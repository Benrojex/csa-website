

  @extends('layouts.main')

  @section('pagetags')
    <meta name="description" content="Ways to contact Rojex Technology Nigeria on Congregation Secretary's Assistant - CSA matters.">
   
    <meta name="author" content="Rojex Technology Nigeria">
  @endsection

@section('title', "Contact Rojex Technology Nigeria")

  @section('contents')
  <section id="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-11  text-justified">
                    <h2 class="section-heading">Let's keep in touch!</h2>
                    
                    <p>
                        Your feedback and suggestions on ways the program can be improved is very precious to us. Feel free to contact us using any of the means below.
                        
                        Your criticism is just invaluable when constructive!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-offset-1 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>{{config('app.phone')}}</p>
                </div>
                <div class="col-sm-3 col-lg-offset-1 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p>{{config('app.email')}}</p>
                </div>

                <div class="col-sm-3 col-lg-offset-1 text-center">
                    <i class="fa fa-envelope fa-3x sr-contact"></i>
                    <p><a href="{{route('support.feedback.form')}}">Feedback form</a></p>
                </div>
            </div>
           
            <hr>

            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8" style="padding: 2em; text-align: center;">
                    <i class="fa fa-home fa-3x sr-contact"></i></span><br><span> <em>Block C5 Suite 6, Commerce Plaza, Area 1 Durumi District, Abuja.</em></span>
                </div>
                <div class="col-md-2"></div>
            </div>
            {{-- <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div id="googleMap" style="width:100%;height:200px;"></div>
                </div>

            </div> --}}
            
        </div>
</section>

@endsection

@section('pagejs')
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.nav li').removeClass('active');

        $('#contact').addClass('active');
    });
</script>
@endsection

@section('pagetags')
        <meta name="description" content="Contacting Rojex Technology on Congregation Secretary's Assistant matters.">
@endsection