<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>
<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, ab aspernatur id expedita eum odio tempora deleniti labore itaque omnis, iusto impedit iste consequatur, dolor vel necessitatibus harum perspiciatis quia.
      Delectus eaque doloremque unde, vitae repudiandae culpa quaerat quas consequuntur nihil neque, expedita officia hic dolorum perferendis vero tenetur dolores laborum veniam quis explicabo, commodi illum. Provident sapiente quam fugiat?
      Mollitia quas eaque assumenda a? Id commodi quas harum sit dicta magni optio esse odio doloribus soluta velit ab maiores odit assumenda, distinctio tempore non laborum sunt exercitationem voluptate cumque.
      Iusto ab aliquam debitis quis, ipsa quae laborum saepe sequi, quod, nulla consectetur modi ratione nesciunt. Sapiente laboriosam exercitationem qui hic fugit fugiat corporis accusantium deleniti, iusto voluptas saepe nulla.
      Dolore illo quidem dolores, iure dolor ullam ex dolorum magni tempore corrupti delectus eligendi et amet unde sequi. Non sint dolore dignissimos? Doloribus maiores consequatur rem ex quam exercitationem quo.</p>
    <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, ab aspernatur id expedita eum odio tempora deleniti labore itaque omnis, iusto impedit iste consequatur, dolor vel necessitatibus harum perspiciatis quia.
      Delectus eaque doloremque unde, vitae repudiandae culpa quaerat quas consequuntur nihil neque, expedita officia hic dolorum perferendis vero tenetur dolores laborum veniam quis explicabo, commodi illum. Provident sapiente quam fugiat?
      Mollitia quas eaque assumenda a? Id commodi quas harum sit dicta magni optio esse odio doloribus soluta velit ab maiores odit assumenda, distinctio tempore non laborum sunt exercitationem voluptate cumque.
      Iusto ab aliquam debitis quis, ipsa quae laborum saepe sequi, quod, nulla consectetur modi ratione nesciunt. Sapiente laboriosam exercitationem qui hic fugit fugiat corporis accusantium deleniti, iusto voluptas saepe nulla.
      Dolore illo quidem dolores, iure dolor ullam ex dolorum magni tempore corrupti delectus eligendi et amet unde sequi. Non sint dolore dignissimos? Doloribus maiores consequatur rem ex quam exercitationem quo.</p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>

<?php
include_once("templates/footer.php")
?>