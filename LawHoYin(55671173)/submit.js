
window.onload = init;

function init() {
   document.forms[0].onsubmit = function() {
      if (this.checkValidity()) alert("Thank for your submission. We will contact you very soon.");
      return false;
   }
   
}

   
