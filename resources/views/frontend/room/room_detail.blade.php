@extends('layouts_frontend._main_frontend')  
@section('extra_style')
<style type="text/css">

  .room_col {
    margin-top: 100px;
  }
  .search_bar {
  	padding-top: 135px;
  	padding-bottom: 25px;
  }
  .ner {
  	width: 100%;
  	margin: auto;
  	margin-top: 20px;
  }
  .comn {
  	width: 100%;
  }
  .text-center
  {
  	color: #d6baa0;
  	font-family: inherit;
  	font-weight: 400;
  }
  .comn img {
  	border: solid 5px #eaeaea;
  	border-radius: 5px 5px 0 0;
  	width: 100%;
  	height: 400px;
  }
  .tbl {
  	margin-top: 20px;
    margin-bottom: 20px;
    display: inline-block;
  }
  .tbl img {
  	border: solid 5px #eaeaea;
  	border-radius: 1px;  	
  	width: 90px;
  	height: 80px;
  }
  .ggb {
  	list-style: none;
  	float: left;
  	padding-right:15px;
  }
  .intro_content
  {
  	width: 100%;
  }
  .intro_content2
  {
    width: 85%;
  }
  .clickable 
  {
  	cursor: pointer; 
  }
  .desc p
  {
    color: #000;
    margin-bottom: 20px;
  }
  .control-label
  {
    display: flex;
  }
  .day
  {
    color: black;
  }
</style>
@endsection


@section('content')
<div class="blank">
<div class="intro">
@include('layouts_frontend._search_frontend')  
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-8 intro_col">
 
                   <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="intro_content2">
                          <div class="section_subtitle">room detail</div>
                            <div class="section_title"><h3>Relax in our Hotel</h3></div>

                            <div class="ner">
                            	
                            	<div class="comn">
                            		<img src="{{asset('assets_frontend/images/intro_1.jpg')}}">
                            	</div>
                            	<ul class="tbl">
                            		
                            		<li class="ggb">
                            			<a href="{{url('assets_frontend/images/intro_2.jpg')}}">
                            				<img src="{{asset('assets_frontend/images/intro_2.jpg')}}">
                            			</a>
                            		</li>

                            		<li class="ggb">
                            			<a href="{{url('assets_frontend/images/intro_3.jpg')}}">
                            				<img src="{{asset('assets_frontend/images/intro_3.jpg')}}">
                            			</a>
                            		</li>
                            		<li class="ggb">
                            			<a href="{{url('assets_frontend/images/intro_1.jpg')}}">
                            				<img src="{{asset('assets_frontend/images/intro_1.jpg')}}">
                            			</a>
                            		</li>
                            		<li class="ggb">
                            			<a href="{{url('assets_frontend/images/intro_1.jpg')}}">
                            				<img src="{{asset('assets_frontend/images/intro_1.jpg')}}">
                            			</a>
                            		</li>

                            	</ul>
                            </div>

                            <!-- Bootstrap CSS -->
                            <!-- jQuery first, then Bootstrap JS. -->
                            <!-- Nav tabs -->

                            <ul class="nav nav-tabs panels" role="tablist">
                              <li class="nav-item active">
                                <a class="nav-link nli" href="#rominfo" role="tab" data-toggle="tab">Room Information</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link nli" href="#reviews" role="tab" data-toggle="tab">reviews</a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content mods">
                              <div role="tabpanel" class="tab-pane fade-in active" id="rominfo">
                              
                                <div class="desc">
                                  <p>
                                    Fashion axe kogi yuccie, ramps shabby chic direct trade before they sold out distillery bicycle rights. Slow-carb +1 quinoa VHS. +1 brunch trust fund, meggings chartreuse sustainable everyday carry tumblr hoodie tacos tilde ramps post-ironic fixie.
                                  </p>

                                  <strong>Room Features - </strong>
                                  <i class="fa fa-wifi"></i>
                                  <i class="fa fa-newspaper-o"></i>
                                  <i class="fa fa-bed"></i>
                                  <i class="fa fa-television"></i>
                                  <i class="fa fa-bath"></i>
                                </div>
                              </div>
                              <div role="tabpanel" class="tab-pane fade" id="reviews">

                                <div class="desc">
                                  <p>
                                    No customer reviews for the moment.
                                  </p>
                                </div>

                              </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Intro Image -->
                <div class="col-lg-4 intro_col">

                   <div class="d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0); padding-top: 80px;">
                        <div class="intro_content">
                            <div class="frm">
                            	<form action="" method="">
                            		<div class="form-group">
                            			<label for="" class="control-label">Hotel Location</label>
                            			<input type="text" name="" class="form-control" value="hotel-california">
                            		</div>
                            		<div class="form-group">
                            			<label for="" class="control-label">Check In Date</label>
                            			<input type="date" class="form-control" name="today" placeholder="{{ date('m-d-Y') }}">
                            		</div>
                            		<div class="form-group">
                            			<label for="" class="control-label">Check Out Date</label>
                                  <input type="date" class="form-control" name="gohome" placeholder="{{ date('m-d-Y', strtotime('+1 day')) }}">
                            		</div>
                            		<div class="form-group">
                              			<label for="" class="control-label">Number of Rooms</label>
                                    <input type="number" class="form-control" name="qty" value="1">
                                </div>
                            	</form>
                            </div>
                            <a href="#" class="button_container intro_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra_scripts')
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script>
    $(".tbl a").click(function(event) {
        event.preventDefault();
        $(".comn").empty().append(
            $("<img>", {src: this.href})
        );
    });
</script>

@endsection