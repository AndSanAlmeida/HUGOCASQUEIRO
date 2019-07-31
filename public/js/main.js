//Sticky Navbar
function sticky() {
    $(window).scroll(function() {
        var $nav = $('#nav');

        $(this).scrollTop() > 640 ? (
            $nav.addClass("sticky"), 
            $nav.removeClass("navbar")
        ) : (
            $nav.removeClass("sticky"), 
            $nav.addClass("navbar")
        )
    })
}

//Responsive Navbar
function navResponsive() {
  var $menuRevealBtn = $('#nav-toggler');
  var $menuHideNavBtn = $('#close-sidenav');
  var $sideNav = $('#sidenav');
  var $sideNavMask = $('#side-nav-mask');
  
  $menuRevealBtn.on('click', function() {
    $sideNav.addClass('visible');
    $sideNavMask.addClass('visible');
  });
  
  $sideNavMask.on('click', function() {
    $sideNav.removeClass('visible');
    $sideNavMask.removeClass('visible');
  });

  $menuHideNavBtn.on('click', function() {
    $sideNav.removeClass('visible');
    $sideNavMask.removeClass('visible');
  });
}

// Slider
function slider() {
  var timer = setInterval(move_to_next, 5000),
      $slider = $('#carousel'),
      $sliderUl = $slider.find(".carousel-list"),
      $sliderLi = $sliderUl.find("li"),
      count = $sliderLi.length,
      $dots = $slider.find(".carousel-dots");

  // Make the first slider active
  $sliderLi.first().addClass("active");
  // Count and add nav dots
  $sliderLi.each(function(){
        $dots.append("<li/>");
    }
  );  
  $dots.find("li").first().addClass("active");
  // Change slider on dot click
  $dots.find("li").click(function(){
    var $this = $(this);
    var i = $this.index();
    next(i);  
  });
  
  // this resets time between slider, e.g. if you click on a slider, 
  // you don't want it to slide over to the next because the timer 
  // has been triggered
  function restart_interval(){
      clearInterval(timer);
      timer = setInterval(move_to_next, 5000);  
  }
  // Wor out whats next 
  function move_to_next()
  {
    var i;
    if($sliderUl.find("li").last().hasClass("active"))
      i=0;
    else
      i= $sliderUl.find("li.active").next().index();
    next(i);
  }
  
  function next(i){
        var $this = $sliderLi.eq(i);
          $dots.find("li.active").removeClass("active");
          $dots.find("li").eq(i).addClass("active");
          $this.addClass("active");
          $sliderUl.find("li.active").removeClass("active");
          $sliderLi.eq(i).addClass("active");
          restart_interval(); 
  } 

  // Pause the slider in hover
  $sliderUl.hover(
    function() {
      clearInterval(timer);
    }, function() {
      restart_interval();
    }
  );  
}

//Isotope
// ISOTOPE
function isotope() {
  $('.isotope-list').isotope({
    itemSelector: '.isotope-item',
    filter: "*"
  });

  $('.isotope-sorters li').click(function(){
    var selector = $(this).attr('data-filter');
    
    $('.isotope-list').isotope({
      filter: selector,
    })
    
    //changing active class with click event
    $(this).removeClass('active');
    $(this).addClass('active');
  });
} 


// Inicializa funções ONLOAD
$(document).ready(function(){
    sticky();
    navResponsive();
    slider();
    isotope();
}); 