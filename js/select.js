	;(function(w,$){
  var selects =  $('form').find('select'),
      input   =  $('input');
  
  selects.bind('change',function(e){
    var string="";  
   for(var i =0,l=selects.length;i<l;i++){
     string+=selects[i].value+" ";
   }
    input.val(string);
  });
  
})(window,$);