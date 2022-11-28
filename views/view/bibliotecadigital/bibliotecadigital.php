<?php require_once __DIR__.'/../template/structuretop.php'; ?>
	<div class="space-biblioteca">
		<div class="container">
			<div class="row justify-content-center">
				<div class="content-pesquisalivro">
					<input type="text" id="input-buscalivro" placeholder="Pesquisar Livros...">
					<h2>Categorias</h2>
					<div class="grupo-select">
						<select name="select-ano" id="select-ano">
							<option readonly value=''>Ano</option>
							<?php foreach ($GLOBALS['ano_livros'] as $key => $value) {
								echo "<option value='".$value['ano']."'>".$value['ano']."</option>";
							} ?>
						</select>
						<select name="select-autor" id="select-autor">
							<option readonly value=''>Autor</option>
							<?php foreach ($GLOBALS['autor_livros'] as $key => $value) {
								echo "<option value='".$value['autor']."'>".$value['autor']."</option>";
							} ?>
						</select>
						<select name="select-editora" id="select-editora">
							<option readonly value=''>Editora</option>
							<?php foreach ($GLOBALS['editora_livros'] as $key => $value) {
								echo "<option value='".$value['editora']."'>".$value['editora']."</option>";
							} ?>
						</select>
						<select name="select-nota" id="select-nota">
							<option readonly value=''>Nota</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<button id="btn-pesquisa" type="button">PESQUISAR</button>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($GLOBALS['livros'] as $key => $value){ ?>
				
				<div class="box-livro col-3">
					<div class="content-box-livro">
						<div class="box-img-livro">
							<img src="<?php echo $value['imagelink']; ?>" alt="">
						</div>
						<div class="rating">
							<?php if($value['media_nota'] < 0.6) { ?>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							<?php }elseif($value['media_nota'] >= 0.6 && $value['media_nota'] < 1.6){ ?>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							<?php }elseif($value['media_nota'] >= 1.6 && $value['media_nota'] < 2.6){ ?>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							<?php }elseif($value['media_nota'] >= 2.6 && $value['media_nota'] < 3.6){ ?>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							<?php }elseif($value['media_nota'] >= 3.6 && $value['media_nota'] < 4.6){ ?>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							<?php }elseif($value['media_nota'] >= 0.6 && $value['media_nota'] < 1.6){ ?>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							<?php } ?>
						</div>
						<div class="num-disponivel-livro">(<?php echo $value['num_avaliacoes'] ?>)</div>
						<p class="content-nome-livro"><?php echo mb_strimwidth($value['nome'], 0, 58,'...'); ?></p>
						<p class="content-autores"><?php echo $value['autor']; ?></p>
						<p class="content-disponibilidade <?php echo ($value['total_livros'] == 0 || $value['total_disponiveis'] == 0 ? 'indisponivel' : ''); ?>">
							<?php if($value['total_livros'] == 0 || $value['total_disponiveis'] == 0){ ?>
								Indisponível
							<?php }else{ ?>
								Disponível (<?php echo $value['total_disponiveis'] ?>/<?php echo $value['total_livros']; ?>)
							<?php } ?>
						</p>
					</div>
				</div>

			<?php } ?>
		</div>
	</div>
<?php require_once __DIR__.'/../template/structurebottom.php'; ?>