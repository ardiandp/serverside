@include ('bsb/header')
@include ('bsb/sidebar')
 <!-- JQuery DataTable Css -->
    <link href="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <section class="content">
        <div class="container-fluid">

        	   @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
       
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        

        	<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <h2 class="card-inside-title">Edit Kategori</h2>
                           <form action="{{url('kategori/update',$edit->id) }}" method="POST">
   							 @csrf
                             <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{$edit->nama_kategori}}" name="nama_kategori" class="form-control" placeholder="Nama Kategori" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" value="{{$edit->keterangan}}" name="keterangan" class="form-control" placeholder="Keterangan" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="body">
                                	<input type="submit" name="simpan" class="btn btn-warning waves-effect" value="Update Kategori">
                            	
                            </div>
                            </div>
                        </form>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- #END# Select -->   
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
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
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Keterangan</th>                                           
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Keterangan</th>                                           
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no = 1; @endphp
                                    	@forelse($kategori as $data)
                                    	
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->nama_kategori}}</td>
                                            <td>{{$data->keterangan}}</td>
                                            <td><a href="/kategori/destroy/{{ $data->id }}" class="btn-danger btn-sm">Hapus</a> | <a href="{{url('/kategori/edit/'.$data->id)}}" class="btn-warning btn-sm" >Edit</a></td>                                            
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
