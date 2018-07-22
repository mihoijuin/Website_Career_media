<?php
/**
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 * @version 1.0
 */

?>
<?php get_header(); ?>
    <!-- main -->
    <main>
      <div class="main-wrapper">
        <img class="heading" src="./images/profile-title.svg" alt="">
        <div class="profiles">
          <section class="profile">
            <h3>ぽりん</h3>
            <img src="./images/porin-wanko.png" alt="" width="200" height="200">
            <p>
              自己紹介的なものをだいたい<br>
              3行くらいで書くのがいいかな<br>
              こんな人ですよ〜〜
            </p>
            <a href="https://twitter.com/iju_miho" target="_blank"><span class="fab fa-twitter"></span></a>
          </section>
          <section class="profile">
            <h3>けんと</h3>
            <img src="./images/kento-nyanko.png" alt="" width="200" height="200">
            <p>
              自己紹介的なものをだいたい<br>
              3行くらいで書くのがいいかな<br>
              こんな人ですよ〜〜
            </p>
            <a href="https://twitter.com/kntaoki" target="_blank"><span class="fab fa-twitter"></span></a>
          </section>
        </div>
      </div>
    </main>

    <!-- footer -->
    <footer>
      <!-- copyrightをflexの範囲外に置くためにfooter-containerでcopyright以外を囲む -->
      <div class="footer-container">
        <section class="footer-logo">
          <a href="page.html">
            <img class="footer-icon" src="./images/Porin_icon.jpg" alt="" width="120" height="120">
          </a>
          <h1><img class="footer-title" src="./images/nandedemodakara_title.svg" alt=""></h1>
          <p>
            ニートとHR業界サラリーマンが対話し<br>
            「なんで？」「でも〜」「だから〜」が飛び交う場所
          </p>
        </section>
        <div class="social">
          <ul>
            <li><a href="https://twitter.com/iju_miho" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#" target="_blank"><span class="fas fa-rss"></span></a></li>
          </ul>
        </div>
        <nav class="footer-nav">
          <ul>
            <li><a href="page.html">トップ</a></li>
            <li><a href="index.html">記事一覧</a></li>
            <li><a href="profile.html">管理人</a></li>
          </ul>
        </nav>
      </div>
      <p class="copyright"><small>Copyright(c)2018 nandedemodakara All Rights Reserved.</small></p>
    </footer>
  </body>
</html>
