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

  const src = img.src;

  if (src.includes("unfilled")) {
    img.src = "images/heart.png";
  } else {
    img.src = "images/heart_unfilled.png";
  }
}
