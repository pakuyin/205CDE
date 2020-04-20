
window.onload = init;

function init() {
   document.forms[0].onsubmit = function() {
      if (this.checkValidity()) alert("Thank for your ordering. Your food will be deliver soon.");
      return false;
   }
   
}

   
