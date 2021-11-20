<!DOCTYPE HTML>
<?php include 'Navbar.php';?>
<html>
    <head>
       <meta charset="utf-8">
       <title>PhotoBooth | Upload</title>      
        <link rel="stylesheet" href="assets/Upload.css">
       </head>
    <body>
        <div class="container">
          <div class="Parent">
            <div class="child1">
            </div>
            <div class="child2">
              <h1>Upload Image</h1>
              <form method="post" action="Upload.inc.php" enctype='multipart/form-data'>
                <input type='file' name="my_image" />
                <select name="categories" id="categories">
                  <option value="nature">Nature</option>
                  <option value="fashion">Fashion</option>
                  <option value="wildlife">Wildlife</option>
                  <option value="wedding">Wedding</option>
              </select>
                <input type='submit' name="submit" value="Upload">
            </form>
            </div>
          </div>
        </div>
        <script>
          var btnUpload = $("#upload_file"),
          btnOuter = $(".button_outer");
          btnUpload.on("change", function(e){
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
              $(".error_msg").text("Not an Image...");
            } 
            else {
              $(".error_msg").text("");
              btnOuter.addClass("file_uploading");
              setTimeout(function(){
                btnOuter.addClass("file_uploaded");
              },3000);
              var uploadedFile = URL.createObjectURL(e.target.files[0]);
              setTimeout(function(){
                $("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
              },3500);
            }
          });
          $(".file_remove").on("click", function(e){
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            btnOuter.removeClass("file_uploading");
            btnOuter.removeClass("file_uploaded");
          });
        </script>
          <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </body>
</html>