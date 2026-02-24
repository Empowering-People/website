// ─── Shared toggle-switch state helper ───────────────────────────────────────
// Called by opendyslexic.js and high-contrast.js.
// Must be loaded before either of those scripts.
//
// button  — the <button role="switch"> element
// enabled — boolean: true = on, false = off
// ─────────────────────────────────────────────────────────────────────────────

function setToggleState(button, enabled) {
  button.setAttribute("aria-checked", String(enabled));
  button.classList.toggle("is-on", enabled);

  const label = button.querySelector(".a11y-toggle__state-label");
  if (label) label.textContent = enabled ? "On" : "Off";
}
