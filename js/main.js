$(document).ready(function () {
        
    //initialize button states
    var webState = false;
    var commsState = false;
    var eventState = false;
    var uxState = false;
    var supportState = false;
    var otherState = false;
    
    //Hide tags if there is no item for it
    if ($("div.comms").length == 0) {$("div#comms").css("display", "none"); }
    
    if ($("div.ux").length == 0) {$("div#ux").css("display", "none"); }
        
    if ($("div.event").length == 0) {$("div#event").css("display", "none"); }
    
    if ($("div.other").length == 0) {$("div#other").css("display", "none"); }

    if ($("div.support").length == 0) {$("div#support").css("display", "none"); }

    if ($("div.web").length == 0) {$("div#web").css("display", "none"); }

    
    //Declare cardSort function
    var cardSort = function () {
        //if no tags are selected, show all cards
        if (webState == false && commsState == false && eventState == false && otherState == false && supportState == false && uxState == false) {
            $("div.ws-item").css("display", "inline-block");
            
        //if a tag is currently true show items with that tag
        } else {
            
            //hide all cards to prepare for evals
            $("div.ws-item").css("display", "none");

            
            if (webState == true) {
                $("div.web").css("display", "inline-block");
            }
            
            if (commsState == true) {
                $("div.comms").css("display", "inline-block");
            }
            
            if (eventState == true) {
                $("div.event").css("display", "inline-block");
            }
            
            if (otherState == true) {
                $("div.other").css("display", "inline-block");
            }
            
            if (supportState == true) {
                $("div.support").css("display", "inline-block");
            }   
            
            if (uxState == true) {
                $("div.ux").css("display", "inline-block");
            }
        }
    };
    
    
    
    //Set all tag close icons to hidden
    $("div.tagBtn > .btnicon").css("display", "none");
    
    //hide cleartags
    $("div.clearTags").css("display", "none");
    
    $("div.tagBtn").click(function () {
        //store id in a variable
        var btnid = $(this).attr("id");
        
        //turn on close icon for tag
        $(this).children("i").toggle(100);
        
        //toggle button state
        switch (btnid) {
            case "web":
                webState = !webState
                break;
                
            case "comms":
                commsState = !commsState
                break;
                
            case "event":
                eventState = !eventState
                break;
                
            case "ux":
                uxState = !uxState
                break;
                
            case "support":
                supportState = !supportState
                break;
                
            case "other":
                otherState = !otherState
                break;
                
            default:
                $(".results").append("<p>Button state was not toggled</p>" + "<p>" + webState + commsState + eventState + otherState + "</p>");
            
        };
        
        //check how many tags are active and show clear tags button
        if (webState|commsState|eventState|uxState|supportState|otherState == "true" ) {
            $("div.clearTags").css("display","inline-block")
        } else {$("div.clearTags").css("display","none")}
        
        cardSort();
    });
    
    $("div.clearTags").click(function () {
        //set all tags to false
        webState = false;
        commsState = false;
        eventState = false;
        uxState = false;
        supportState = false;
        otherState = false;
        
        //run cardSort
        cardSort();
        
        //hide clear tag button
        $(this).css("display","none");
        
        //Set all tag close icons to hidden
        $("div.tagBtn > .btnicon").css("display","none");
    
    });
});