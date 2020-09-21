<h1>liste des cartes </h1>

<a class="waves-effect waves-light btn" href="/cards?color=red">Red</a>
<a class="waves-effect waves-light btn" href="/cards?color=white">White</a>
<a class="waves-effect waves-light btn" href="/cards?color=black">Black</a>
<a class="waves-effect waves-light btn" href="/cards?color=blue">Blue</a>
<a class="waves-effect waves-light btn" href="/cards?color=green">Green</a>
<a class="waves-effect waves-light btn" href="/cards?color=empty">No color</a>
<br>
<div class="row">



  <?php foreach ($cardList as $card) : ?>

    <img src="<?= $card->getImage() ?>">
    <!-- <span class="card-title"><?= $card->getName() ?></span> -->

  <?php endforeach; ?>

  <div class="card-action">
  <ul class="pagination">
    <li><a href="/cards?page=1">First</a></li>
    <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($page <= 1){ echo '#'; } else { echo "/cards?page=".($page - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "/cards?page=".($page + 1); } ?>">Next</a>
    </li>
    <li><a href="/cards?page=<?php echo $total_pages; ?>">Last</a></li>
</ul>



  </div>
</div>


