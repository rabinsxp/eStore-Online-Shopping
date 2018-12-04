<link href="design/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="design/js/jquery.flexslider.js">
</script>
<script type="text/javascript">
  $(function(){
    SyntaxHighlighter.all();
  }
   );
  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
    }
                               );
  }
                );
</script>