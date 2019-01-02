/*Navbar burger*/
document.addEventListener('DOMContentLoaded', function () {
  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {
    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
/*Navbar burger*/
/*Connected/Disconnected/Sign In*/
//Modal
$(document).ready(function() {
  //Open Log
  $('#connect').click(function() {
    $('#modal_log').css(
      {
        'display':'block'
      }
    );
  });
  //Close log
  $('#close_log').click(function() {
    $('#modal_log').css(
      {
        'display':'none'
      }
    );
  });
});
//Connected User
$(document).ready(function(){
  $('#login').submit(function(e){
    e.preventDefault();
    var data = {
      user: $('#user').val(),
      pwd: $('#pwd').val()
    };
    $.ajax({
      url: "/src/php/other/connected.php",
      type: 'POST',
      data: data,
      dataType: 'json',
        success: function(data) {
          if (data.valid == 1){
            $('#log_success').css({'display' : 'block'});
            setTimeout(function(){
              $('#log_success').css({'display' : 'none'});
              $('#user').val("");
            	$('#pwd').val("")
          	}, 2000);
            setTimeout(function(){
              $('#modal_log').css(
                {
                  'display':'none'
                }
              )
            },500);
            setTimeout(function(){
              location.reload();
            },500);
          }
          else
          {
            $('#log_warning').css({'display' : 'block'});
            setTimeout(function(){
              $('#log_warning').css({'display' : 'none'});
              $('#user').val("");
            	$('#pwd').val("")
          	}, 2000);
          }
        },
        error: function(request, status, error){
          alert(request.responseText);
        }
    });
  });
});

//Disconnected User
$(document).ready(function() {
  $('#disconnect').click(function() {
    $.ajax({
      url: "/src/php/user/disconnected.php",
      type: 'POST'
    });
    setTimeout(function(){
      location.reload();
    },500);
  });
});

//Sign In
$(document).ready(function() {
  $('#signin').submit(function(e){
    e.preventDefault();
    var data = {
      name: $('#name').val(),
      firstname: $('#firstname').val(),
      phone: $('#phone').val(),
      mail: $('#mail').val(),
      adress: $('#adress').val(),
      gender: $('input[type=radio][name=gender]:checked').attr('value'),
      password: $('#password').val()
    };
    $.ajax({
      url: "/src/php/other/registration.php",
      type: 'POST',
      data: data,
      dataType: 'json',
        success: function(data){
          $('#sign_success').css({'display' : 'block'});
          	setTimeout(function(){
            	$('#sign_success').css({'display' : 'none'});
              $('#name').val("");
              $('#firstname').val("");
              $('#phone').val("");
              $('#mail').val("");
              $('#adress').val("");
              $('#password').val("")
          	}, 1000);
            setTimeout(function(){
              window.history.back();
            },500);
        },
        error: function(data){
          $('#sign_success').css({'display' : 'block'});
          	setTimeout(function(){
            	$('#sign_success').css({'display' : 'none'});
              $('#name').val("");
              $('#firstname').val("");
              $('#phone').val("");
              $('#mail').val("");
              $('#adress').val("");
              $('#password').val("")
          	}, 1000);
            setTimeout(function(){
              window.history.back();
            },500);
        }
    });
  });
});
/*Connected/Disconnected*/

/*Carousel*/
var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
