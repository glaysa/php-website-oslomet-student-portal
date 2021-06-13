
let toggle = document.getElementById('btn-toggle');
let elements = document.getElementsByClassName('category-wrapper');

$(document).ready(function () {
   changeMenuToggleIcon(toggle);
   removeMaxWidth(elements);
   $(window).on('resize', () => removeMaxWidth(elements));
});

/* Changes the toggle icon on menu for smaller devices */
function changeMenuToggleIcon(toggle){
   toggle.addEventListener('click', () => {
      toggle.classList.toggle('on');
   });
}

/* Removes a css class from an element when on smaller devices */
function removeMaxWidth(elements){
   for(let e of elements) {
      if(window.innerWidth < 992) {
         e.classList.add('removeMaxW');
      } else {
         e.classList.remove('removeMaxW');
      }
   }
}