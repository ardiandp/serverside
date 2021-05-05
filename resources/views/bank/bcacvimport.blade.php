@include ('bsb/header')
@include ('bsb/sidebar')
 <!-- JQuery DataTable Css -->
    <link href="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <section class="content">
        <div class="container-fluid">

        	<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <h2 class="card-inside-title">Import Data Bank .xlsx</h2>
                           <form action="{{url('bank/bcacvimportsave') }}" method="POST" enctype="multipart/form-data">
   							 @csrf
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="file" class="form-control" placeholder="upload file bank disini " />
                                        </div>
                                    </div>
                                </div>
                               <!-- <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="username" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="password" class="form-control" placeholder="Password" />
                                        </div>
                                    </div> 
                                </div> -->
                                <div class="body">
                                	<input type="submit" name="simpan" class="btn btn-success waves-effect" value="Simpan Data">
                            	
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
                       
                        <div class="body">
                            <div class="table-responsive">
                               <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Cabang</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Saldo</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                    	
                                        <tr>
                                           <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Cabang</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Saldo</th>                                            
                                        </tr>
                                      
                                        
                                       
                                        
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
