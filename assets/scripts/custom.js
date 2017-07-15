$( document ).ready(function() {
 $(document).on('submit', '#test', function(e) {
     
    $("input:radio[name='html_radio']").is(":checked")
    
    var i = $("#noq").val();
    
    var greska = 0;
        for (var j = 0 ; j < i; j++) {
            
            if($(".testr"+j).is(":checked")){
            
            }
            else{
               
                $('.group'+j).css("border","1px solid red");
                greska++;
            }
            
            
        }
    
        

        if(greska > 0){
         alert("Mora se odgovoriti na sva pitanja");
         e.preventDefault();
        return false; 
    }
    
     return true; 
     
 });


 $(document).on('submit', '#contact-forma', function(e) {
      var returnForm = true;
      if ($('#name').val() === '') {
        returnForm = false;
        
        $('#name').css( "border", "1px solid red" );
      }
    
      if ($('#email').val() === '') {
        returnForm = false;
        
        $('#email').css( "border", "1px solid red" );
      }
      if ($('#message').val() === '') {
        returnForm = false;
        
        $('#message').css( "border", "1px solid red" );
      }
    
      if (!returnForm) {
        e.preventDefault();
        return false;
      }
    });




});
