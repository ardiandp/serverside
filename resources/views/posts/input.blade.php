<!DOCTYPE html>
<html>


    
@include ('bsb/header')

@include ('bsb/sidebar')

<!-- disini konten -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Input Artikel</h2>
            </div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
           
            <form action="{{ route('posts.store') }}" method="POST">
                <!-- Vertical Layout | With Floating Label -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            
                            <div class="body">
                                <form>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="email_address" name="title" class="form-control">
                                            <label class="form-label">Title</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea id="email_address" name="content" class="form-control"> </textarea>
                                            <label class="form-label">Artikel</label>
                                        </div>
                                    </div>
    
                                                                 
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vertical Layout | With Floating Label -->
                 
            </form>
        </div>
    </section>
<!-- akhir konten -->


@include ('bsb/footer')