
   <?php require("partials/head.php"); ?>
  <?php require("partials/nav.php"); ?>
  <?php require("partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <a class="mb-6 block text-sm font-semibold leading-6 hover:underline text-blue-500" href="/notes">Go Back</a>
     <p><?= $note["body"]; ?></p>
    </div>
  </main>
 <?php require("partials/footer.php"); ?>