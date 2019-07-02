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
  .prc
  {
  font-family: 'Monstserrat', serif;
  font-weight: 550;
  color: #333333;
  line-height: 1.25;
  -webkit-font-smoothing: antialiased;
  -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
  text-shadow: rgba(0,0,0,.01) 0 0 1px;
  }
  .moc
  {
    display: flex;
    flex-wrap: wrap;
  }
  .mdl{
    padding:30px;
  }
  .mdl h2
  {
    margin :10px 0 30px 0;
  }
  .mdr
  {
    border-left: 1px solid;
    position: relative;
  }
  .mgb
  {
    max-width: 180px;
    border: 1px solid #d6d4d4;
    padding: 5px;
    float: left;
    margin-right: 30px;
  }
  .mpi
  {
    display: inline-block;
  }
  .prodname
  {
    font-weight: 700;
    margin-bottom: 20px;
    border-bottom: 1px solid;
  }
  .sub
  {
    margin-bottom: 5px;
  }
  .st
  {
    display: table;
    padding: 5px 0;
  }
  .payinf
  {
    padding-top: 20px;
    padding-bottom: 65px;
  }
  .paytit
  {
    padding: 10px 0;
    margin-bottom: 10px 0;
    border-bottom: 1px solid;
  }
  .tutup
  {
    position: absolute;
    right: 20px;
    top: 10px;
    width: 25px;
    height: 25px;
    cursor: pointer;
    color: #333;
    z-index: 2;
  }
  .tutup:before
  {
    content: "\f057";
    display: block;
    font-family: fontawesome;
    font-size: 25px;
    line-height: 25px;
  }
  .lee
  {
    position: static;
  }
  .boti
  {
    padding: 10px 0;
  }

</style>
@endsection


@section('content')
<div class="blank">
<div class="intro">
@include('layouts_frontend._search_frontend')  
        <div class="container">
            <div class="row row-lg-eq-height">

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="moc">
                        <div class="col-xs-12 col-sm-6 mdl lee">
                          <span class="tutup" title="close window"></span>
                          <h2 class="text-center" style="font-size: large;"><i class="fa fa-check"></i>Room Succesfully added to your cart</h2>
                          <h5 class="text-center prodname">Hotel California</h5>

                          <div class="mgb">
                            <img class="img-fluid" src="{{asset('assets_frontend/images/intro_1.jpg')}}">     
                          </div>
                          <div class="mpi">
                            <div class="sub">
                              <strong>Time Duration</strong>
                              <span class="st" id="">02-06-2019</span>
                              <span class="st">till</span>
                              <span class="st" id="">03-06-2019</span>
                            </div>
                            <div class="sub">
                              <strong>Rooms Quantity</strong>
                              <span class="st" id="">3</span>
                            </div>
                            <div class="sub">
                              <strong>Total Cost</strong>
                              <span class="st" id="">Rp.3.000.000</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 mdl mdr">
                          <h4 class="text-center paytit">There are 1 room(s) in your cart.</h4>
                          <div class="payinf">
                            <div class="sub">
                              <strong>Total Room Cost</strong>
                              <span class="st" id="">Rp.2.000.000</span>
                            </div>
                            <div class="sub">
                              <strong>Total Additional</strong>
                              <span class="st" id="">Rp.3.000.000</span>
                            </div>
                            <div class="sub">
                              <strong>Total Cost</strong>
                              <span class="st" id="">Rp.5.000.000</span>
                            </div>
                          </div>
                          <div class="moc">
                            <div class="col-xs-12 col-sm-6 boti">
                              <button class="btn btn-secondary">
                                <i class="fa fa-chevron-left"></i> Continue Shopping
                              </button>
                            </div>
                            <div class="col-xs-12 col-sm-6 boti">
                              <button class="btn btn-primary">
                                Proceed to Checkout <i class="fa fa-chevron-right"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                            			<input type="text" class="form-control" id="tgl1" name="today" placeholder="Check In Date" readonly>
                            		</div>
                            		<div class="form-group">
                            			<label for="" class="control-label">Check Out Date</label>
                                  <input type="text" class="form-control" id="tgl2" name="gohome" placeholder="check Out Date" readonly>
                            		</div>
                            		<div class="form-group">
                              			<label for="" class="control-label">Number of Rooms</label>
                                    <input type="text" class="form-control qty" name="qty" value="1">
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label">Price Room</label>
                                    <h4 class="prc">Rp.100.000</h4>
                                    <input type="hidden" value="100000" class="hrg" name="">
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

                            	</form>
                        
                            </div>

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

    $("#tgl1").datepicker({
      startDate: new Date(),
      format: 'mm-dd-yyyy',
      autoclose: true,
    });

    $("#tgl2").datepicker({
      startDate: new Date(),
      format:'mm-dd-yyyy',
      autoclose: true
    });

    $('.qty').keyup(function(){

      $('.prc').text(accounting.formatMoney($(this).val()*$('.hrg').val(),"Rp. ",2,'.',','));
    });

    $('.tutup').click(function(eve) {
      $('.modal').modal('hide');
    });
</script>

@endsection