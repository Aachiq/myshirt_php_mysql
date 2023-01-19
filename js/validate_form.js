//On ready : all HTML Content are loaded

$(function() {
    $('#frm_Add_Order').submit(function(event){
        //Stop refreshing
        event.preventDefault();

        if(!isValide()){
        console.log('non valide');
        return;
        }
     
        console.log('ready to insert ...');
        console.log( );
        //it's valide
        let fullName = $.trim($('#txt_fullname').val());
        let phone  = $.trim($('#txt_phone').val());
        let email  = $.trim($('#txt_email').val());
        let adresse  = $.trim($('#txt_adress').val());

        let image = 'demo_Image';

        $.ajax({ url: './add_order.php',
         data: {'fullname':fullName, 'phone':phone, 'email': email, 'adress': adresse,'image_tshirt': image},
         type: 'post',
         success: function(output) {
                      alert(output);
                  }
});



        

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