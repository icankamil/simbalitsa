
var YourParam="sunshine";

$(document).ready(function() {
  $("#indikator").change(function(){
    if ($(this).val()!='') {
      window.location.href=$(this).val();
    }
  });
  $("#subindikator").change(function(){
    if ($(this).val()!='') {
      window.location.href=$(this).val();
    }
  });
});

