$(function(){
  $("#membrebtn").on("click", function(){
    $.ajax({
      url : "php/membre.php",
      success : function(mb){
        if(mb==false){
          window.location.href="login_and_register.php"
        }
        else {
          window.location.href="espace_membre.php"
        }
      }
    })
  })
})
