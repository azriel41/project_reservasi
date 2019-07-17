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
}
.rinf
{
	padding-bottom: 10px;
	border-bottom: 1px solid #eaeaea;
}
.roi
{
	padding: 5px 0;
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
.proceds
{
	margin-top: 10px;
	text-align: right;
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
	top: 0;
	right: 0;
	width: 181px;
	height: 50px;
	background: #5a2360;
	cursor: pointer;
	border: none;
	outline: none;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
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
</style>
@endsection
@section('content')
<div class="nulls"></div>
<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9" id="kemps">
				<div class="romps">
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
					<div class="proceds">
						<button class="prosbut"><span>Proceed</span></button>
					</div>
				</div>
				<div class="romps">
					<div class="subttl">
						<h4>Guest Information</h4>
					</div>
					<div class="rinf">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<form class="" action="#" method="post">
									<fieldset>
										<p>Already have an account? <a href="#">Login now</a> to make check process faster and time saving.</p>
										<br>
										<p>Or</p>
									</fieldset>
								</form>
								<form action="#" method="post">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<span class="form-label">First Name</span>
											<input class="form-control" type="text" name="" value="">
											<span class="form-label">Last Name</span>
											<input class="form-control" type="text" name="" value="">
											<span class="form-label">Last Name</span>
											<input class="form-control" type="text" name="" value="">
										</div>
										<div class="col-xs-12 col-sm-6">
											<span class="form-label">First Name</span>
											<input class="form-control" type="text" name="" value="">
											<span class="form-label">Last Name</span>
											<input class="form-control" type="text" name="" value="">
											<span class="form-label">Last Name</span>
											<input class="form-control" type="text" name="" value="">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="proceds">
						<button class="prosbut"><span>Proceed</span></button>
					</div>
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
@endsection

@section('extra_scripts')



@endsection
