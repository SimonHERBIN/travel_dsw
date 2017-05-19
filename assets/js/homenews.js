$(function(){
  $.ajax({
    url : "php/accueil.php",
    success : function(news){
      $("#phpnews").append(news)
    }
  })
})
