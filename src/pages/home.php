<?php $data = getContent("index"); ?>
<div class="row">
  <?php foreach ($data as $row) : ?>
    <div class="col-6 col-lg-6 col-xl-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-<?= $row["color"]; ?>"><?= $row["title"]; ?></h5>
          <p class="card-text text-truncate">
            <?php for ($i = 0; $i < count($row["example"]); $i++) : ?>
              <?= $row["example"][$i] . ", "; ?>
            <?php endfor; ?>
          </p>
          <a href="/src/pages/<?= $row["link"]; ?>" class="card-link btn btn-block btn-<?= $row["color"]; ?>">Show More</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>