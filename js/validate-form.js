//On ready : all HTML Content are loaded

$(function() {
    $('#frm_Add_Order_Submit').bind('click',function(event){
        //Stop refreshing
        event.preventDefault();

        if(!isValide())
        console.log('non valide')
        else
        console.log('is valid')
       

        console.log('ready to insert ...');
        //it's valide

       /* $.ajax({ url: '../add_order.php',
         data: {action: 'test'},
         type: 'post',
         success: function(output) {
                      alert(output);
                  }
});*/



        

    });



    $( "frm_Add_Order" ).submit(function( event ) {
        console.log('pk');
        console.log( $( this ).serializeArray() );
        event.preventDefault();
    });
    
});

function isValide(){
     //Get fullName from Form to Verify if it is empty
     var fullName = $.trim($('#txt_fullname').val());
     if(fullName == ""){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer votre nom complet!',
         });
         return false;
     }

     //Get email from Form to Verify if it is empty
     var email  = $.trim($('#txt_email').val());
     if(email == ""){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer votre email!',
         });
         return false;
     }

      //Get email from Form to Verify if it is empty
     if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer email valide !!',
         });
         return false;
     }

      //Get phone from Form to Verify if it is empty
     var phone  = $.trim($('#txt_phone').val());
     if(phone == ""){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer votre numéro de telephone!',
         });
         return false;
     }

      //Get phone from Form to Verify if it is empty
     if(/^0[5|6|7]\d{8}$/.test(phone) == false){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer un numéro de telephone valide !! (ex: 0 (5|6|7) + 8 numbers )',
         });
         return false; 
     }
   
      //Get adresse from Form to Verify if it is empty
     var adresse  = $.trim($('#txt_adress').val());
     if(adresse == ""){
         $.alert({
             title: 'Alert!',
             content: 'merci d\'entrer votre adresse!',
         });
         return false;
     }

     //Valide
     return true;
}