function refreshData(){    
    $.get("fundData.php", function(data, status){      
    $("#fundTable").html(data);     
    });
    }
    function checkMobile(){ 
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent) ) {        
    $("table").css("width", "100%");     
    $("table").css("height", "100vh");  
    document.getElementsByTagName("html")[0].style.fontSize = "48px";
    }
    }  
    function checkTime(){
    var date = new Date();
    var hour = date.getHours();
    if(hour >= 6 && hour <= 18 ) {   
    $("body").removeClass("night"); 
    $("body").addClass("day");     
    } else {  
    $("body").removeClass("day");
    $("body").addClass("night");   
    }
    }
    $(document).ready(function(){
    refreshData();      
    checkMobile();       
    checkTime();    
    });      
    setInterval(function(){refreshData();}, 10000);      
    setInterval(function(){checkTime()}, 20000); 