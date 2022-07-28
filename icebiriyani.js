$(document).ready(function(){
  $("#sub_mode_changer_btn").click(function(){
    $(".main_dark_light").toggleClass("mar_r_210");
  });
});



$(document).ready(function(){
  $(".dark_btn").click(function(){
    $("body, .section_side, .sub_half_circle, .sub_mode_changer button, .dark_light, .banner_buttons .view_btn, .banner_buttons .order_btn").addClass("dark_mode");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $("body, .section_side, .sub_half_circle, .sub_mode_changer button, .dark_light, .banner_buttons .view_btn, .banner_buttons .order_btn").removeClass("dark_mode");
  });
});
$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".light button").addClass("dark_mode_btn");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".light button").removeClass("dark_mode_btn");
  });
});


$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".content_section h2, .CSSgal a, .content_section p, .banner_buttons .view_btn, .banner_buttons .order_btn  ").addClass("color_dark");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".content_section h2, .CSSgal a, .content_section p, .banner_buttons .view_btn, .banner_buttons .order_btn ").removeClass("color_dark");
  });
});