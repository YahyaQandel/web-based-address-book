function addsubmit() {
	// console.log(form_obj);	
	var book_name = document.getElementById('book_name').value;
	var book_author_name = document.getElementById('book_author_name').value ;
	var book_price = document.getElementById('book_price').value ;
	var book_desc = document.getElementById('book_desc').value ;

	var name_sp = document.getElementById('name_sp');
	var author_sp = document.getElementById('author_sp');
	var price_sp = document.getElementById('price_sp');
	var desc_sp = document.getElementById('desc_sp');

	var invalid = false;
	if(!book_name){ name_sp.style.display = 'block';invalid = true; }else{ name_sp.style.display = 'none';}
	if(!book_author_name){ author_sp.style.display = 'block';invalid = true; }
	else {
		if(!_isValidName(book_author_name))
			{
				author_sp.innerHTML = 'Please enter book author name correctly';
			 	author_sp.style.display = 'block';invalid = true;
			}
			else{
				author_sp.style.display = 'none';
			}
	}
	if(!book_price){ price_sp.style.display = 'block';invalid = true; }
		else {
			if(!_isValidPrice(book_price))
			{
				price_sp.innerHTML = 'Price should only be numbers';
				price_sp.style.display = 'block';invalid = true;
			}
			else{price_sp.style.display = 'none';}
		 }
	
	if(!book_desc){ desc_sp.style.display = 'block'; invalid = true;}else{ desc_sp.style.display = 'none';}
	
	
	if(!invalid){
		return true;
	}
}
function _isValidPrice(item)
{
    var re='';
    re = /^[0-9]*$/;
    var str = item;
    var m;
    // var v;
    if ((m = re.exec(str)) !== null) {
        if (m.index === re.lastIndex) {
            re.lastIndex++;
        }
         return true;
    }
}

function _isValidName(item)
{
    var re='';
    re =/^[a-zA-Z\s\u0600-\u06FF]*$/;
    var str = item;
    var m;
    // var v;
     
    if ((m = re.exec(str)) !== null) {
        if (m.index === re.lastIndex) {
            re.lastIndex++;
        }
         return true;
    }
    else {return false;}
}