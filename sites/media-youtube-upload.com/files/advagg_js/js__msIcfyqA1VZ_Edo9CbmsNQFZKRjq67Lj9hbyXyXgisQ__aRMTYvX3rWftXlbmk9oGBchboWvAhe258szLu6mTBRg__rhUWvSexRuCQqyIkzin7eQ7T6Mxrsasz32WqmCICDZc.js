/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/filter/filter.js. */
(function($){function updateFilterHelpLink(){var $link=$(this).parents('.filter-wrapper').find('.filter-help > a'),originalLink=$link.data('originalLink');if(!originalLink){originalLink=$link.attr('href');$link.data('originalLink',originalLink)};$link.attr('href',originalLink+'/'+$(this).find(':selected').val())};$(document).on('change','.filter-wrapper select.filter-list',updateFilterHelpLink);Drupal.behaviors.filterGuidelines={attach:function(context){$(context).find('.filter-wrapper select.filter-list').once('filter-list',updateFilterHelpLink)}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/filter/filter.js. */