<!DOCTYPE html>
<html>


    
@include ('bsb/header')

@include ('bsb/sidebar')

<!-- disini konten -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a href="{{url('produk')}}" class="btn btn-default">Tampil Produk </a>
            </div>
               <!-- Basic Validation -->
              <div class="row clearfix">
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Produk</h2>
                           
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" enctype="multipart/form-data">
                                
                               
                                <div class="form-group form-float">
                                    <div class="form-line" >
                                        <input type="text" name="kode_produk" class="form-control" name="name" required>
                                        <label class="form-label">Kode Produk</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_produk" class="form-control" name="surname" required>
                                        <label class="form-label">Nama Produk</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="berat" class="form-control" name="email" required>
                                        <label class="form-label">Berat</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="publish" id="male" class="with-gap">
                                    <label for="male">Publlis</label>

                                    <input type="radio" name="publish" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Draff</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="keterangan" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Keterangan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="harga" class="form-control" name="password" required>
                                        <label class="form-label">Harga</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" name="expired" class="form-control" name="password" required>
                                        <label class="form-label">Expired</label>
                                    </div>
                                </div>
                                <!--<div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div> -->
                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="card">
                       <div class="header">
                            <h2>Images</h2>                           
                        </div>
                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="file" class="form-control" name="images" required>
                                        <label class="form-label">Images</label>
                                    </div>
                                </div>
                    
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
                 
        
        </div>
    </section>

@include ('bsb/footer')
