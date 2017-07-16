(function($){

  wp.customize('er_header_show_search', function(value) {
    value.bind(function(newVal) {
      if (newVal) {
        $("#top-search").show();
      } else {
        $("#top-search").hide();
      }
    });
  });

  wp.customize('er_header_show_cart', function(value) {
    value.bind(function(newVal) {
      if (newVal) {
        $("#top-cart").show();
      } else {
        $("#top-cart").hide();
      }
    });
  });

})(jQuery);
