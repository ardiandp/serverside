@include ('bsb/header')
@include ('bsb/sidebar')
 <!-- JQuery DataTable Css -->
    <link href="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a href="{{url('produk/create')}}" class="btn btn-success"> Tambah produk</a>
            </div>
            
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
                                        <li><a href="javascript:void(0);">Action</a></li>
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
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
   
    
</body>

</html>
