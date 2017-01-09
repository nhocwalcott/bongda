jQuery(function($) {
  
  var pluginUrl   = $('.themeum-style-chooser').data('pluginurl');
  var themeUrl    = $('.themeum-style-chooser').data('stylesheeturl');
  var stylesheet  = $('.themeum-style-chooser').data('stylesheet');
  var presets     = $('.themeum-style-chooser ul.presets li');
  
  //Toggle
  $('.themeum-style-chooser .toggler').on('click', function(event){
    event.preventDefault();
    $(this).closest('.themeum-style-chooser').toggleClass('opened');
  });

  //Change Preset
  $('.themeum-style-chooser ul.presets li a').on('click', function(event){
    event.preventDefault();
    var currentPreset = $(this).parent().data('preset');
    presets.removeClass('active');
    $(this).parent().addClass('active');
    $('#header .logo').find('img').removeAttr('src').attr('src', themeUrl + '/assets/images/presets/preset'+ currentPreset +'/logo.png')
    $('#themeum_preset1-css').removeAttr('href').attr('href', themeUrl + '/assets/css/presets/preset' + currentPreset + '.css');
  });

});