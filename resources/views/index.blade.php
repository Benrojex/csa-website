  @extends('layouts.main')

  @section('contents')
  <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>
                        Your feedback and suggestions on ways the program can be improved is very precious to me. Feel free to contact me using any of the means below.
                    </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+234-803-6928-135</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:{{env('E_MAIL')}}">{{env('E_MAIL')}}</a></p>
                </div>
            </div>
        </div>
</section>

@endsection