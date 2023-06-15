		<?php require_once 'partials/footer_content.php'; ?>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

		<?php for($i=0; $i < count($partials['scripts']); $i++): ?>
			<script type="text/javascript" src="<?=$partials['scripts'][$i]?>"></script>
		<?php endfor;?>
	</body>
</html>