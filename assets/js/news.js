$(function(){
  $.ajax({
    url : "php/phpnews.php",
    success : function(news){
      $("#news").append(news)
    }
  })
})
