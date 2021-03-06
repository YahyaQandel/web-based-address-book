<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store Template, Free CSS Template, CSS Website Layout</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<!-- <link href="style/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<link href="style/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="style/mystyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php include "includes.php"; ?>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="new-book.php">add</a></li>
    	</ul>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
    	<div id="templatemo_special_offers">
        </div>
        <div id="templatemo_new_books">
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">

        </div> <!-- end of content left -->
        <center>
        <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Search</label>
                        <input id="search-criteria" type="text" onkeyup="search_fn();" name="keyword">
        </div>
        </center>
        <div id="templatemo_content_right">
        <?php 
        while($book = $books_array->fetch_assoc()) {
            $book_id = $book['id'];
            $book_cover = $book['book_cover'];
            if(!$book_cover){$book_cover = 'images/defbookcover.jpg';}
            ?>
        	<div  class="templatemo_product_box">
            	<h1><?php echo $book['book_name'] ?> 
                    <span>(by <?php echo $book['book_author_name']; ?>)</span> 
                        <a href="#" onclick="delete_book('<?php echo $book_id;?>');">
                            <div class="tooltip" style="float :right;cursor: pointer;">
                                ×
                                 <span class="tooltiptext">delete book</span>
                            </div>
                        </a>
                </h1>
   	            <img width="100" height="150" src="<?php echo $book_cover;?>" alt="image" />
                <div class="product_info">
                	<p><?php echo substr($book['book_desc'], 0, 100);?></p>
                  <h3>$<?php echo $book['book_price'];?></h3>
                    <!-- <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div> -->
                    <div class="detail_button"><a href="details.php?book=<?php echo $book['id'];?>">Detail</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
            <?php } ?>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	    
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/instant_search.js"></script>
<script src="js/ajax_actions.js"></script>