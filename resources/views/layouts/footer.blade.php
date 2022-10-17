

<section class="no-padding footer-v8" id="csa-footer">
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">

			</div>
			<div class="col-md-8">
				<h4>© {{date('Y')}}  Rojex Technology</h4>
			</div>

@if(auth()->check())
			<div class="col-md-2">
				<form id="logout-form" action="{{route('logout')}}" method="post">
					@csrf
				</form>
				<h5><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>Logout</a></h5>

			</div>
@endif


		</div>


	</div>
</section>


