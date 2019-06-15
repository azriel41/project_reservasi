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
  .comn img {
  	border: solid 2px #484848;
  	border-radius: 5px 5px 0 0;
  }
  .tbl {
  	margin-top: 10px;
  }
  .tbl img {
  	border: solid 2px #484848;
  	border-radius: 1px;  	
  	width: 125px;
  }
  .ggb {
  	list-style: none;
  	float: left;
  	padding-right:18px;
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
                        <div class="intro_content">
							<div class="section_subtitle">detail room</div>
                            <div class="section_title"><h3>Relax in our Hotel</h3></div>

                            <div class="ner">
                            	
                            	<div class="comn">
                            		<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            	</div>
                            	<ul class="tbl">
                            		
                            		<li class="ggb">
                            			<a href="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            				<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            			</a>
                            		</li>

                            		<li class="ggb">
                            			<a href="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            				<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            			</a>
                            		</li>
                            		<li class="ggb">
                            			<a href="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            				<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            			</a>
                            		</li>
                            		<li class="ggb">
                            			<a href="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            				<img src="https://media-cdn.tripadvisor.com/media/photo-s/06/3e/92/2c/hotel-california-bandung.jpg">
                            			</a>
                            		</li>

                            	</ul>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Intro Image -->
                <div class="col-lg-4 intro_col">

                   <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">luxury resort</div>
                                <div class="section_title"><h2>Relax in our Hotel</h2></div>
                            </div>
                            <div class="intro_text">
                                <p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="intro_link"><a href="rooms.html">View Rooms</a></div>
                            <a href="#" class="button_container intro_button"><div class="button text-center"><span>Book Your Stay</span></div></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra_scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(".tbl a").click(function(evt) {
        evt.preventDefault();
        $(".conn").empty().append(
            $("<img>", {src: this.href})
        );
    });
</script>
@endsection