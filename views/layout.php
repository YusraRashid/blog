<?php

/* 
 * Copy from Peter's you can delete all. this is only for reference
 */


?>

<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="views/css/main.css">
<title>Blog</title>

  </head>
  <body>
    <ul>
        <?php
        if ( !isset($_SESSION) ) {
            session_start();
}
        ?>
        <li style="float:left"><a class="active" href="?controller=blog&action=viewAll">Home</a></li>  
        <li style="float:left"><a href="?controller=blog&action=create">Create Blog</a></li> 
                
        <?php 
          if (empty($_SESSION['username'])){ 
        ?>
        <li><a href="?controller=user&action=login">Login</a></li>
        <li><a href="?controller=user&action=register">Create Account</a></li>
        <?php } else{ 
            $name = $_SESSION['username']; ?>              
        <li><a href="?controller=user&action=logout">Sign Out</a></li>       
        <li><a href='?controller=user&action=show'><?=$name; ?></a></li>
         <?php } ?>

    </ul>

    <?php require_once('routes.php'); ?>
   <div class="footer w3-text-dark-gray">
    <footer>       
        For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
     <!--   Copyright &COPY; <?= date('Y'); ?> -->
    
     <?php /*
        if ( !isset($_SESSION) ) {
            echo "session is not set </br>";
        }else{
            echo "session is set </br>";
        }
     
         
        if ( empty($_SESSION) ) {
            echo "session is empty </br>";
        }else{
            echo "session isnot empty </br>";
        }
      
        var_dump($_SESSION);  */?>
    </footer>
   </div>
  </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <!-- Include external JS libs. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

        <!-- Include Editor JS files. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/js/froala_editor.pkgd.min.js"></script>
        <script>
            $(document).ready(function () {
                var fields = ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough',
                    'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color',
                    'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL',
                    'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage',
                    'insertVideo', 'insertFile', 'insertTable', '|', 'emoticons',
                    'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print',
                    'help', 'html', '|', 'undo', 'redo'
                ];

                $('#edit')
                        .froalaEditor({
                            heightMin: 250,
                        }).on('froalaEditor.image.beforeUpload', function (e, editor, files) {
                    if (files.length) {
                        // Create a File Reader.
                        var reader = new FileReader();
                        // Set the reader to insert images when they are loaded.
                        reader.onload = function (e) {
                            var result = e.target.result;
                            editor.image.insert(result, null, null, editor.image.get());
                        };
                        // Read image as base64.
                        reader.readAsDataURL(files[0]);
                    }
                    editor.popups.hideAll();
                    // Stop default upload chain.
                    return false;
                })
            });

        </script>

</html>