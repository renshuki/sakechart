$(function() {
    
    var index = 0;
    
    var grid_width = $("#grid").width();
    var grid_height = $("#grid").height();
    
    var mark_adjust = $("#mark").width()/2;
    
    var shudo = $("#shudo");
    var sando = $("#sando");
    
    var shudo_orig = $("#grid").width()/2;
    var sando_orig = $("#grid").height()+$("#grid").height()/5;
    
    var shudo_unit = grid_width/40;
    var sando_unit = sando_orig/2.5;
    
    shudo.keyup(function() {
        FixInitPosition();
    });
                
    sando.keyup(function() {
        FixInitPosition();
    });
    
    $("#areabg").change(function() {
        var isChecked = $(this).is(":checked");

        if(isChecked){
            $("#grid").css({"background-image": "url('images/grid2.png')"});  
            $(".saketype").fadeOut(1000);
            $("#color_container").slideDown("slow");
        }else{
            $("#grid").css({"background-image": "url('images/grid.png')"});  
            $(".saketype").fadeIn(1000);
            $("#color_container").slideUp("slow");
        }
    });
    
    $("#dlpng").on('click', function() {
        
        var customwidth = 645;
        
        if($("#color_container").is(":visible"))
            customwidth = 775;
        
        html2canvas(document.body, {
            onrendered: function(canvas) {
                ctx = canvas.getContext("2d");
                canvas.toBlob(function(blob) {
                    saveAs(blob, "nihonshu_chart.png");
                })
                /*Canvas2Image.saveAsPNG(canvas);*/
                /*document.body.appendChild(canvas);*/
            },
            width: customwidth
        });
    });
    
    FixInitPosition();
    
    function FixInitPosition(){
        $("#mark").css('margin-left', shudo_orig-(shudo_unit*shudo.val())-mark_adjust+"px");
        $("#mark").css('margin-top', sando_orig-(sando_unit*sando.val())+"px");
    }
});