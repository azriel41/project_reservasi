@extends('layouts_backend._main_backend')

@section('extra_styles')
@endsection

@section('content')
   <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="card-title">Default Basic Forms</h4> --}}
                                {{-- <h5 class="card-subtitle"> All bootstrap element classies </h5> --}}
                                <br>
                                <form id="save">
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="cr_name" id="cr_name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Desc</label>
                                        <div class="col-10">
                                            <textarea class="form-control" name="cr_desc"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">type</label>
                                        <div class="col-10">
                                            <select class="form-control">
                                                <option value="">- Chose -</option>
                                                @foreach ($type as $element)
                                                    <option value="{{ $element->tr_id }}">{{ $element->tr_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="cr_price" id="cr_price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Features</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="cr_features" id="cr_features">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Image Cover / Img 1</label>
                                        <div class="col-10">
                                        <img id="cr_img_0"  width="200" height="200" />
                                            <input type="file" name="cr_img_0"
                                        onchange="document.getElementById('cr_img_0').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Img 2</label>
                                        <div class="col-10">
                                        <img id="cr_img_1"  width="200" height="200" />
                                            <input type="file" name="cr_img_1"
                                        onchange="document.getElementById('cr_img_1').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Img 3</label>
                                        <div class="col-10">
                                        <img id="cr_img_2"  width="200" height="200" />
                                            <input type="file" name="cr_img_2"
                                        onchange="document.getElementById('cr_img_2').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Img 4</label>
                                        <div class="col-10">
                                        <img id="cr_img_3"  width="200" height="200" />
                                            <input type="file" name="cr_img_3"
                                        onchange="document.getElementById('cr_img_3').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="r_level" class="col-2 col-form-label">Img 5</label>
                                        <div class="col-10">
                                        <img id="cr_img_4"  width="200" height="200" />
                                            <input type="file" name="cr_img_4"
                                        onchange="document.getElementById('cr_img_4').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="button" onclick="save()"><i class="fas fa-share"> </i> Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection

@section('extra_scripts')


    <script type="text/javascript">
        
        function save() {
           iziToast.show({
            overlay: true,
            close: false,
            timeout: 20000, 
            color: 'dark',
            icon: 'fas fa-question-circle',
            title: 'Save Data!',
            message: 'Apakah Anda Yakin ?!',
            position: 'center',
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
            [
                '<button style="background-color:#17a991;color:white;">Save</button>',
                function (instance, toast) {

                  $.ajaxSetup({
                      headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "post",
                        url:'{{ route('catalog_room_save') }}',
                        data: $('#save').serialize(),
                        processData: false,
                        contentType: false,
                      success:function(data){
                        if (data.status == 'sukses') {
                            iziToast.success({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Success!',
                                message: 'Data Berhasil Disimpan!',
                            });

                            location.href = '{{ route('catalog_room') }}'
                        }else if (data.status == 'ada') {
                            iziToast.warning({
                                icon: 'fa fa-save',
                                position:'topRight',
                                title: 'Error!',
                                message:'Level Sudah Terpakai',
                            });

                        }
                      },error:function(){
                        iziToast.error({
                            icon: 'fa fa-info',
                            position:'topRight',
                            title: 'Error!',
                            message: data.message,
                        });
                      }
                    });
                    instance.hide({
                        transitionOut: 'fadeOutUp'
                    }, toast);
                }
            ],
            [
                '<button style="background-color:#d83939;color:white;">Cancel</button>',
                function (instance, toast) {
                  instance.hide({
                    transitionOut: 'fadeOutUp'
                  }, toast);
                }
              ]
            ]
        });
        }

    </script>

@endsection



    

       