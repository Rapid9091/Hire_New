$(".hire-btn").on("click", function () {
  pop();
});

const pop_background = document.getElementById("pop-up-login");
const form = document.getElementById("form");
const pop_form = document.getElementById("form");

function pop() {
  pop_background.style.top = "0%";
  form.style.top = "50%";
  form.style.transition = "all .5s";
}

const cross = document.getElementById("cross");

cross.addEventListener("click", function () {
  popdown();
});

function popdown() {
  pop_background.style.top = "-100%";
  form.style.top = "-50%";
  form.style.transition = "all 0.8s";
}

window.onclick = function (event) {
  if (event.target == pop_background) {
    popdown();
  }
};
