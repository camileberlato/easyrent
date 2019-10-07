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
<div class="row">
<h3>Onde encontrar</h3>
</div>
<div class="row justify-content-center">
<div style="overflow:hidden;width: 800px;position: relative;"><iframe width="800" height="400" src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=Rua%20Wencelau%20Bras%2C%20Lins%2C%20SP%2C%20Brasil+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/de/">https://embedgooglemaps.com/de/</a> & <a href="http://www.stedentrippers.nl/berlijn.html">Stedentrippers Blog</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
</div>
</div>
</div>
<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>