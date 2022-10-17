
@php


//dd($exception->getMessage());

@endphp
@extends('layouts.main')



@section('title',"Link Expired")

@section('contents')

<section  id="content-wrapper">
        <div class="container">
            <!--div class="row"-->
                
                <div class="col-sm-10 col-lg-offset-2">
                    <h2 class="section-heading">Page Expired</h2>
                    <hr class="light">
                    
                    <center>
                        {!!$exception->getMessage()!!}
                    </center>
                    
                </div>
                <div class="col-sm-1"></div>
            <!--/div-->
        </div>
    </section>

@endsection

@section('pagejs')
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav li').removeClass('active');

        //$('#about').addClass('active');
    });
</script>
@endsection