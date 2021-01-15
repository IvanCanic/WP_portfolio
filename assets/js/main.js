$(document).ready(function () {

    $('.fl').click(function(e) {
        e.preventDefault();
        var name = $(this).attr('data-filter');
        if (name=='all'){
            $('.all').show('2000');
        } else {
            $('.all').not('.'+ name).hide('2000');
            $('.all').filter('.'+ name).show('2000');
        }
    });

    $('.fl').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

});




mybutton = document.querySelector('.send-up');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// Hamburger menu

let toggle = document.querySelector('.nav-toggle');
let menu = document.querySelector('.nav-menu');
let item = document.querySelectorAll('.nav-menu li');

toggle.addEventListener('click', () => {
  menu.classList.toggle('open');
});

item.forEach(a => {
  a.addEventListener('click', () => {
    menu.classList.remove('open');
  });
});

// Show search modal

let searchModal = document.querySelector('#s-modal');
let searchBtn = document.querySelector('#search-modal');

searchBtn.addEventListener('click', () => {
    searchModal.classList.toggle('open');
});


