let section=[
    ".first-section",
    ".second-section",
    ".third-section",
    ".four-section",
    ".five-section",
    ".six-section",
    ".siven-section",
    ".eight-section",
    ".nine-section",
    ".ten-section",
    ".eleven-section",
    ".tweleve-section",
    ".thirteen-section",
    ".fourteen-section",
    ".fiveteen-section",
    ".sixteen-section",
    ".seventeen-section",
    ".eighteen-section",
    ".nineteen-section",
    ".twenty-section"
];
let show=section[0];
function hide_all_except_first(){
    except_one=section.slice(0,section.length-1);
    except_one.forEach((part)=>$(part).slideUp());
    change(19,0);
}
let change= function(from,to){
    $(section[from]).slideUp();
    $(section[to]).slideDown();
}
hide_all_except_first();
$(document).ready(function(){
    /*
    *toggle button
    */
   
   
    $(".show_hide").on("click",function(){
        $("nav").slideToggle();
    });
});
