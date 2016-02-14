(function ($) {

/**
 * Attaches the autocomplete behavior to all required fields.
 */
Drupal.behaviors.autocomplete = {
  attach: function (context) {
    var $context = $(context);
    var acdb = [];
    $context.find('input.autocomplete').once('autocomplete', function () {
      var uri = this.value;
      if (!acdb[uri]) {
        acdb[uri] = new Drupal.ACDB(uri);
      }
      var $input = $context.find('#' + this.id.substr(0, this.id.length - 13))
        .attr('autocomplete', 'OFF')
        .attr('aria-autocomplete', 'list');
      $context.find($input[0].form).submit(Drupal.autocompleteSubmit);
      $input.parents('.form-item')
        .attr('role', 'application')
        .append($('<span class="element-invisible" aria-live="assertive"></span>')
          .attr('id', $input.attr('id') + '-autocomplete-aria-live')
      );
      new Drupal.jsAC($input, acdb[uri], $context);
    });
  }
};

/**
 * Prevents the form from submitting if the suggestions popup is open
 * and closes the suggestions popup when doing so.
 */
Drupal.autocompleteSubmit = function () {
  return $('.form-autocomplete > .dropdown').each(function () {
    this.owner.hidePopup();
  }).length == 0;
};

/**
 * Highlights a suggestion.
 */
Drupal.jsAC.prototype.highlight = function (node) {
  if (this.selected) {
    $(this.selected).removeClass('active');
  }
  $(node).addClass('active');
  this.selected = node;
  $(this.ariaLive).html($(this.selected).html());
};

/**
 * Unhighlights a suggestion.
 */
Drupal.jsAC.prototype.unhighlight = function (node) {
  $(node).removeClass('active');
  this.selected = false;
  $(this.ariaLive).empty();
};

/**
 * Positions the suggestions popup and starts a search.
 */
Drupal.jsAC.prototype.populatePopup = function () {
  var $input = $(this.input);
  // Show popup.
  if (this.popup) {
    $(this.popup).remove();
  }
  this.selected = false;
  this.popup = $('<div class="dropdown"></div>')[0];
  this.popup.owner = this;
  $input.parent().after(this.popup);

  // Do search.
  this.db.owner = this;
  this.db.search(this.input.value);
};

/**
 * Fills the suggestion popup with any matches received.
 */
Drupal.jsAC.prototype.found = function (matches) {
  // If no value in the textfield, do not show the popup.
  if (!this.input.value.length) {
    return false;
  }

  // Prepare matches.
  var ul = $('<ul class="dropdown-menu"></ul>');
  var ac = this;
  ul.css({
    display: 'block',
    right: 0
  });
  for (var key in matches) {
    $('<li></li>')
      .html($('<a href="#"></a>').html(matches[key]).click(function (e) { e.preventDefault(); }))
      .mousedown(function () { ac.select(this); })
      .mouseover(function () { ac.highlight(this); })
      .mouseout(function () { ac.unhighlight(this); })
      .data('autocompleteValue', key)
      .appendTo(ul);
  }

  // Show popup with matches, if any.
  if (this.popup) {
    if (ul.children().length) {
      $(this.popup).empty().append(ul).show();
      $(this.ariaLive).html(Drupal.t('Autocomplete popup'));
    }
    else {
      $(this.popup).css({ visibility: 'hidden' });
      this.hidePopup();
    }
  }
};

Drupal.jsAC.prototype.setStatus = function (status) {
  var $throbber = $(this.input).parent().find('.glyphicon-refresh, .autocomplete-throbber').first();
  var throbbingClass = $throbber.is('.autocomplete-throbber') ? 'throbbing' : 'glyphicon-spin';
  switch (status) {
    case 'begin':
      $throbber.addClass(throbbingClass);
      $(this.ariaLive).html(Drupal.t('Searching for matches...'));
      break;
    case 'cancel':
    case 'error':
    case 'found':
      $throbber.removeClass(throbbingClass);
      break;
  }
};

// Save the previous autocomplete prototype.
var oldPrototype = Drupal.jsAC.prototype;

/**
 * Override the autocomplete constructor.
 */
Drupal.jsAC = function ($input, db, $context) {
  var ac = this;
  this.$context = $context;
  this.input = $input[0];
  this.ariaLive = $context.find('#' + this.input.id + '-autocomplete-aria-live');
  this.db = db;
  $input
    .keydown(function (event) { return ac.onkeydown(this, event); })
    .keyup(function (event) { ac.onkeyup(this, event); })
    .blur(function () { ac.hidePopup(); ac.db.cancel(); });
};

// Restore the previous prototype.
Drupal.jsAC.prototype = oldPrototype;

})(jQuery);
;/**/
(function ($, Drupal) {

  Drupal.BootstrapPassword = function (element) {
    var self = this;
    var $element = $(element);
    this.settings = Drupal.settings.password;
    this.$wrapper = $element.parent().parent();
    this.$row = $('<div class="row">').prependTo(this.$wrapper);

    // The password object.
    this.password = {
      $input: $element,
      $label: $element.parent().find('label'),
      $wrapper: $element.parent().addClass('col-sm-6 col-md-4 has-feedback').appendTo(self.$row)
    };
    this.password.$icon = $('<span class="glyphicon form-control-feedback"></span>').appendTo(this.password.$wrapper);

    // Strength meter.
    this.strength = {
      $label: $('<div class="label" aria-live="assertive"></div>').appendTo(this.password.$label),
      $progress: $('<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>').appendTo(this.password.$wrapper)
    };
    this.strength.$bar = this.strength.$progress.find('.progress-bar');

    // The confirmation object.
    this.confirm = {
      $input: this.$wrapper.find('input.password-confirm')
    };
    this.confirm.$wrapper = this.confirm.$input.parent().addClass('col-sm-6 col-md-4 has-feedback').appendTo(self.$row);
    this.confirm.$icon = $('<span class="glyphicon form-control-feedback"></span>');

    // Bind events.
    this.password.$input.on('keyup focus blur', function () {
      self.validateStrength();
    });
    this.confirm.$input.on('keyup blur', function () {
      self.validateMatch();
    });

    // Add password help at the of row.
    this.$helpBlock = $('<div class="help-block password-help"></div>').appendTo(this.$row);

    return this;
  };

  /**
   * Helper method to switch classes on elements based on status.
   *
   * @param {jQuery} $element
   *   The jQuery element to modify.
   * @param {string} type
   *   The name of the class to switch to. Can be one of: "danger", "info",
   *   "success" or "warning".
   * @param {string} prefix
   *   The prefix to use. Typically this would be something like "label" or
   *   "progress-bar".
   */
  Drupal.BootstrapPassword.prototype.switchClass = function ($element, type, prefix) {
    prefix = prefix + '-' || '';
    var types = prefix === 'has-' ? ['error', 'warning', 'success'] : ['danger', 'info', 'success', 'warning'];
    if (type) {
      type = types.splice($.inArray(type, types), 1).shift();
      $element.addClass(prefix + type);
    }
    $element.removeClass(prefix + types.join(' ' + prefix));
  };

  /**
   * Validates the strength of a password.
   */
  Drupal.BootstrapPassword.prototype.validateStrength = function () {
    var result = Drupal.evaluatePasswordStrength(this.password.$input.val(), Drupal.settings.password);

    // Ensure visibility.
    this.$helpBlock.show();
    this.strength.$label.show();
    this.strength.$bar.show();

    // Update the suggestions for how to improve the password.
    this.$helpBlock.html(result.message);

    // Only show the description box if there is a weakness in the password.
    this.$helpBlock[result.strength === 100 ? 'hide' : 'show']();

    // Update the strength indication text.
    this.strength.$label.html(result.indicatorText);

    // Adjust the length of the strength indicator.
    this.strength.$bar.attr('aria-valuenow', result.strength);
    this.strength.$bar.css('width', result.strength + '%');

    // Change the classes (color) of the strength meter based on result level.
    switch (result.indicatorText) {
      case this.settings.weak:
        this.switchClass(this.password.$wrapper, 'error', 'has');
        this.switchClass(this.strength.$label, 'danger', 'label');
        this.switchClass(this.strength.$bar, 'danger', 'progress-bar');
        this.password.$icon.addClass('glyphicon-remove').removeClass('glyphicon-warning-sign glyphicon-ok');
        break;

      case this.settings.fair:
      case this.settings.good:
        this.switchClass(this.password.$wrapper, 'warning', 'has');
        this.switchClass(this.strength.$label, 'warning', 'label');
        this.switchClass(this.strength.$bar, 'warning', 'progress-bar');
        this.password.$icon.addClass('glyphicon-warning-sign').removeClass('glyphicon-remove glyphicon-ok');
        break;

      case this.settings.strong:
        this.switchClass(this.password.$wrapper, 'success', 'has');
        this.switchClass(this.strength.$label, 'success', 'label');
        this.switchClass(this.strength.$bar, 'success', 'progress-bar');
        this.password.$icon.addClass('glyphicon-ok').removeClass('glyphicon-warning-sign glyphicon-remove');
        break;
    }
    this.validateMatch();
  };

  /**
   * Validates both original and confirmation passwords to ensure they match.
   */
  Drupal.BootstrapPassword.prototype.validateMatch = function () {
    var password = this.password.$input.val();

    // Passwords match.
    if (password && password === this.confirm.$input.val()) {
      this.switchClass(this.password.$wrapper, 'success', 'has');
      this.switchClass(this.confirm.$wrapper, 'success', 'has');
      this.$helpBlock.hide();
      this.strength.$label.hide();
      this.strength.$bar.hide();
      this.password.$icon.addClass('glyphicon-ok').removeClass('glyphicon-warning-sign glyphicon-remove');
      this.confirm.$icon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
    }
    // Passwords do not match.
    else if (password) {
      this.switchClass(this.confirm.$wrapper, 'error', 'has');
      this.confirm.$icon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
    }
    // No password.
    else {
      this.confirm.$icon.removeClass('glyphicon-ok glyphicon-remove');
      this.confirm.$input.val('');
      this.switchClass(this.confirm.$wrapper, '', 'has');
    }
  };

  /**
   * Overrides core JS for password strength and confirmation.
   *
   * Attach handlers to evaluate the strength of any password fields and to check
   * that its confirmation is correct.
   */
  Drupal.behaviors.password = {
    attach: function (context) {
      $('input.password-field', context).once('password', function () {
        new Drupal.BootstrapPassword(this);
      });
    }
  };

})(jQuery, window.Drupal);
;/**/
