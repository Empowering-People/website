// ─── Accessibility widget — panel open/close ──────────────────────────────────
// Manages toggling the visibility of the accessibility settings panel,
// including keyboard (Escape) and outside-click dismissal.
// ─────────────────────────────────────────────────────────────────────────────

const a11yWidget = document.getElementById("a11yWidget");
const a11yTrigger = document.getElementById("a11yTrigger");
const a11yPanel = document.getElementById("a11yPanel");

function openPanel() {
  a11yPanel.hidden = false;
  a11yTrigger.setAttribute("aria-expanded", "true");
  a11yTrigger.classList.add("is-open");
}

function closePanel() {
  a11yPanel.hidden = true;
  a11yTrigger.setAttribute("aria-expanded", "false");
  a11yTrigger.classList.remove("is-open");
}

a11yTrigger.addEventListener("click", function (e) {
  e.stopPropagation();
  a11yPanel.hidden ? openPanel() : closePanel();
});

document.addEventListener("click", function (e) {
  if (!a11yWidget.contains(e.target)) closePanel();
});

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !a11yPanel.hidden) closePanel();
});
