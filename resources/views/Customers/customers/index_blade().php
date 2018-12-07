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
    <div class="row ">
        <div class="col-md-12">
            <div class="card border-success">
                <div class="card-header bg-success">
                    <h4 class="m-b-0 text-white">Customers</h4></div>
                <div class="card-body">
                     <div class="text-right mb-3">
                    <a href="{{ route('master_role_create') }}" class="btn waves-effect waves-light btn-md btn-success"><i class="fas fa-plus
    "></i> Add Data</a>
                </div>
                   <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>Social Title </th>
                                    <th>First Name </th>
                                    <th>Last Name </th>
                                    <th>Email Address </th>
                                    <th>Sales </th>
                                    <th>Enabled </th>
                                    <th>Newsletter </th>
                                    <th>Opit-in </th>
                                    <th>Registration </th>
                                    <th>Last Visit </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $element)
                                    <tr>
                                        <td>{{ $element->m_id }}</td>
                                        <td>{{ $element->m_social_title }}</td>
                                        <td>{{ $element->m_first_name }}</td>
                                        <td>{{ $element->m_last_name }}</td>
                                        <td>{{ $element->m_email_address }}</td>
                                        <td>{{ $element->m_sales }}</td>
                                        <td>{{ $element->m_enabled }}</td>
                                        <td>{{ $element->m_newsletter }}</td>
                                        <td>{{ $element->m_opit_in }}</td>
                                        <td>{{ $element->m_sales }}</td>
                                        <td>{{ $element->m_registration }}</td>
                                        <td>{{ $element->m_last_visit }}</td>
                                        <td>
                                            <a class="btn waves-effect waves-light btn-sm btn-warning" href="{{ route('master_role_edit', ['id' => $element->m_code]) }}"><i class="fas fa-pencil-alt"></i></a>
                                            <button type="button" class="btn waves-effect waves-light btn-sm btn-danger delete" value="{{ $element->m_code }}" ><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
              
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('extra_scripts')
    <script type="text/javascript">
        $('#zero_config').DataTable();

        $('.delete').on('click', function () {

       var this_val = $(this).val();

       iziToast.question({
                theme: 'dark',
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                backgroundColor: '#1f1f22',
                icon: 'fa fa-info-circle',
                title: 'Are you Sure!',
                message: '',
                position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                progressBarColor: 'rgb(0, 255, 184)',
                buttons: [
                    ['<button style="background-color:red;"> Delete </button>', function (instance, toast) {

                        $.ajax({
                            url  : baseUrl+'/master'+'/master_role/delete/'+this_val,
                            type :'get',
                            success:function(data){
                                if (data.status == 'sukses') {
                                    iziToast.success({position: 'topRight',message: 'Successfully Deleted!'});
                                    window.location=('{{ route('master_role') }}')
                                }else{
                                    iziToast.error({position: 'topRight',message: 'Error Check your data! '});
                                }
                            },
                            error:function(data){

                            }

                        })

                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }, true], // true to focus
                    ['<button> Cancel </button>', function (instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOutUp',
                            onClosing: function(instance, toast, closedBy){
                                console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                            }
                        }, toast, 'buttonName');
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                    }]
                ],
                onOpening: function(instance, toast){
                    console.info('callback abriu!');
                },
                onClosing: function(instance, toast, closedBy){
                    console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
                }
            });
        
    });

    </script>

@endsection



    

       