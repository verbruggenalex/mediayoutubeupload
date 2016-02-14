/**
 * @file
 * JS Feature in the works that will provide live coloring.
 */

(function ($) {
  // Act on color change when live preview is enabled
  Drupal.behaviors.AdminMenuEnvironmentalLivePaint = {
    attach: function (context, settings) {
      // TODO: remove on
      // TODO: On checkbox change, bind our function to the input of colors for live previewing
      // TODO: On checkbox change, switch colors to color values in form to set live preview
      if ($('#edit-colors-admin-menu-environmental-color-preview').val() == '1') {
        $('.jquery_colorpicker .inner_wrapper .color_picker input').change(function(){
          var clr = $(this).val();
          //console.log.once().(clr);
        })
      }
      // TODO: Remove CSS whenever live preview is switched of
    }
  };
})(jQuery);
