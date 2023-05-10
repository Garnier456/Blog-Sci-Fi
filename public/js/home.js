const wrapper = document.querySelector(".wrapper");
let isDown = false;
let startX, startY;
let scrollLeft, scrollTop;

wrapper.addEventListener("mousedown", (e) => {
  isDown = true;
  startX = e.pageX - wrapper.offsetLeft;
  startY = e.pageY - wrapper.offsetTop;
  scrollLeft = wrapper.scrollLeft;
  scrollTop = wrapper.scrollTop;
});

wrapper.addEventListener("mouseleave", () => {
  isDown = false;
});

wrapper.addEventListener("mouseup", () => {
  isDown = false;
});

wrapper.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - wrapper.offsetLeft;
  const y = e.pageY - wrapper.offsetTop;
  const walkX = (x - startX) * 3; // La sensibilité de la souris sur l'axe X
  const walkY = (y - startY) * 3; // La sensibilité de la souris sur l'axe Y
  wrapper.scrollLeft = scrollLeft - walkX;
  wrapper.scrollTop = scrollTop - walkY;
});

