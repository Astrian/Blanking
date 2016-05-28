resized();

$(window).resize(function(){resized()});

function resized() {
  $(".nav-bar").width('100%');
  if ($(window).width()<= 992 ){
    $('.websiteTitle').css('text-align','left')
    $(".pagenav").css('display','none')
    $(".nav-bar-action").css('display','block')
    $(".backbutton").removeClass('text-right')
  }else if ($(window).width()> 992 ){
    $(".pagenav").css('display','block')
    $(".websiteTitle").css('display','block')
    $(".nav-bar-action").css('display','none')
    $('.websiteTitle').css('text-align','right')
    $(".backbutton").addClass('text-right')
  }
}
function openMenu() {
  console.log("Open Menu")
  $(".pagenav").css('display','block')
  $(".websiteTitle").css('display','none')
}
function closeMenu() {
  $(".pagenav").css('display','none')
  $(".websiteTitle").css('display','block')
}