$(document).on('click','#showData',function(e){
    $.ajax({    
      type: "GET",
      url: "backend-script.php",             
      dataType: "html",                  
      success: function(data){                    
          $("#table-container").html(data); 
         
      }
  });
});



$(document).on('click','#showData5',function(e){
    $.ajax({    
      type: "GET",
      url: "backendscript2.php",             
      dataType: "html",                  
      success: function(data){                    
          $("#table-container").html(data); 
         
      }
  });
});