<!DOCTYPE html>
<html>


    
@include ('bsb/header')

@include ('bsb/sidebar')

<!-- disini konten -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <a href="{{url('karyawan')}}" class="btn btn-default">Tampil Karyawan </a>
            </div>

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
               <!-- Basic Validation -->
              <div class="row clearfix">
                <div class="col-xs-12 col-sm-8">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Karyawan</h2>
                           
                        </div>
                        <div class="body">

                            <form id="form_validation" action="{{url('karyawan/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="form-group form-float">
                                    <div class="form-line" >
                                        <input type="text" readonly value="{{rand(1000000000000000,2000000000000000)}}" name="nik" class="form-control" required>
                                        <label class="form-label">NIK</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama" class="form-control" required>
                                        <label class="form-label">Nama Karyawan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                     <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="telp"  />
                                            <label class="form-label">Telephone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="agama" class="form-control">
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="KATHOLIK">KATHOLIK</option>
                                                <option value="LAINYA">LAINYA</option>
                                            </select>
                                            <label class="form-label">Agama</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" ></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                      <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tempat_lahir" />
                                            <label class="form-label">Tempat Lahir</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="tanggal_lahir" />
                                            <label class="form-label">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                               
                                <!--<div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div> -->
                               
                            
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4">
                     <div class="card">
                       <div class="header">
                            <h2>Opsi Tambahan</h2>                           
                        </div>
                         <div class="body">
                                <div class="form-group form-float">
                                   
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line" >
                                        <input type="file" readonly name="image" class="form-control" required>
                                        <label class="form-label">Foto</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                <select name="status" class="form-control show-tick">
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Janda">Janda </option>
                                    <option value="Duda">Duda </option>
                                </select>
                                </div>
                                     <label for="Publish">Status </label>

                                </div>
                                

                                  <div class="form-group">
                                    <input type="radio" name="jk" value="L" id="L" class="with-gap">
                                    <label for="L">Laki-Laki</label>

                                    <input type="radio" name="jk" value="P" id="P" class="with-gap">
                                    <label for="P" class="m-l-20">Perempuan</label>
                                </div>

                                  <div class="form-group">
                                    <input type="radio" name="aktif" value="Y" id="1" class="with-gap">
                                    <label for="1">Aktif</label>

                                    <input type="radio" name="aktif" value="N" id="0" class="with-gap">
                                    <label for="0" class="m-l-20">Tidak Aktif</label>
                                </div>

                              
                              
                                 <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    
                    </div>
                </div>
            </div>

            
            <!-- #END# Basic Validation -->
                 </form>
        
        </div>
    </section>
    <script type="text/javascript">
        function preview() 
        {
         frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>

@include ('bsb/footer')
