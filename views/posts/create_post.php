<?php

/* 
 * ready for test
 * form to create a post
 * $_POST key nemes are - blog_id, post_title, post_body 
 */
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />

<h1>Create Post</h1>
 Create a tag that we will use as the editable area.
         You can use a div tag as well. 
<form action="index.php?controller=post&action=create" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <input style="height:100px; font-size: 2em;" class="form-control" type="text" name="post_title"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
                <textarea id="edit" name="post_body"></textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top:20px;">
                <input type="submit" href="?controller=post&action=create" />
            </div>            
        </div>
    </div>
    <!--<input type="hidden" name="blog_id" value="<?= $_GET['blog_id'] ?>"/> -->          
</form>
<-<!-- navigate back -->
<a href="?controller=blog&action=show&blog_id=<?= $_GET['blog_id']; ?>">Cancel</a>

