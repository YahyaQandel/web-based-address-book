function delete_book(book_id) {
	$.ajax({
			  url: "actions/delete_book.php",
			  method:"POST",
			  data : { 
			  	book_id:book_id
			  },
			  context: document.body,
			success: function(xml, textStatus, xhr) {
	            console.log('success');
		    },
		    error: function(xml, textStatus, xhr) {
	            console.log('error');
		    }
		});
}