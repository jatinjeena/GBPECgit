(function($){
	
//<![CDATA[

	// this funtion puts video thubmnail in each Vid Div [for YouTube] 
               
               $(".yvid").each(function(){
                 $this = $(this);
                 var vid = $this.attr('vid');
                 $this.html('<img class="vidthumb" src="http://img.youtube.com/vi/'+vid+'/hqdefault.jpg" style="width:inherit;height:inherit;"></img>                    <span class="playb"></span>');
                 
                });
               //Below funtion embeds video onclick
               $(".yvid").on('click',function(){
                  $this = $(this);
                  var vid = $this.attr('vid');
                  var w = $this.width();     //change video width according to parent div
                  var h = $this.height();    //change video height according to parent div
                  var vw =  w?w:640;
                  var vh = h?h:360;
                  $this.html('<iframe width="'+vw+'" height="'+vh+'" src="//www.youtube.com/embed/'+vid+'?autoplay=1"  frameborder="0"                                   allowfullscreen="1" autohide="1"></iframe>');
                });
//]]>
})(jQuery);