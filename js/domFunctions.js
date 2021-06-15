
let toggle = document.getElementById('btn-toggle');
let elements = document.getElementsByClassName('category-wrapper');

$(document).ready(function () {
   changeMenuToggleIcon();
   removeMaxWidth();
   removeMaxWidthOnWindowResize();
   updateActiveLink();
});

/* Changes the toggle icon on menu for smaller devices */
function changeMenuToggleIcon(){
   toggle.addEventListener('click', () => {
      toggle.classList.toggle('on');
   });
}

/* Removes a css class from an element when on smaller devices */
function removeMaxWidth(){
   for(let e of elements) {
      if(window.innerWidth < 992) {
         e.classList.add('removeMaxW');
      } else {
         e.classList.remove('removeMaxW');
      }
   }
}

function removeMaxWidthOnWindowResize(){
   $(window).on('resize', () => removeMaxWidth(elements));
}

/* Applies 'active' class to links in header menu */
function updateActiveLink(){
   const currentLocation = location.href;
   const menuItems = document.querySelectorAll('.navbar-nav a');
   for(let link of menuItems) {
      if(link.href === currentLocation) {
         link.classList.add('active');
      }
   }
}
