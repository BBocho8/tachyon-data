<?php
// Fetch the three most recent posts
$recentPosts = $page->children()->listed()->limit(3);
?>

<div class="bg-[url('/assets/images/blog-header-bg(1).png')] bg-cover bg-center bg-no-repeat relative overflow-hidden">

  <div class="bg-white/30 backdrop-brightness-50">
    <span class="absolute text-white text-[1300px] top-0 right-10 h-full flex items-center my-[-80px]">></span>

    <div class="px-24 py-12 ">
      <div class="grid grid-cols-2 mx-auto max-w-7xl">
        <div class="flex flex-col justify-center space-y-4">
          <div class="flex space-x-2">
            <!-- Display the category of the first post -->
            <span class="text-xl font-extrabold text-white rounded ">
              TACHYON DATA BLOG
              <!-- <?= $recentPosts->first()->category() ?> -->
            </span>
          </div>
          <!-- Display the title of the first post -->
          <h2 class="pr-8 text-5xl text-white font-playfair line-clamp-3">
            <?= $recentPosts->first()->title() ?>
          </h2>
          <!-- Display the description of the first post -->
          <h2 class="pr-8 text-lg text-white font-manrope line-clamp-3">
            <?= $recentPosts->first()->description() ?>
          </h2>
          <!-- Read more link -->
          <div class="py-2">

            <a href="<?= $recentPosts->first()->url() ?>" class="px-3 py-2 font-bold text-white border-2 border-white rounded hover:underline">
              <?= t("blog.mehrErfahren") ?>
            </a>
          </div>
          <!-- Bullet points -->
          <div class="flex pt-4 space-x-4" id="post-bullets">
            <?php
            $counter = 0; // Initialize a counter
            foreach ($recentPosts as $post): ?>
              <?php
              $bulletClass = ($counter === 0) ? 'bg-primary' : 'bg-gray-500';
              ?>
              <span
                class="w-5 h-5 rounded-full cursor-pointer <?php echo $bulletClass; ?>"
                data-index="<?php echo $counter; ?>"></span>
            <?php
              $counter++; // Increment the counter
            endforeach; ?>
          </div>
        </div>
        <!-- Display the image of the first post -->
        <!-- <div class="flex items-center justify-center max-h-[300px] ">
          <img class="object-cover w-full h-full rounded"
            id="post-image"
            src="<?= $recentPosts->first()->images()->first()->url() ?>"
            alt="<?= $recentPosts->first()->title() ?>">
        </div> -->
      </div>
    </div>

    <!-- Hidden data for JavaScript -->
    <div id="posts-data" class="hidden">
      <?php
      $counter = 0; // Initialize a counter
      foreach ($recentPosts as $post): ?>
        <div
          data-index="<?php echo $counter; ?>"
          data-category="TACHYON DATA BLOG"
          data-title="<?php echo $post->title(); ?>"
          data-image="<?php echo $post->images()->first()->url(); ?>"
          data-url="<?php echo $post->url(); ?>"></div>
      <?php
        $counter++; // Increment the counter
      endforeach; ?>
    </div>
  </div>
</div>