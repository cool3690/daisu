//右側消息：滑鼠移至消息列背景顏色綠色、文字白色、對應的圖片透明度0.5
$(document).ready(function(){
    $(".news_div1").hover(function(){
        $(this).css({"background-color": "#007799", "color": "#ffffff"});
        $("#date1").css("color", "#ffffff");
        $("#new_img1").css("opacity", "0.5");
        }, function(){
        $(this).css({"background-color": "#ffffff", "color": "#000000"});
        $("#date1").css("color", "#808080");
        $("#new_img1").css("opacity", "1");
    });
});

$(document).ready(function(){
    $(".news_div2").hover(function(){
        $(this).css({"background-color": "#007799", "color": "#ffffff"});
        $("#date2").css("color", "#ffffff");
        $("#new_img2").css("opacity", "0.5");
        }, function(){
        $(this).css({"background-color": "#ffffff", "color": "#000000"});
        $("#date2").css("color", "#808080");
        $("#new_img2").css("opacity", "1");
    });
});

$(document).ready(function(){
    $(".news_div3").hover(function(){
        $(this).css({"background-color": "#007799", "color": "#ffffff"});
        $("#date3").css("color", "#ffffff");
        $("#new_img3").css("opacity", "0.5");
        }, function(){
        $(this).css({"background-color": "#ffffff", "color": "#000000"});
        $("#date3").css("color", "#808080");
        $("#new_img3").css("opacity", "1");
    });
});

$(document).ready(function(){
    $(".news_div4").hover(function(){
        $(this).css({"background-color": "#007799", "color": "#ffffff"});
        $("#date4").css("color", "#ffffff");
        $("#new_img4").css("opacity", "0.5");
        }, function(){
        $(this).css({"background-color": "#ffffff", "color": "#000000"});
        $("#date4").css("color", "#808080");
        $("#new_img4").css("opacity", "1");
    });
});

$(document).ready(function(){
    $("#new_img1").hover(function(){
        $(".news_div1").css({"background-color": "#26D07C", "color": "#ffffff"});
        $("#date1").css("color", "#ffffff");
        $(this).css("opacity", "0.5");
        }, function(){
        $(".news_div1").css({"background-color": "#ffffff", "color": "#000000"});
        $("#date1").css("color", "#808080");
        $(this).css("opacity", "1");
    });
});

$(document).ready(function(){
    $("#new_img2").hover(function(){
        $(".news_div2").css({"background-color": "#26D07C", "color": "#ffffff"});
        $("#date2").css("color", "#ffffff");
        $(this).css("opacity", "0.5");
        }, function(){
        $(".news_div2").css({"background-color": "#ffffff", "color": "#000000"});
        $("#date2").css("color", "#808080");
        $(this).css("opacity", "1");
    });
});

$(document).ready(function(){
    $("#new_img3").hover(function(){
        $(".news_div3").css({"background-color": "#26D07C", "color": "#ffffff"});
        $("#date3").css("color", "#ffffff");
        $(this).css("opacity", "0.5");
        }, function(){
        $(".news_div3").css({"background-color": "#ffffff", "color": "#000000"});
        $("#date3").css("color", "#808080");
        $(this).css("opacity", "1");
    });
});

$(document).ready(function(){
    $("#new_img4").hover(function(){
        $(".news_div4").css({"background-color": "#26D07C", "color": "#ffffff"});
        $("#date4").css("color", "#ffffff");
        $(this).css("opacity", "0.5");
        }, function(){
        $(".news_div4").css({"background-color": "#ffffff", "color": "#000000"});
        $("#date4").css("color", "#808080");
        $(this).css("opacity", "1");
    });
});

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

