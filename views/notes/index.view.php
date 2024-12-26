
<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
   <ul>
     <?php foreach($notes as $note): ?>
      <li>
        <a class="hover:underline text-blue-500" href="/note?id=<?= $note["id"]; ?>">
          <?= htmlspecialchars($note['body']) ?>
        </a>
      </li>
      <?php endforeach; ?>
   </ul>
   <p class="mt-4">
    <a href="/notes/create" class="text-blue-500 underline">Create Note</a>
     </p>
    </div>
  </main>
<?php require base_path('views/partials/footer.php') ?>