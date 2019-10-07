<?php
     require_once('config.php');
     require_once(DBAPI);
     $db = open_database();
     include(HEADER_TEMPLATE);
?>
<?php  if($db) : ?>
</div>
<div class="row justify-content-center">
<div class="col-md-8">
<br>
<div class="row col-md-6">
<img src="img/image2.jpeg" width="180px">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nihil tempore quae voluptas ex voluptate eaque rem, ipsam ipsum fuga quo cupiditate asperiores reprehenderit non dicta iste nostrum repellendus impedit.
Sed, iure odit recusandae numquam sit ipsum adipisci consequuntur culpa dolorem asperiores natus modi, cumque nobis. Laboriosam fugit hic architecto velit sit, harum ex quod pariatur a repellat porro eum.
Necessitatibus quia deleniti qui alias tempora quibusdam laudantium. Animi incidunt pariatur, minus earum dolores ex eligendi exercitationem saepe quis facere ipsum quae facilis sed veritatis, aperiam enim beatae atque porro.</p>
</div>
</div>
</div>
<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>