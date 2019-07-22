@extends('layouts_frontend._main_frontend')
@section('extra_style')
<style type="text/css">
.nulls
{
	margin-top: 50px;
}
.romps
{
	padding: 15px;
	background-color: #fff;
	box-shadow: 0 2px 6px 0 rgba(0,0,0,.2);
	border-radius: 4px;
	margin-bottom: 20px;
	display: flow-root;
}
.rinf
{
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px solid #eaeaea;
}

.roi
{
	padding: 10px 0 15px 0;
	display: flex;
}
.gab img
{
	width: 100%;
}
.sampah
{
	padding: 10px 0 20px 0;
	text-align: center;
}
.feature
{
	margin: 10px 0 15px 0;
}
.icco
{
	margin:10px 10px 0 0;
	padding: 7px;
	background-color: #eaeaea;
	border-radius: 15px;
	font-size: 15px;
	font-weight: 550;
}
.infor
{
	margin: 0 0 15px 0;
	padding: 5px 0;
	background-color: #eaeaea;
}
.prai
{
	padding-bottom: 5px;

}
.tal2
{
	padding: 5px;
	background-color: #eaeaea;
	border-radius: 5px;
	display: inline-block;
}
.balik
{
	margin-top: 15px;
	float: left;
	display: inline-table;
}
.proceds
{
	margin-top: 15px;
	float: right;
	display: inline-table;
}
.haa
{
	padding: 10px 35px;
}
.det
{
	margin: 30px 0;
	text-align: center;
}
.prosbut
{
	background: #5a2360;
	cursor: pointer;
	border: none;
	outline: none;
	padding: 7px 20px;
	border-radius: 15px;
}
.prosbut span
{
	display: inline-block;
	position: relative;
	font-size: 16px;
	font-weight: 500;
	color: #FFFFFF;
	line-height: 50px;
}
.prosbut:hover {
    background-color: #081124;
    color: #d6baa0;
}
.ndeks{
	display: flex;
	padding: 5px;
	font-size: smaller;
}
h5.ntitel{
	width: 100px;
	font-size: small;
	font-weight: 600;
}
h5.vals{
	font-family: inherit;
	font-weight: 400;
	font-size: small;
	padding-left: 10px;
}
.modal
{
	padding: 0;
}
.modal.show .modal-dialog
{
	-webkit-transform: translateY(35%);
	transform: translateY(35%);
}
</style>
@endsection
@section('content')
<div class="nulls"></div>
<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				<div class="romps">
					<form action="" id="wizard">
						<!-- SECTION 1 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Room & Price Summary</h4>
								</div>
								<div class="rinf">
									<span class="roi">Room Information</span>
									<div class="row">
										<div class="col-xs-12 col-sm-3">
											<div class="gab">
		                    		<img src="{{asset('assets_frontend/images/intro_1.jpg')}}">
											</div>
											<div class="sampah">
												<span class="fa fa-trash"> Remove</span>
											</div>
										</div>
										<div class="col-xs-12 col-sm-9">
											<div class="hott">
												<h5>Hotel California</h5>
											</div>
											<div class="lok">
												<span class="fa fa-map-marker"> Jl. Gatot Oioi, Kota Surabaya , 60118</span>
											</div>
											<div class="feature">
												<span class="icco fa fa-wifi"> Wifi</span>
				                              	<span class="icco fa fa-newspaper-o"> News Paper</span>
				                              	<span class="icco fa fa-bed"> Bed 2</span>
				                              	<span class="icco fa fa-television"> Television</span>
				                              	<span class="icco fa fa-bath"> Bath</span>
											</div>
											<div class="row infor">
												<div class="col-xs-12 col-sm-3">
													<h5>Check In</h5>
													<span>03 Jul 2019</span>
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5>Check Out</h5>
													<span>05 Jul 2019</span>
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5>Rooms</h5>
													<span>01</span>
												</div>
												<div class="col-xs-12 col-sm-3">
													<h5>No. of Guests</h5>
													<span>2 adults, 2 child</span>
												</div>
											</div>
											<div class="prai">
												<div class="tal2">
													<h5>Total room price</h5>
													<span>Rp. 250.000,00</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- SECTION 2 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Guest Information</h4>
								</div>
								<div class="rinf">
									<span class="roi">Already have an account?&nbsp;<a href="#anu" data-toggle="modal">Login</a>&nbsp;here</span>
									<div class="row">
										<div class="col-sm-12">
											<div class="row">
												<div class="col-sm-6">
													<span class="form-label">First Name</span>
													<input class="form-control" type="text" name="" value="">
													<span class="form-label">Last Name</span>
													<input class="form-control" type="text" name="" value="">
													<span class="form-label">Address</span>
													<input class="form-control" type="text" name="" value="">
												</div>
												<div class="col-sm-6">
													<span class="form-label">Email</span>
													<input class="form-control" type="text" name="" value="">
													<span class="form-label">Phone Number</span>
													<input class="form-control" type="text" name="" value="">
													<span class="form-label">Phone Number 2</span>
													<input class="form-control" type="text" name="" value="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- SECTION 3 -->
						<h2></h2>
						<section>
							<div class="wrapper">
								<div class="subttl">
									<h4>Summary</h4>
								</div>
								<div class="rinf">
									<span class="roi">Your Information</span>
									<div class="row sumer">
										<div class="col-sm-12">
											<div class="ndeks">
												<h5 class="ntitel">First Name</h5>
												:<h5 class="vals">John</h5>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Last Name</h5>
												:<h5 class="vals">Sorgon</h5>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Address</h5>
												:<h5 class="vals">Jl. Bulak</h5>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Email</h5>
												:<h5 class="vals">ngakbayar@yahoo.com</h5>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Phone Number 1</h5>
												:<h5 class="vals">08123456789</h5>
											</div>
											<div class="ndeks">
												<h5 class="ntitel">Phone Number 2</h5>
												:<h5 class="vals">08987654321</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</form>

				</div>
			</div>

			<div class="col-xs-12 col-sm-3">
				<div class="romps">
					<div class="det">
						<h5>Total room price</h5>
						<span>Rp. 250.000,00</span>
					</div>

					<div class="det">
						<h5>Total room price</h5>
						<span>Rp. 250.000,00</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="anu" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="auth-box">
				<div class="row" style="margin:0;">
					<div class="col-sm-12">
						<div id="loginform">
							<div class="logo text-center">
								<span class="db"><img src="{{ asset('assets_backend/images/logo-icon.png') }}" alt="logo" /></span>
								<h5 class="font-medium m-b-20">Sign In</h5>
							</div>
							<!-- Form -->
							<div class="row">
								<div class="col-12">
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
											</div>

											<input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} form-control-lg" name="username" placeholder="Username" value="{{ old('username') }}" autofocus aria-label="Username" aria-describedby="basic-addon1">

											@if ($errors->has('username'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('username') }}</strong>
											</span>
											@endif
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
											</div>
											<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">

											@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
											@endif
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<div class="custom-control custom-checkbox">
													<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
													{{-- <input type="checkbox" class="custom-control-input" id="customCheck1"> --}}
													<label class="custom-control-label" for="remember">Remember me</label>
													<a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
												</div>
											</div>
										</div>
										<div class="form-group text-center">
											<div class="col-xs-12 p-b-20">
												<button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
											</div>
										</div>
										{{--  <div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
												<div class="social">
													<a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
													<a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
												</div>
											</div>
										</div> --}}
										<div class="form-group m-b-0 m-t-10">
											<div class="col-sm-12 text-center">
												Don't have an account? <a href="{{ url('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extra_scripts')

<script type="text/javascript">
$(function(){
$("#wizard").steps({
			headerTag: "h2",
			bodyTag: "section",
			transitionEffect: "fade",
			enableAllSteps: true,
			transitionEffectSpeed: 500,
			labels: {
					finish: "Submit&nbsp;",
					next: "Forward&nbsp;",
					previous: " Backward"
			}
	});
	$('.wizard > .steps li a').click(function(){
		$(this).parent().addClass('checked');
	$(this).parent().prevAll().addClass('checked');
	$(this).parent().nextAll().removeClass('checked');
	});
	// Custome Jquery Step Button
	$('.forward').click(function(){
		$("#wizard").steps('next');
	})
	$('.backward').click(function(){
			$("#wizard").steps('previous');
	})
	// Select Dropdown
	$('html').click(function() {
			$('.select .dropdown').hide();
	});
	$('.select').click(function(event){
			event.stopPropagation();
	});
	$('.select .select-control').click(function(){
			$(this).parent().next().toggle();
	})
	$('.select .dropdown li').click(function(){
			$(this).parent().toggle();
			var text = $(this).attr('rel');
			$(this).parent().prev().find('div').text(text);
	})
})

</script>

@endsection
