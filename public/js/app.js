$(document).ready( () => {
  var industry = '';
  var numEmployees = '';

  $('#st').hide();

  var scrolling = false;
  $(document).scroll( () => {
    if (!scrolling) {
      if ($(this).scrollTop() > 100) {
          //$('#nav').css('background-color', 'rgba(255,255,255,1)');
          $('#nav').removeClass('animation-fadeOut');
          $('#nav').addClass('animation-fadeIn');
      } else {
        $('#nav').removeClass('animation-fadeIn');
        $('#nav').addClass('animation-fadeOut');
          //$('#nav').css('background-color', 'rgba(255,255,255,0)');
      }

      if ($(this).scrollTop() == $("a[name='pane2']").offset().top) {
          $('#st').fadeIn();
      }
      scrolling = true;
      setTimeout( () =>{
        scrolling=false;
      }, 10);
    }
  });

  //Attempt to scroll when an industry is selected
  $('#industry-select').change(() => {
    industry = $('#industry-select').val();
    if (numEmployees != '' && industry != '') {
      scrollToAnchor('pane2');
    }
  });

  //Attempt to scroll when done typing
  var typingTimer;
  $('#employee-input').on('keyup', () => {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(() => {
      numEmployees = $('#employee-input').val();
      if (industry != '' && numEmployees != '') {
        scrollToAnchor('pane2');
      }
    }, 500);
  });

  $('#employee-input').on('keydown', () => {
    clearTimeout(typingTimer);
  });

  $('.activate-button').click( () => {
    scrollToAnchor('pane2');
  });


});

function scrollToAnchor(anchorname) {
  var anchorTag = $("a[name='"+ anchorname +"']");
  $('html, body').animate({scrollTop: (anchorTag.offset().top)}, 'slow');
}


function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
