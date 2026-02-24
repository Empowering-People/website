// ─── High contrast mode toggle ────────────────────────────────────────────────
// Adds/removes body.high-contrast and persists the preference to localStorage.
// Relies on setToggleState() defined in a11y-toggle-state.js.
// ─────────────────────────────────────────────────────────────────────────────

const contrastToggle = document.getElementById("highContrastToggle");
const contrastEnabled = localStorage.getItem("highContrast") === "enabled";

if (contrastEnabled) document.body.classList.add("high-contrast");
setToggleState(contrastToggle, contrastEnabled);

contrastToggle.addEventListener("click", function () {
  const nowEnabled = !document.body.classList.contains("high-contrast");
  document.body.classList.toggle("high-contrast", nowEnabled);
  setToggleState(contrastToggle, nowEnabled);
  localStorage.setItem("highContrast", nowEnabled ? "enabled" : "disabled");
});
