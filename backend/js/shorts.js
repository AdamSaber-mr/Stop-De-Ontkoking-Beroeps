const shorts = document.querySelectorAll('.short');
let current = 0;
let canScroll = true;

const SCROLL_THRESHOLD = 30; 
const COOLDOWN = 700;    

function showShort(next, direction) {
  if (current === next) return;

  shorts.forEach(short => short.classList.remove('active', 'forward', 'backward'));

  if (direction === 'down') {
    shorts[current].classList.add('forward'); 
    shorts[next].classList.add('active');    
  } else {
    shorts[current].classList.add('backward');
    shorts[next].classList.add('active');
  }

  current = next;
}

function nextShort() {
  if (!canScroll) return;
  canScroll = false;

  let next = current + 1;
  if (next >= shorts.length) next = 0;

  showShort(next, 'down');
  setTimeout(() => canScroll = true, COOLDOWN);
}

function prevShort() {
  if (!canScroll) return;
  canScroll = false;

  let next = (current - 1 + shorts.length) % shorts.length;
  showShort(next, 'up');
  setTimeout(() => canScroll = true, COOLDOWN);
}

function onWheel(e) {
  e.preventDefault();

  if (!canScroll) return;

  const delta = e.deltaY;
  if (Math.abs(delta) < SCROLL_THRESHOLD) return;

  if (delta > 0) nextShort();
  else prevShort();
}

window.addEventListener('wheel', onWheel, { passive: false });

// touch support
let touchStartY = null;
window.addEventListener('touchstart', e => {
  touchStartY = e.touches[0].clientY;
}, { passive: true });

window.addEventListener('touchmove', e => {
  if (touchStartY === null) return;
  const dy = touchStartY - e.touches[0].clientY;
  if (!canScroll) return;

  if (Math.abs(dy) > 50) { 
    e.preventDefault();
    if (dy > 0) nextShort();
    else prevShort();
    touchStartY = null;
  }
}, { passive: false });


function heart() {
  const container = document.getElementById("favroute");
  const img = container.querySelector("img");

  if (img.src.includes("unfilled")) {
    img.src = "images/heart.png";
  } else {
    img.src = "images/heart_unfilled.png";
  }

  img.classList.add("animated");

  img.addEventListener("animationend", () => {
    img.classList.remove("animated");
  }, { once: true });
}


function show_recepy_window() {
  const shorts_container = document.getElementById("short_container");
  const recepy_container = document.getElementById("recepy");

  // Hide shorts
  shorts_container.style.display = "none";

  // Show recipe container and trigger animation
  recepy_container.style.display = "block";
  recepy_container.classList.remove("hide");
  recepy_container.classList.add("show");
}

function hide_show_recepy_window() {
  const shorts_container = document.getElementById("short_container");
  const recepy_container = document.getElementById("recepy");

  recepy_container.classList.remove("show");
  recepy_container.classList.add("hide");

  recepy_container.addEventListener("animationend", () => {
    recepy_container.style.display = "none";
    shorts_container.style.display = "block";
  }, { once: true });

  
}


function toggle_recepy_window() {
  const recepy_container = document.getElementById("recepy");

  if (recepy_container.style.display === "block") {
    hide_show_recepy_window();
  } else {
    show_recepy_window();
  }
}
