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

						<!-- SECTION 3 -->
						<h2></h2>
						<section>
							<div class="inner">
								<div class="image-holder">
									<!-- <img src="images/form-wizard-3.jpg" alt=""> -->
								</div>
								<div class="form-content">
									<div class="form-header">
										<h3>Registration</h3>
									</div>
									<p>Send an optional message</p>
									<div class="form-row">
										<div class="form-holder w-100">
											<textarea name="" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
										</div>
									</div>
									<div class="checkbox-circle mt-24">
										<label>
											<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
											<span class="checkmark"></span>
										</label>
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
