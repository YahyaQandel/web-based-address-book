<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, TemplateMo.com</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML, TemplateMo.com" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website from TemplateMo.com" />
<link href="style/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="style/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="style/mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.html">Home</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        </div>
        <div id="templatemo_new_books">
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        
        <div id="templatemo_content_right">
        	
            <h1>Add new book </h1>
            <form onsubmit="return addsubmit();" action='actions/register_new_book.php' method="POST" enctype="multipart/form-data">
                <div class="bd-example" data-example-id="">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Name</label>
                      <div class="col-3">
                        <input class="form-control" type="text" id="book_name" name="book_name">
                        <span class="error_span" id="name_sp">Please enter book name</span>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Author</label>
                      <div class="col-10">
                        <input class="form-control" type="text"  id="book_author_name" name="book_author_name">
                        <span class="error_span" id="author_sp">Please enter book author name</span>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Price</label>
                      <div class="col-10">
                        <input class="form-control" type="text" id="book_price" name="book_price">
                        <span class="error_span" id="price_sp">Please enter book price</span>

                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Description</label>
                      <div class="col-10">
                        <input class="form-control" type="text"  id="book_desc" name="book_desc">
                        <span class="error_span" id="desc_sp">Please enter  book description</span>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Cover</label>
                      <div class="col-10">
                        <input class="form-control" type="file"  name="book_cover">
                      </div>
                    </div>  
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                    </div>              
                </div>
            </form>
            
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
	       <a href="index.html">Home</a> | <a href="index.html">Search</a> | <a href="index.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
        Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
	</div> <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
<script type="text/javascript" src='js/validate-add.js'></script>