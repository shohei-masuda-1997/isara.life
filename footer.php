<footer>
    <p1>バンコクのノマドエンジニア育成講座、iSara[イサラ]<br>
      Copyright ©︎ iSara All Rights Reserved.</p1>
    <div class="footer-link">
      <a class="icon twitter" href="#">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        ツイート
      </a>

      <a class="icon good"  href="#">
        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
        いいね！
      </a>

      <a class="icon share"  href="#">
        シェア
      </a>

    </div>

    <p2>Designed by Maya Ogi / Developed by Kentaro Koga</p2>
  </footer>

  <?php wp_enqueue_script("jquery","https://code.jquery.com/jquery-3.2.1.min.js"); ?>
  <?php wp_enqueue_script("mosya2_js",get_template_directory_uri()."/mosya2.js"); ?>
  <?php wp_enqueue_script("bootstrap","https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"); ?>

  <?php wp_footer(); ?>
</body>

</html>
