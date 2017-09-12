(function(){

function validateEmail(email) { 
     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(email);
  }
  
  $(function () {

    $('.link-popup').click(function(ev){
      ev.preventDefault();
      $('.popup-layer').fadeIn();
      $($(this).attr('href').slice($(this).attr('href').indexOf('#'))).fadeIn();
      
    });
    $('.popup-layer').click(function(){
      $('.popup-layer').fadeOut();
      $('.popup-container').fadeOut();
    });
    $('.close-popup').click(function(ev){
      ev.preventDefault();
      $('.popup-layer').fadeOut();
      $('.popup-container').fadeOut();
    })
    
    $('#menu').click(function(ev){
      $('.all').toggleClass('active');
      ev.preventDefault();
      ev.stopPropagation();
    });
    $('.all').click(function(ev){
      $('.all').removeClass('active');
      ev.stopPropagation();
    });
    $('nav').click(function(ev){
      ev.stopPropagation();
    });
    
    
    
    opts1 = [100,200,300,400,500,600,700,800,900,1000];
    $("#slider1").slider({
      value: 5,
      orientation: "horizontal",
      range: "min",
      min: 0,
      max: opts1.length-1,
      slide: function( event, ui ) {
        var id = $(this).attr("id").substr('slider'.length);
        jQuery(".amount"+id).val(opts1[ui.value]);
        jQuery(this).find('.ui-slider-handle').text( "$"+opts1[ui.value]);
      }
    }).draggable();
    $("#slider1").children(".ui-slider-handle").text( "$"+opts1[$("#slider1" ).slider( "value" )]);
    
    jQuery( ".amount1" ).val( opts1[$("#slider1" ).slider( "value" )] );
    
  

  $('.contact-form input').focus(function(){
    $(this).parents('.form-group').removeClass('has-error');
  });
  
  $('.help-section h3 a').click(function(ev){
    ev.preventDefault();
    $(this).parents('.help-section').find('.active').removeClass('active');
    $(this).parent().parent().addClass('active');
  });
  
  var validateInput = function(input){
    input.parents('.form-group, .checkbox').find('.success').remove();
    if(input.attr('type')=='email'&&!validateEmail(input.val())) { input.parents('.form-group').addClass('has-error'); return false; }
    else if(input.attr('type')=='checkbox'&&!input.prop('checked')) { input.parents('.checkbox').addClass('has-error'); return false; }
    else if(input.attr('type')!='checkbox'&&input.val()=='') { input.parents('.form-group').addClass('has-error'); return false; }
    else {
      input.parents('.form-group').append('<span class="success"></span>');
    }
    return true;
  }
  $('.validate input').focus(function(){
    $(this).parents('.form-group, .checkbox').removeClass('has-error');
    $(this).parents('.form-group .success, .checkbox .success').remove();
  });
  $('.validate input').blur(function(){
    validateInput($(this));
  });
  $('.validate').submit(function(){
    result=true;
    var inputs=$(this).find('input[type=text], input[type=checkbox], input[type=email]');
    for(i=0;i<inputs.length;i++) { if(!validateInput(inputs.eq(i))) { result=false; }; }
    return result;
  });
  
  $('.faq-page ul h3 a').click(function(ev){  
    $('.faq-page ul li').removeClass('active');
    $(this).parents('.faq-page ul li').toggleClass('active');
    ev.preventDefault();
  })
  
  
  $('#contact #contactName').attr("placeholder", "Your name");
  $('#contact #contactPhone').attr("placeholder", "Your phone");
  $('#contact #contactEmail').attr("placeholder", "Your email");
  $('#contact #contactMessage').attr("placeholder", "Message");
    //$('.form-group.select').selectitem();
  $('#contact form').submit(function() {
      result = true;
      if ($('#contactEmail').val() == '' || !validateEmail($('#contactEmail').val())) {
        $('#contactEmail').addClass('error-input');
        $('#contactEmailError').show();
        result = false;
      }
      if ($('#contactPhone').val() == '') {
        $('#contactPhone').addClass('error-input');
        $('#contactPhoneError').show();
        result = false;
      }
      if ($('#contactName').val() == '') {
        $('#contactName').addClass('error-input');
        $('#contactNameError').show();
        result = false;
      }
      if ($('#contactMessage').val() == '') {
        $('#contactMessage').addClass('error-input');
        $('#contactMessageError').show();
        result = false;
      }
      return result;
    });

    $('#contact input').focus(function(){
    $(this).removeClass('error-input');
    });
    $('#contact textarea').focus(function(){
      $(this).removeClass('error-input');
    });

  });
})();