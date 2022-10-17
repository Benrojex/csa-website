@extends('layouts.main')


@section('title',"Donate")

@section('contents')

@php 

$paystack= new Paystack();
$product = new stdClass();
$product->amount = 5000;

$order =  new stdClass();
$order->id = 0002467;

if(session('msg') !==null){
	dd("Error");
}
@endphp


<section class="container">
	<h3>Payment for Congregation Secretary's Assistant Plus.</h2>

			<div class="col-md-2"></div>
			<div class="col-md-8">

				<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
					<fieldset>
						<legend>Fill your details</legend>
						<div class="row" style="margin-bottom:40px;">
							<div class="col-md-8 col-md-offset-2">
								<p class="form-group">
									<span style="display:block;">
									 <label>Amount	: ₦ {{$product->amount}} </label>
									</span>
								</p>
								<div class="form-group">
									<label for="firstname">Firstname</label>
									<input type="text" name="firstname" id="firstname" class="form-control" />
									<br>
									<label for="firstname">Lastname</label>
									<input type="text" name="lastname" id="lastname" class="form-control" />
									<br>
									<label for="phone">Phone No</label>
									<input type="text" name="phone" class="form-control" id="phone">
									<br>
									<label for="email">Email</label>
									<input class="form-control" type="email" name="email" id="email" />

									<input type="hidden" name="orderID" value= "{{$order->id}}">
									<input type="hidden" name="amount" value='{{($product->amount) * 100}}'> {{-- required in kobo --}}
									<input type="hidden" name="quantity" value="1">
									<input type="hidden" name="currency" value="NGN">
									<input type="hidden" name="description" value="CSA-Plus">
									{{--<input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > -- For other necessary things you want to add to your payload. it is optional though --}}
									<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}



									<input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

								</div>

								<p>
									<button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
										<i class="fa fa-plus-circle fa-lg"></i> Proceed to Payment
									</button>
								</p>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="col-md-2"></div>
		

	</section>
	@endsection

	@section('pagejs')

	<script>
		

	</script>
	@endsection