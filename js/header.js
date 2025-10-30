const header = document.getElementById('header');

window.addEventListener('scroll', () => {
if (window.scrollY > 50) {
    header.classList.add('shrink');
} else {
    header.classList.remove('shrink');
}});


document.addEventListener("DOMContentLoaded", () => {
  const account = document.getElementById("acount");
  const dropdown = document.getElementById("header_ul");

  account.addEventListener("click", (e) => {
    e.stopPropagation(); 
    dropdown.classList.toggle("show");
  });

  document.addEventListener("click", (e) => {
    if (!account.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.remove("show");
    }
  });
});