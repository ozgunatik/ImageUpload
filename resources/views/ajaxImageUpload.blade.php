<!DOCTYPE html>
<html>
 <head>
  <title>Upload Image in Laravel using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .base img {
  width: 200px;
  height: 100px;
}

.fill img {
  object-fit: fill;
}

  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3>Laravel - Ajax Kullanarak Resim Yükleme</h3>
   <br />
   <div class="alert" id="message" style="display: none"></div>
   <form method="POST" id="upload_form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%"><label>Resim Seç</label></td>
       <td width="30"><input type="file" name="select_file" id="select_file"/></td>
       <td width="30%"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Yükle"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
     </table>
    </div>
   </form>
   <br/>
   <div class="row">
   @foreach($resimler as $resim)
  <div class="col-md-2">
  <div class="form-group">
      <button class="btn btn-danger btn-xs" style="width: 100%">Kaldır</button>
    </div>
    <div class="form-group">
    <div class="form-group base fill">
      <a href="/w3images/lights.jpg">
        <img src="{{ asset('images/' . $resim->image) }}" class="img-thumbnail" alt="Lights">
      </a>
    </div>
  </div>
</div>
  @endforeach
  <div class="col-md-2">
  <div class="form-group">
  <div id="buton"></div>
  </div>
  <div class="form-group base fill">
      <span id="uploaded_image" ></span>
  </div>
  </div>
  </div>
</div>

  




  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('ajaxupload.action') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
    $('#buton').html(data.buton);
   }
  })
 });

});
</script>