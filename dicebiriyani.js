$(document).ready(function(){
  $("#sub_mode_changer_btn").click(function(){
    $(".main_dark_light").toggleClass("mar_r_210");
  });
});



$(document).ready(function(){
  $(".dark_btn").click(function(){
    $("body, .section_side, .sub_mode_changer button, .dark_light, .banner_buttons .view_btn, .banner_buttons .order_btn").addClass("dark_mode");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $("body, .section_side, .sub_mode_changer button, .dark_light, .banner_buttons .view_btn, .banner_buttons .order_btn").removeClass("dark_mode");
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


$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".logo_light").addClass("hidden");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".logo_light").removeClass("hidden");
  });
});

$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".logo_dark").addClass("visible");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".logo_dark").removeClass("visible");
  });
});


$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".sub_half_circle").addClass("sub_half_circle_dark");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".sub_half_circle").removeClass("sub_half_circle_dark");
  });
});

$(document).ready(function(){
  $(".dark_btn").click(function(){
    $(".section_slider").addClass("section_slider_dark");
  });
});
$(document).ready(function(){
  $(".light_btn").click(function(){
    $(".section_slider").removeClass("section_slider_dark");
  });
});