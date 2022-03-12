// Sticky Navigation Menu JS Code
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() {
  if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }

}
function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("email must be filled out");
        return false;
    }
}