$("#sendForm").on("click", function(){
    $.ajax({ url: '/controller/indexController.php',
         data: {functionCall : 'createUser', pseudo: '', password : '', cp : '', mail : ''},
         type: 'post',
         success: function(output) {
                alert(output);
            }
    });
});