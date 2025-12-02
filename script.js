javascript
// Example: Show an alert when the page loads
window.onload = function() {
  alert("Welcome to my website!");
};

// Example: Change text when button is clicked
function changeText() {
  document.getElementById("demo").innerText = "Text changed by JavaScript!";
}

// galery codes
const items = document.querySelectorAll('.item');
let idx = 0;
function show(i){
  items.forEach((it, j)=> it.style.opacity = j===i ? '1' : '0.08');
}
document.getElementById('next').onclick = ()=> show(++idx % items.length);
document.getElementById('prev').onclick = ()=> show((--idx + items.length) % items.length);
// autoplay
setInterval(()=> show(++idx % items.length), 4000);

        // galery codes

        // contac codes start
       
// contact codes end



