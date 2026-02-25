// ─── Testimonials carousel ────────────────────────────────────────────────────
// Crossfading slideshow with prev/next buttons, dot navigation, and automatic
// 5-second advance.  Runs only on pages that contain .carousel-container.
// ─────────────────────────────────────────────────────────────────────────────

(function () {
  var container = document.querySelector(".carousel-container");
  if (!container) return; // Not on a page with a carousel — bail out.

  var slides = Array.prototype.slice.call(
    container.querySelectorAll(".carousel-slide")
  );
  var dots = Array.prototype.slice.call(
    document.querySelectorAll(".carousel-dot")
  );

  var current = 0;
  var autoTimer = null;

  // Show the slide at index i, wrapping around if needed.
  function goTo(index) {
    slides[current].classList.remove("is-active");
    dots[current].classList.remove("is-active");
    dots[current].setAttribute("aria-selected", "false");

    current = (index + slides.length) % slides.length;

    slides[current].classList.add("is-active");
    dots[current].classList.add("is-active");
    dots[current].setAttribute("aria-selected", "true");
  }

  // (Re)start the 5-second auto-advance timer.
  function startAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(function () {
      goTo(current + 1);
    }, 5000);
  }

  // Wire up prev/next buttons.
  var prevBtn = document.querySelector(".carousel-prev");
  var nextBtn = document.querySelector(".carousel-next");

  if (prevBtn) {
    prevBtn.addEventListener("click", function () {
      goTo(current - 1);
      startAuto(); // Reset the timer on manual interaction.
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      goTo(current + 1);
      startAuto();
    });
  }

  // Wire up dot buttons.
  dots.forEach(function (dot, i) {
    dot.addEventListener("click", function () {
      goTo(i);
      startAuto();
    });
  });

  // Initialise: show first slide and start auto-advance.
  goTo(0);
  startAuto();
})();
