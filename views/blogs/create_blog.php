<?php

/* 
 * ready for test
 * form to create a blog
 *  original styling is at the bottom to keep for further use
 */
?>
<!-- Include Font Awesome. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css" />

<h1>Create Blog</h1>
Create a tag that we will use as the editable area.
You can use a div tag as well. 
<form action="index.php?controller=blog&action=create" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <input style="height:100px; font-size: 2em;" class="form-control" type="text" name="blog_title"required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <input class="form-control" type="text" name="topic" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <input type="file" name="blog_image" id="blog_image" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top:10px;" required>
                <textarea id="edit" name="blog_summary"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="margin-top:20px;">
                <input type="submit" href="?controller=blog&action=create" value ="submit">
            </div>            
        </div>
    </div>
</form>

<!-- keep-->
<a href="?controller=blog&action=viewAll">Cancel</a>



























<!--<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>Enter your Blog Name here</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
       
<p><textarea rows="20" cols="131" autofocus placeholder="Write your summary here - Capture your audience and tell them what your blog is about">
</textarea></p>

    </div> 
    <div class="fakeimg" style="height:200px;">Optional Image</div>
    
    <br>
    <br>  
 
    <input type="submit" value="Create Blog" />

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me..</p>
    </div>

    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

</body>
</html>

--!>
