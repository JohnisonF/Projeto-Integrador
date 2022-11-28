<?php require_once __DIR__.'/../template/structuretop.php'; ?>
<?php require_once __DIR__.'/../../../controller/atividadeController.php'; 
	$disc = new atividadeController();
?>
	<div class="container">
		<div class="row">
			<?php foreach ($GLOBALS['disciplinas'] as $key => $value) { ?>

				<div class="col-3 mb-5">
					<div class="box-disciplina">
						<div class="content-box-disciplina" style="background-color:#<?php echo str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT) ?>">
							<h3 class="nome-disciplina"><?php echo mb_strimwidth($value['sigla'].' - '.$value['nome'], 0, 35,'...'); ?></h3>
							<p class="professor-disciplina"><?php echo $value['professor']; ?></p>
						</div>
						<div class="atividade-disciplina">
							<?php $atividades = $disc->getAtividadesDisciplina($value['idDisciplina']);
								foreach ($atividades as $key2 => $value2) { ?>
									<p class="atividade-nome-disciplina"><?php echo $value2['nome']; ?></p>
							<?php } ?>
						</div>
						<div class="botoes-disciplina">
							<button class="btn-single-disciplina"><i class="fa-solid fa-up-right-from-square"></i></button>
						</div>
					</div>
				</div>

			<?php } ?>
		</div>
	</div>

<?php require_once __DIR__.'/../template/structurebottom.php'; ?>