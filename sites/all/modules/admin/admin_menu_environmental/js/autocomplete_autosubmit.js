/**
 * @file
 * JS Autosubmit prototype for our masquerade form in the admin menu.
 */

(function ($) {
  if (typeof Drupal.jsAC != 'undefined') {
    // Autosubmit autocomplete form with class auto_submit
    Drupal.jsAC.prototype.select = function (node) {
      this.input.value = $(node).data('autocompleteValue');
      if(jQuery(this.input).hasClass('auto_submit')){
        this.input.form.submit();
      }
    };
  };
})(jQuery);
