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
						</select>
						<select name="select-autor" id="select-autor">
							<option readonly value=''>Autor</option>
						</select>
						<select name="select-editora" id="select-editora">
							<option readonly value=''>Editora</option>
						</select>
						<select name="select-nota" id="select-nota">
							<option readonly value=''>Nota</option>
						</select>
					</div>
					<button id="btn-pesquisa" type="button">PESQUISAR</button>
				</div>
			</div>
		</div>
	</div>
<?php require_once __DIR__.'/../template/structurebottom.php'; ?>