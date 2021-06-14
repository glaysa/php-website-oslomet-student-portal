
let toggle = document.getElementById('btn-toggle');
let elements = document.getElementsByClassName('category-wrapper');

$(document).ready(function () {
   changeMenuToggleIcon();
   removeMaxWidth();
   removeMaxWidthOnWindowResize();
   updateActiveLink();
   updatePageTitle();
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

/* Updates page title based on the clicked link */
function updatePageTitle(){
   const currentLocation = location.href;
   const links = document.querySelectorAll('body a');
   for(let link of links) {
      if(link.href === currentLocation) {
         console.log(link.innerText);
         document.title = link.innerText;
         break;
      }
   }
}