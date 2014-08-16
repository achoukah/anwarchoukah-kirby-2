<?php snippet('header') ?>

  <main class="content" role="main">
    <div class="container">
      <h1><?php echo html($page->title()) ?></h1>
      <?php echo kirbytext($page->text()) ?>

      <section>
        <?php snippet('projects') ?>
      </section>
    </div>
  </main>

<?php snippet('footer') ?>