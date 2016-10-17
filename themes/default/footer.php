    </div> <!---container end--->
    <?php if ( ! isset($show) || $show == true) : ?>
    <footer class="footer">
        <div class="container text-center">
            <p><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> <?php echo date('Y'); ?> APG TRADE, INC.</p>
        </div>
    </footer>

    <?php endif; ?>
	<div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  -->
    <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-3.1.1.js"><\/script>');</script>
    <?php echo Assets::js(); ?>
</body>
</html>