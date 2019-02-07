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

 -->

  <div class="container">

    <form action="getdata.php" method="post">

      <textarea class="ckeditor" name="editor"></textarea>

      <button type="submit" class="btn btn-primary pull-right" style="border-radius: 2px;margin-top: 15px;">Submit</button>

    </form>
  </div>

</body>
</html>
				