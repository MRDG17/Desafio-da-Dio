<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 class="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta adipisci quo provident quisquam quas quia iure ea possimus quos ducimus labore, eum tenetur magnam doloremque a nihil, facere odio porro.
            Consequuntur, doloribus ullam non quae aspernatur accusamus fugiat velit porro incidunt placeat distinctio dolore natus impedit nemo dignissimos voluptatem dolor sit cum, voluptatibus modi molestiae reprehenderit sequi in? Repellat, aspernatur.
            Consequatur, exercitationem. Qui veritatis quaerat, dolor nobis totam, fugiat doloremque nam distinctio, dolore maxime assumenda a itaque! Molestiae libero, eum exercitationem commodi tempora ipsum a veniam explicabo itaque, porro illo?
            Nisi impedit, repudiandae amet, qui possimus deserunt eum exercitationem et natus assumenda nihil, nulla rem veniam eius dicta aspernatur excepturi atque facilis reprehenderit adipisci provident accusamus. Officiis deserunt praesentium aperiam!
            Saepe quod iste architecto, vel aliquam perspiciatis sed nostrum facilis incidunt non, facere sit distinctio itaque possimus blanditiis labore beatae placeat quo voluptates. Sint earum dolores dolorum, enim deleniti vitae.</p>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta adipisci quo provident quisquam quas quia iure ea possimus quos ducimus labore, eum tenetur magnam doloremque a nihil, facere odio porro.
            Consequuntur, doloribus ullam non quae aspernatur accusamus fugiat velit porro incidunt placeat distinctio dolore natus impedit nemo dignissimos voluptatem dolor sit cum, voluptatibus modi molestiae reprehenderit sequi in? Repellat, aspernatur.
            Consequatur, exercitationem. Qui veritatis quaerat, dolor nobis totam, fugiat doloremque nam distinctio, dolore maxime assumenda a itaque! Molestiae libero, eum exercitationem commodi tempora ipsum a veniam explicabo itaque, porro illo?
            Nisi impedit, repudiandae amet, qui possimus deserunt eum exercitationem et natus assumenda nihil, nulla rem veniam eius dicta aspernatur excepturi atque facilis reprehenderit adipisci provident accusamus. Officiis deserunt praesentium aperiam!
            Saepe quod iste architecto, vel aliquam perspiciatis sed nostrum facilis incidunt non, facere sit distinctio itaque possimus blanditiis labore beatae placeat quo voluptates. Sint earum dolores dolorum, enim deleniti vitae.</p>
        </div>
        </div>
        <aside id="nav-container">
         <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?> 
               <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>   
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list"></ul>
            <?php foreach($categories as $category): ?> 
               <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>  
    </main>
     </aside>
<?php
    include_once("templates/footer.php")
?>