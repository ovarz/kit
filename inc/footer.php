<footer>
  <div>VIVA.co.id &copy;2019 -  All Right Reserved</div>
</footer>



<div class="floating-rightbottom">
  <div id="btt" title="Return To Top">
    <div class="content_center">
	  <i class="fas fa-arrow-up"></i>
	</div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/core.css"/>
</noscript>
<script>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script src="js/rancak.js?<?php echo $kumbaya; ?>"></script>
</body>
</html>