$(document).ready(function(){
    $('.parallax').parallax();
  });

 
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(document).ready(function(){
    $('.materialboxed').materialbox();
    $(".dropdown-trigger").dropdown();
    $(".dropdown-content>li>a").css("color", themeColor);
  });
 
 

 var clipboard = new ClipboardJS('#gmail-logo');

 clipboard.on('success', function(e) {
     toast.style.display = "flex"
     console.info('Text:', e.text);
     console.info('Trigger:', e.trigger);
 
     e.clearSelection();
 });
 
 clipboard.on('error', function(e) {
     console.error('Action:', e.action);
     console.error('Trigger:', e.trigger);
 });

 
 var footer_clipboard = new ClipboardJS('#footer-gmail-logo');

 footer_clipboard.on('success', function(e) {
     footer_toast.style.display = "flex"
     console.info('Text:', e.text);
     console.info('Trigger:', e.trigger);
 
     e.clearSelection();
 });
 
 footer_clipboard.on('error', function(e) {
     console.error('Action:', e.action);
     console.error('Trigger:', e.trigger);
 });