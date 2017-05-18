$(function(){
  e.preventDefault()
  $.ajax({
    url : "../../php/acceuil.php",
    success : function(news){
      $("#phpnews").append(news)
    }
  })
})
