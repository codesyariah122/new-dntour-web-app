<!-- <div class="relative mx-auto px-90 rounded-[2.5rem] h-[600px] w-[300px]">
</div> -->
<main class="bg-white dark:bg-gray-800 dark:text-white">
	<?php
	foreach($partials['homes'] as $home):
		require_once $home;
	endforeach;
	?>
</main>
