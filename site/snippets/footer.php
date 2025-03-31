</main>


<div class="footer-container">
  <div class="footer-wrapper">



    <img src="/assets/images/footer-logo.png" alt="" class="w-48">

    <div class="footer-text-wrapper">
      <p class="footer-paragraph">Tachyon Data GmbH in Gr.<br>
        Nördliche-Münchner-Str. 9c<br>
        82031 Grünwald</p>
      <p class="footer-paragraph">
        Tel: +49 89 ….<br>
        E-Mail: info@tachyondata.one<br>
        www.tachyondata.one
      </p>
    </div>

    <p class="footer-paragraph">Geschäftsführung: Guido Decker (CEO) und Johannes Bernhardt (CTO)</p>

    <div class="footer-links">
      <a href="#">Impressum</a>
      <a href="#">Datenschutz</a>
    </div>
  </div>
</div>

<div class="cookie-container">
  <button class="cookie-button" type="button" data-cc="show-preferencesModal" aria-haspopup="dialog">
    <!-- SVG Icon -->
    <img src="/assets/icons/cookie-settings.svg" alt="Cookie Settings Icon" class="cookie-icon">
    <!-- Button Text -->
    Ihre Datenschutzeinstellungen
  </button>
</div>

<?= js([
  'assets/js/language-switcher.js',
  'assets/js/burger-menu.js',
  '@auto'
]) ?>

<?php snippet('cookieconsentJs') ?>


</body>

</html>