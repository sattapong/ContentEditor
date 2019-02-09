<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CKEditor 5 Integration Example</title>
</head>
<body>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script src="ckeditor5/ckfinder/ckfinder.js"></script>

<div class="container">
<form action="getdata.php" method="post"  >


  <textarea id="editor" name="editor">This is sample text</textarea>

    <script type="text/javascript">

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            ckfinder: {
                uploadUrl: 'ckeditor5/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            toolbar: [ 'ckfinder', /*'imageUpload',*/ '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
        } )
        .catch( function( error ) {
            console.error( error );
        } );

    </script>

    <button type="submit" class="btn btn-primary pull-right" style="border-radius: 2px;margin-top: 15px;">Submit</button>
</form>
</div>

</body>
</html>