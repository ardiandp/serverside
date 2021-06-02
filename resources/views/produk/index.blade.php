@include ('bsb/header')
@include ('bsb/sidebar')
 <!-- JQuery DataTable Css -->
    <link href="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <section class="content">
        <div class="container-fluid">

        	
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="{{url('produk/create')}}" class="btn btn-sm btn-success">Tambah Produk</a>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Import<li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                             @if ($message = Session::get('success'))        
                             <div class="alert alert-success">
                                      <strong>{{ $message }}</strong>
                                  </div>       
                            @endif
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>                                           
                                            <th>Berat</th>
                                            <th>Harga</th>
                                            <th>Expired</th>
                                            <th>Publish</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>                                            
                                            <th>No</th>
                                            <th>Nama Produk</th>                                            
                                            <th>Berat</th>
                                            <th>Harga</th>
                                            <th>Expired</th>
                                            <th>Publish</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no = 1; @endphp
                                    	@forelse($produk as $data)
                                        <tr>
                                            <th> {{$no++}}</th>
                                            <th>{{$data->nama_produk}} </th>
                                            <th>{{$data->berat}}</th>
                                            <th> {{$data->harga}}</th>
                                            <th> {{$data->expired}} </th>
                                            <th>{{$data->publish}}</th>
                                            <th><a href="{{url('produk/edit/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a> <a href="{{url('produk/destroy/'.$data->id)}}" class="btn btn-sm btn-danger">Hapus</a></th>
                                        </tr>                                    
                                  @empty
                                        <div class="alert alert-danger">
                                          Data Blog belum Tersedia.
                                      </div>
                                  @endforelse
                                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>


@include ('bsb/footer')

 <!-- Jquery Core Js -->


<!-- Jquery DataTable Plugin Js -->
<script src="{{url('/assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{url('/assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

 <!-- Custom Js -->

<script src="{{url('/assets/js/pages/tables/jquery-datatable.js') }}"></script>
</body>

</html>
