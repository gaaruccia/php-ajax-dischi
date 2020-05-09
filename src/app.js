$( document ).ready(function(){
  $.ajax({
    url : "api.php",
    method : 'GET',
    success : function(data) {
      var template = Handlebars.compile($("#entry-template").html());
      for (var i = 0; i < data.length; i++) {
        var album = data[i];
        var html = template({
          poster: album.poster,
          title: album.title,
          author: album.author,
          year: album.year,
        });
        $(".contenitore-dischi").append(html);
      }
    },
    error: function(stato){
      alert("Errore!")
    }
  });
  $.ajax({
    url : "api.php",
    method : 'GET',
    success : function(data) {
      $(".filtro-author #authors").on("input", function(){
        var filtro = $(this).val();
        $(".cd").each(function(){
          var generaCd = $(this).data("author");
          if (filtro === "" || filtro === generaCd) {
            $(this).show();
          }else{
            $(this).hide();
          };
        });
      });
    },
    error: function(stato){
      alert("Errore!")
    }
  });
});
