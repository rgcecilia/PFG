
//   DAW M12 PFG
//   Raúl Gutiérrez Cecilia
//   Moises Meso Perez


(function($) {
    
  // Cierra la barra de navegacion al seleccionar opcion
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Convierte la barra de navegacion en menu
  var navbarCollapse = function() {
    if ($("#navbar").offset().top > 100) {
      $("#navbar").addClass("navbar-shrink");
    } else {
      $("#navbar").removeClass("navbar-shrink");
    }
  };

})(jQuery);
