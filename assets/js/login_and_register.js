$(function(){

	//login
	$("#login-form").on("submit", function(e){
		e.preventDefault()
		datalogin = {
			pseudo : $("#usernamelogin").val(),
			password : $("#passwordlogin").val(),
		}
		$.ajax({
			method : "POST",
			url : "php/login.php",
			data : datalogin,
			success : function(resultat){
				if(resultat==false){
					alert("Erreur pseudo ou mdp");
				}
				else{
					window.location.href="index.php";
				}
			}
		})
	})

	//register
	$("#register-form").on("submit", function(e){
        e.preventDefault()
        dataregister = {
          pseudo : $("#username").val(),
          email : $("#email").val(),
          password : $("#password").val(),
          confirm-password : $("#confirm-password").val()
        }
        $.ajax({
          method : "POST",
          url : "php/register.php",
          data : dataregister,
          success : function(resultat){
            if(resultat=="0"){
              window.location.href="index.php";
            }
            else if(resultat=="1"){
              alert("pseudo déjà pris");
              $("#pseudo").focus().val("");
            }
            else if(resultat=="2"){
              alert("remplir le formulaire")
            }
						else if(resultat=="3"){
              alert("Mot de passe non identique")
            }
            else{
              alert("Erreur")
            }
          }
        })
      })
})
