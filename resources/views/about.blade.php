@php

use Illuminate\Support\Carbon;
//$now = Carbon::create('1011-11-01')->diffForHumans();
//dd($now);
@endphp
@extends('layouts.main')

@section('pagetags')
    <meta name="description" content="Congregation's Secretary Assistant - CSA - is an app for the Secretary or the assistant of Congregation of Jehovah's Witnesses - to record reports from S-4. Making report handling easier than ever for a Secretary">
@endsection

@section('title', "About")

@section('contents')

<section  id="content-wrapper">
        <div class="container-fluid">
            <!--div class="row"-->
               
                <div class="col-md-12">
                    <h2 class="section-heading">For Windows&#174; PC</h2>
                   
                    <hr>
                <p class="spaced-par">
                    Handling reports can be a very daunting task, especially in a very large Congregation. This task that takes a whole chunk of your time every month can now be simplified with the use of Congregation Secretary's Assistant. With the use of this app, recording report has just become seamless, summing it - easier. Filling and Organizing electronic S-21 Forms monthly requires good organizational ability and some measure of IT knowledge. Here again comes another help on point. With a few clicks, S-21 Forms can be filled with the reports of two Service Years (current and last) for all publishers in just a moment.
                </p>
                <p> 
                    The electronic CPRs are also further arranged in folders according to groups, each group having a folder with the publishers' cards in it. Folder is also created for Regular Pioneers for easy access. Copies of sent CPRs can also be kept for references when needed.
                </p>

                <p>A help that can be lanched from the user interface has been written with novice in mind for a quick acquaintance with the use of the program.</p>

                    <center>
                        <a href="{{route('screenshots')}}" class="page-scroll btn btn-primary btn-xl sr-button">Some GUI</a>
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

        $('#about').addClass('active');
    });
</script>
@endsection

@section('pagetags')
        <meta name="description" content="Congregation Secretary's Assistant - app for recording congregation reports from S-4. Making report handling easier than ever for a Secretary">
@endsection

