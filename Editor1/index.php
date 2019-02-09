<html>
  <head>
  <title>My Now Amazing Webpage</title>
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  

<script src="ckeditor/ckeditor.js"> </script>

</head>
  <style>
  
  
</style>

<body>

<!-- Feature

1. upload image
2. set width image
3. set height image
4. upload image to server
5. delete image in server
6. insert embed youtube

 -->

  <div class="container">

    <form action="getdata.php" method="post" enctype="multipart/form-data">

      <textarea class="ckeditor" name="editor1" id="editor1"></textarea>

      <button type="submit" class="btn btn-primary pull-right" style="border-radius: 2px;margin-top: 15px;">Submit</button>


<script type="text/javascript">
 
  CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: 'ckeditor/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: 'ckeditor/ckfinder/ckfinder.html?Type=Images',
    filebrowserUploadUrl: 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserWindowWidth : '1000',
    filebrowserWindowHeight : '700'
});
 
</script>

    </form>
    
  </div>

</body>
</html>
				