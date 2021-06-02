<!DOCTYPE html>
<html>


    
@include ('bsb/header')

@include ('bsb/sidebar')

<!-- disini konten -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BLANK TABLES</h2>
            </div>
           
            <script type="text/javascript">
            	function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}
            </script>
            <form>
  <input type="file" onchange="preview()">
  <img id="frame" src="" width="100px" height="100px"/>
</form>
        
        </div>
    </section>
<!-- akhir konten -->


@include ('bsb/footer')