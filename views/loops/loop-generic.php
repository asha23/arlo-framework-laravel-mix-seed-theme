<?php

use Samrap\Acf\Acf;

$content = Acf::field('content')->get();

?>

<section class="row">
	<div class="col">
		<?= $content; ?>
	</div>
</section>


