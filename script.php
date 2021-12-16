<script type="text/javascript">
      $(document).ready(function(){
            $('#fullpage').fullpage({
                anchors: ['first-section','second-section','third-section','fourth-section'],
                sectionsColor: ['#fff','#fff','#f4f4f4','#f1f3eb'],
                navigation: true,
                navigationPosition:'right',
                navigationTooltips: ['Brand-Story','Order-Meal','Best-Menu','Review-Paper']
            });
        });
  </script>
<script>
    window.onload = function () {
        $('.slider1').jdSlider({
            wrap: '.slide-inner',
            isAuto: true,
            isLoop: true
        });  
        $('.slider2').jdSlider({
                wrap: '.slide-inner2',
                slideShow: 4,
                slideToScroll: 1,
                isAuto: true,
                isLoop: true,
                responsive: [{
                    viewSize: 768,
                    settings: {
                        slideShow: 4
                    }
                }]
            });
    };
    
    $('.center').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
})
    </script>
   
  <!-- FancyBox : Layer Popup --> 
  <script type="text/javascript">
    $(document).ready(function() {
       $(".fancybox").fancybox();
    });
  </script> 

<!-- 팝업-->
<script type="text/javascript">
  function visibleRadio(){
    if(document.all["floatMenu"].style.display =="block"){
      document.all["floatMenu"].style.display = "none";
    }else{
      document.all["floatMenu"].style.display = "block";
    }
  }
  $(document).ready(function() {
  
    var floatPosition = parseInt($("#floatMenu").css('top'));

    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      var newPosition = scrollTop + floatPosition + "px";
    
      $("#floatMenu").stop().animate({
        "top" : newPosition
      },{
	        'duration' : 500,
	        'easing' : 'easeInOutCubic',
	        'complete' : function() {
		      console.log('이동 완료하였습니다.');
	      }
    }).scroll(); 
  }); 
  });
  </script>
</body>
</html>

