<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-3">
            <a href="/notes" class="text-blue-500 hover:underline">go back ...</a>
        </p>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <form action="" method="POST" class="mt-6">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="text-sm text-red-500">
                Delete
            </button>
        </form>
    </div>



</main>
<?php require base_path('views/partials/footer.php'); ?>
