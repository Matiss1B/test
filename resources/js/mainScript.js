$(document).ready(function (){
   $.ajax({
       dataType:'json',
       url: "http://localhost/example-app/public/api/posts",
       success: function (data){
           console.log(data);
       }


   });
});

