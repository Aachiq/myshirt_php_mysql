$(function() {
    $('#frm_Add_Order_Submit').bind('click',function(event){
        event.preventDefault();

        var fullName = $.trim($('#txt_fullname').val());
        if(fullName == ""){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer votre nom complet!',
            });
            return;
        }
     
        var email  = $.trim($('#txt_email').val());
        if(email == ""){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer votre email!',
            });
            return;
        }
      
        
        if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer email valide !!',
            });
            return;
        }

        var phone  = $.trim($('#txt_phone').val());
        if(phone == ""){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer votre numéro de telephone!',
            });
            return;
        }

        if(/^0[5|6|7]\d{8}$/.test(phone) == false){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer un numéro de telephone valide !!',
            });
            return;
        }
      

        
        
        var adresse  = $.trim($('#txt_adress').val());
        if(adresse == ""){
            $.alert({
                title: 'Alert!',
                content: 'merci d\'entrer votre adresse!',
            });
            return;
        }
        

    })
});