<!-- Related Blog Posts Grid -->
<section class="py-24 bg-gray-50">
  <div class="container max-w-6xl px-4 mx-auto">
    <h2 class="mb-12 text-5xl text-center font-playfair"><?= t("home.moreInformation") ?></h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
      <?php
      // Get all blog posts except the current one
      $relatedPosts = $site->page('blog')->children()->listed()->filter(function ($post) use ($page) {
        return $post->uri() !== $page->uri();
      })->limit(3); // Limit to 3 posts
      ?>
      <?php foreach ($relatedPosts as $post): ?>
        <a href="<?= $post->url() ?>">
          <div class="h-full overflow-hidden bg-white ">
            <?php if ($image = $post->images()->first()): ?>
              <img src="<?= $image->url() ?>" alt="<?= $post->title() ?>" class="object-cover w-full h-48">
            <?php endif ?>
            <div class="flex flex-col p-2">
              <div class="my-4">
                <span class="px-3 py-2 font-bold capitalize bg-white border-2 rounded border-primary text-primary"><?= $post->category() ?></span>
              </div>
              <h3 class="mb-2 text-2xl font-playfair"><?= $post->title() ?></h3>
              <p class="mb-4 text-lg text-gray-600 line-clamp-4"><?= $post->description() ?></p>
            </div>
          </div>
        </a>
      <?php endforeach ?>
    </div>

  </div>
  <div class="container flex justify-center max-w-6xl mx-auto">

    <button class="px-4 py-2 mx-auto mt-8 font-bold bg-white border-2 rounded text-primary border-primary hover:opacity-90 font-manrope">
      <a href="<?= $site->url() ?>/blog" class="flex items-center justify-center gap-2">
        <span><?= t('home.allArticles') ?></span>
        <img src="/assets/icons/rightarrow-primary.svg" alt="" class="w-6 h-6">
      </a>
    </button>
  </div>
</section>