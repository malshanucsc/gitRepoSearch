$(function(){
    
    $(".input-group-btn .dropdown-menu li a").click(function(){

        var selText = $(this).html();
    alert(selText);
        //working version - for single button //
       $('.btn:first-child').html(selText+'<span class="caret"></span>');  
       
       //working version - for multiple buttons //
      // $(this).parents('.input-group-btn').find('.btn-search').html(selText);

   });

});


function search(){
	var inputtext= document.getElementById('search_input').value;
	//alert(inputtext);
	$.ajax({             
                     type:"post",
                     url : 'API_call/api_call.php',
                     data : {q:inputtext},
                     success: function(data) {
                      
                     },
                     error: function(jqXHR){
                        
                      alert("Error in ajax call");
                        //jqXHR.responseText
                     }
                 });
               




}


 