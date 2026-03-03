// ─── Back-to-blog link visibility ────────────────────────────────────────────
// Shows the "Back to Blog" link only when the post is viewed directly (i.e.
// not embedded inside an iframe on /blog). When the post is rendered inside
// an iframe the link is hidden so it doesn't clutter the embedded preview.
// ─────────────────────────────────────────────────────────────────────────────

(function () {
  var backLink = document.getElementById("backToBlogLink");
  if (!backLink) return;

  var inIframe;
  try {
    inIframe = window.self !== window.top;
  } catch (e) {
    inIframe = true; // Cross-origin iframe — access blocked, but we're in one.
  }

  backLink.hidden = inIframe;
})();
