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
.error {
  color: red;
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
                        <img src="{{asset('assets_frontend/images/room_1.jpg')}}">
                      </div>
                      <!-- <div class="sampah">
                        <span class="fa fa-trash"> Remove</span>
                      </div> -->
                    </div>
                    <div class="col-xs-12 col-sm-9">
                      <div class="hott">
                        <h5 class="ntitel">hotel cali</h5>
                      </div>

                      <div class="feature">
                        <span class="icco fa-fa-wifi">wifi</span>
                      </div>
                      <div class="row infor">
                        <div class="col-xs-12 col-sm-3">
                          <h5 class="ntitel">Check In</h5>
                          <span>16-10-2018</span>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <h5 class="ntitel">Check Out</h5>
                          <span>28-05-2019</span>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <h5 class="ntitel">Type Room</h5>
                          <span>premium</span>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <h5 class="ntitel">No. of Guests</h5>
                          <span>1</span>
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
                        <p class="first_name">:  wkwkwkwk</p>
                      </div>
                      <div class="ndeks">
                        <h5 class="ntitel">Last Name</h5>
                        <p class="last_name">:  wkwkwkwk</p>
                      </div>
                      <div class="ndeks">
                        <h5 class="ntitel">Address</h5>
                        <p class="address">:  wkwkwkwk</p>
                      </div>
                      <div class="ndeks">
                        <h5 class="ntitel">Email</h5>
                        <p class="email">:  wkwkwkwk</p>
                      </div>
                      <div class="ndeks">
                        <h5 class="ntitel">Phone Number 1</h5>
                        <p class="phone">:  wkwkwkwk</p>
                      </div>
                      <div class="ndeks">
                        <h5 class="ntitel">Phone Number 2</h5>
                        <p class="phone1">:  wkwkwkwk</p>
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
          <table class="table" style="font-size: 14px">
            <tr>
              <th>Total Room Cost</th>
            </tr>
            <tr>
              <td align="right"><span class="st room_price_txt" id="">Rp.10000</span></td>
            </tr>
            <tr>
              <th>Total Tax</th>
            </tr>
            <tr>
              <td align="right"><span class="st tax_price_txt" id="">Rp. 100</span></td>
            </tr>
            <tr>
              <th>Total Serve</th>
            </tr>
            <tr>
              <td align="right"><span class="st serve_price_txt" id="">Rp. 100</span></td>
            </tr>
            <tr>
              <th>Total Additional</th>
            </tr>
            <tr>
              <td align="right"><span class="st additional_price_txt" id="">Rp. 100</span></td>
            </tr>
            <tr style="background-color: #f5f5f5">
              <th>Total Cost</th>
            </tr>
            <tr>
              <td align="right"><span class="st total_price_txt" id="">Rp. 100</span></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('extra_scripts')

<script type="text/javascript">
function login(argument) {
  $("#wizard").steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "fade",
    current:1,
    enableAllSteps: false,
    transitionEffectSpeed: 500,
    labels: {
      finish: "Submit&nbsp;",
      next: "Forward&nbsp;",
      previous: " Backward"
    },
    onStepChanging: function (event, currentIndex, newIndex)
    {
      $("#wizard").validate().settings.ignore = ":disabled,:hidden";
      $('.first_name').text($('#first_name').val());
      $('.last_name').text($('#last_name').val());
      $('.address').text($('#address').val());
      $('.email').text($('#email').val());
      $('.phone').text($('#phone').val());
      $('.phone1').text($('#phone1').val());
      return $("#wizard").valid();
    },
  });
}

</script>

@endsection
