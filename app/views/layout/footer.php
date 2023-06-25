		
		<section id="footer" class="container mx-auto px-4 py-24 dark:bg-gray-800">
			<?php require_once 'partials/footer_content.php'; ?>
		</section>

		<script src="<?=$data['vendor']['flowbite']['js']?>"></script>

		<script src="<?=$data['vendor']['contentful']?>"></script>

		<script type="text/javascript">
			let client = contentful.createClient({
				space: '<?=$data['contentful_space'];?>',
				accessToken: '<?=$data['contentful_token'];?>'
			});
		</script>

		<?php for($i=0; $i < count($partials['scripts']); $i++): ?>
			<script type="text/javascript" src="<?=$partials['scripts'][$i]?>"></script>
		<?php endfor;?>
	</body>
</html>