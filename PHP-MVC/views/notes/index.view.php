<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <ul>
    <?php foreach($posts as $post):?>
      <li>
        <a href="/note?id=<?=$post['id']?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($post['title'])?></a>
      </li>
    <?php endforeach;?>
    </ul>
  </div>
</main>


<?php require base_path("views/partials/footer.php") ?>