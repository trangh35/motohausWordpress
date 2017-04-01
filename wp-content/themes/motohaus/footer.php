    </div><!-- /.container -->

    <footer class="blog-footer">
      <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1">
          <?php
            if(is_active_sidebar('footer-sidebar-1')){
              dynamic_sidebar('footer-sidebar-1');
            }
          ?>
        </div>
        <div id="footer-sidebar2">
          <?php
            if(is_active_sidebar('footer-sidebar-2')){
              dynamic_sidebar('footer-sidebar-2');
            }
          ?>
        </div>
        <div id="footer-sidebar3">
          <?php
            if(is_active_sidebar('footer-sidebar-3')){
              dynamic_sidebar('footer-sidebar-3');
            }
          ?>
        </div>
      </div>
      <p>Copywrite 2017</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <?php wp_footer(); ?>
  </body>
</html>