
@php


//dd($exception->getMessage());

@endphp
@extends('layouts.main')



@section('title',"Server Error")

@section('contents')

<section>
        <div class="container-fluid">
            <!--div class="row"-->
                
                <div class="col-sm-10" style="min-height: 200px;">
                    <h2 class="section-heading">501 | Server Error</h2>
                    <hr class="light">
                    
                    <center>
                        <h3>Not what you expected?</h3>
                        <p>There were error while processing your request. Please, try again after some few minutes!</p>
                        <p>Let me <a href="{{route('index')}}"> out  </a>of here then.</p> 
                        <p></p>
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