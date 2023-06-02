window.onscroll = function(){
    let top = window.pageYOffset || document.documentElement.scrollTop;
    
    if(top > 400){
       
      console.log("chegou a 400")
       /*document.getElementById("topo-fixo").classList.add("menu-fixo");
       }else{
       document.getElementById("topo-fixo").classList.remove("menu-fixo");
         //console.log(top)
       //fim menu fixo//*/
       }
}

$("#abre-chat").on("click", function(){
    $(".wrapper").show();
    $(".chat-icone").hide();
});

$(document).ready(function(){
    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#data").val('');
        
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $replay = '<div class="bot-inbox inbox"><div class="img-chat"></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                $(".form").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    });
});