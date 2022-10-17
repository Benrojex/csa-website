@php //dd(session()->all()); @endphp
@extends('layouts.main')

@section('title',"Some sample Screens of Congregation Secretary's Assistant")

@section('contents')

<section class="no-padding" id="content-wrapper">
        <div class="container-fluid">
        	<div class="row">
        		<center>
        			<h3>Screen shots</h3>
        		</center>
        	</div>
            <div class="row no-gutter popup-gallery" id="screens">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/frm_new.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/frm_new.png')}}" class="img-responsive" alt="frm_new_publisher" title="New Publisher's form">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Form New
                                </div>
                                <div class="project-name">
                                    Registers a new publisher
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/frm_s4.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/frm_s4.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Form S - 4
                                </div>
                                <div class="project-name">
                                    Takes reports from S-4
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/frm_send.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/frm_send.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Form Send
                                </div>
                                <div class="project-name">
                                    Sums reports between two dates
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/frm_not_reported.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/frm_not_reported.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Not reported
                                </div>
                                <div class="project-name">
                                    Displays publishers owing report for selected month
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/publist.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/publist.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Publishers List
                                </div>
                                <div class="project-name">
                                    Displays list of publishers registered in the app
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{asset('img/portfolio/thumbnails/correct_report.png')}}" class="portfolio-box">
                        <img src="{{asset('img/portfolio/thumbnails/correct_report.png')}}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Form Edit
                                </div>
                                <div class="project-name">
                                    Displays report for selected publisher in a selected month for editing
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                &nbsp;
            </div>
        </div>
    </section>

@endsection

@section('pagejs')
<script type="text/javascript">
    $(document).ready(function(){
        $('.nav li').removeClass('active');

        $('#screen-shots').addClass('active');
    });
</script>
@endsection

