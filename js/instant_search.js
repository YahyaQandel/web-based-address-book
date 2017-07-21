function search_fn() {
    $('.templatemo_product_box').hide();
    var txt = $('#search-criteria').val();
    $('.templatemo_product_box').each(function(){
       if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
           $(this).show();
       }
    });
}