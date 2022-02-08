<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
	<nav class="navbar navbar-fixed-top">
		<div class="container-fluid navbar-container">
			<img src="<?php echo base_url('images/logo2.png');  ?>" />
		</div>
	</nav>
	<a class="navbar-brand " href="#">Sailing adventure</a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo site_url('about') ?>">Главная </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('photo') ?>">
					Фото</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('video') ?>">Видео</a>
			</li>
		</ul>
		<span class="text-white"><a href="#form-submit">
				<img src="<?php echo base_url('images/ikonka-telefona-dliya-vizitki-02.png');  ?>" />
			</a></span>
	</div>
</nav>