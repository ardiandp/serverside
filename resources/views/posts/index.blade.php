@include ('bsb/header')
@include ('bsb/sidebar')
 <!-- JQuery DataTable Css -->
    <link href="{{url('/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a href="{{url('posts/create')}}" class="btn btn-success">Tambah Post</a>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php $no = 1; @endphp
                                    	@forelse($posts as $post)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td class="text-center">
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
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
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
          
        </div>
    </section>


    @include ('bsb/footer')

    
</body>

</html>
