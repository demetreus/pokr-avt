<h1>Hello, world!</h1>
<p><?=$name;?></p>
<p><?=$age;?></p>
<p><?=$options[0];?></p>

<?php foreach ($posts as $post) : ?>
    <h3><?=$post->title;?></h3>
<?php endforeach; ?>