<?php require base_path("views/partials/head.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <p class="mb-6">
      <a href="/notes" class="text-red-900">Go back...</a>
    </p>

    <h1 class="text-2xl"> <?= htmlspecialchars($post['title'])?></h1>

    <div class="mt-6">
      <a href="/note/edit?id=<?= $post['id']?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
      >Edit</a>
    </div>

   
  </div>
</main>


<?php require base_path("views/partials/footer.php") ?>