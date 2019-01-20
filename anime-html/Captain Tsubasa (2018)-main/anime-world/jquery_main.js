
$(document).ready(function(){
       
$("#display").click(function(){
    $("#ne").fadeIn(); 
});

            
$(".ic").click(function(){
  if ($(".ic").css("display" , "block")) {
    $(this).css("display", "none");
  }else{
   $(this).css("display","block");
  }
}); 
$("#myInput").change(function() {
  $(this).blur();
});
$("#myInput").click(function() {
  $(".ic").hide();
});
$("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
}); 
$(document).mouseup(function(e) 
{
  var container = $("#ne");
  if (!container.is(e.target) && container.has(e.target).length === 0) 
  {
    container.hide();
  }
  if ($(".ic").css("display" , "block")) {
  $(this).css("display", "none");
}
else{
 $(this).css("display","block");
}
});


});