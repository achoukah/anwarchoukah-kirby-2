<?php snippet('header') ?>
  <main class="content text" role="main">
  <div class="container">
      <h1><?php echo html($page->title()) ?></h1>
      <?php echo kirbytext($page->text()) ?>
    </main>
  </div>

<?php snippet('footer') ?>