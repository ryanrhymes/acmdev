	</div><!-- /ui-block-b -->
		<?php include ("menu.php"); ?>
	</div><!-- /content -->

		<div data-role="popup" data-position-to="window" data-transition="pop" data-overlay-theme="b" id="archive_div" data-theme="a">
			<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
			<form>
				<b><span id="archive_info">Download Proceedings</span></b>
				<p>Enter the "Registration ID" from your registration confirmation email.</p>
				<div data-role="fieldcontain">
					<input type="text" name="archive_code" id="archive_code" value="" />
				</div>
				<div data-role="fieldcontain">
					<a href="#" id="archive_dbtn" data-role="button" data-theme="b">OK</a>
				</div>
			</form>
		</div>



<div class="license">
The <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">ACM SIGCOMM 2012 Website</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://conferences.sigcomm.org/sigcomm/2012/" property="cc:attributionName" rel="cc:attributionURL">ACM SIGCOMM 2012</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>. Source code is available at <a href="https://github.com/ryanrhymes/SIGCOMM2012">github.com</a>.
</div>

</div><!-- /page -->


<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31902726-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>

</html>

<?php
	# Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
	# http://michelf.com/projects/php-smartypants/
	print SmartyPants(ob_get_clean());
?>
