<h2>Latest portfolios</h2>
<ul class="teaser cf">
  <?php foreach(page('portfolio')->children()->visible()->limit(3) as $portfolio): ?>
  <li>
    <h3><?php echo html($portfolio->title()) ?></h3>
    <p><?php echo excerpt($portfolio->text(), 80) ?> <a href="<?php echo $portfolio->url() ?>">read more →</a></p>
    <?php if($image = $portfolio->image()): ?>
    <a href="<?php echo $portfolio->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo html($portfolio->title()) ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
