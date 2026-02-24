// ─── Dyslexia-friendly font toggle ───────────────────────────────────────────
// Adds/removes body.dyslexic-font and persists the preference to localStorage.
// Relies on setToggleState() defined in a11y-toggle-state.js.
// ─────────────────────────────────────────────────────────────────────────────

const fontToggle = document.getElementById("dyslexicFontToggle");
const fontEnabled = localStorage.getItem("dyslexicFont") === "enabled";

if (fontEnabled) document.body.classList.add("dyslexic-font");
setToggleState(fontToggle, fontEnabled);

fontToggle.addEventListener("click", function () {
  const nowEnabled = !document.body.classList.contains("dyslexic-font");
  document.body.classList.toggle("dyslexic-font", nowEnabled);
  setToggleState(fontToggle, nowEnabled);
  localStorage.setItem("dyslexicFont", nowEnabled ? "enabled" : "disabled");
});
