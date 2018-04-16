$.ajax({ 
    url: '/controller/indexController.php',
    data: {functionCall : 'checkUser'},
    type: 'GET',
    success: function(data) {
        alert(data);
    },
    error: function(resultat, statut, erreur){
        alert(erreur);
    }
});

$("#sendForm").on("click", function(){
    $mail = $("#registerMail")[0].value;
    $pseudo = $("#registerPseudo")[0].value;
    $pwd = $("#registerPwd")[0].value;
    $cp = $("#registerCP")[0].value;
    // if($mail == null || $pseudo == null || $pwd == null || $cp == null)
    //     return;
    $.ajax({ 
        url: '/controller/indexController.php',
        data: {functionCall : 'createUser', mail : $mail, pseudo : $pwd, cp : $cp},
        type: 'GET',
        success: function() {
            alert("ok");
        },
        error: function(resultat, statut, erreur){
            alert(erreur);
        }
    });
});