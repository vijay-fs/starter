
   <?php require("views/partials/head.php"); ?>
  <?php require("views/partials/nav.php"); ?>
  <?php require("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <a class="mb-6 block text-sm font-semibold leading-6 hover:underline text-blue-500" href="/notes">Go Back</a>
     <p><?= htmlspecialchars($note['body']) ?></p>
    </div>
  </main>
 <?php require("views/partials/footer.php"); ?>