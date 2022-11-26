<?php 
	require_once './vars.php';
?>
 <!-- 
 <?php
 //foreach ($GLOBALS['disciplinas'] as $key => $value) {
// 							echo '<div class="disciplina" style="background-color:#'. str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT).'">
// 								<p class="disciplina-nome">'.$value['nome'].'</p>
// 								</div>';
//						} 
?> 
!-->
<section id="home-site">
	<?php require_once './views/view/template/sidebar.php'; ?>
	<div class="home-space">
		<?php require_once './views/view/template/menu-top.php'; ?>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div id="avisos" class="home-label bg-half-gray">
					<div class="mural-avisos">
						<?php for($i = 0; $i < 6; $i++) {
							echo '<div class="avisos" style="background-color:#'. str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT).'">
								</div>';
						} ?>
					</div>
				</div>
				<div id="atividades" class="home-label home-label-style bg-half-gray">
					<div class="container-title">
						<i class="fa-solid fa-bookmark"></i>
						<h4>Atividades</h4>
					</div>
					<div class="container-style d-flex" style="overflow-x: scroll;<?php echo count($GLOBALS['atividades']) == 0 ? 'display: flex;justify-content: center;align-items: center;font-family: system-ui' : ''; ?>">
						<?php

							if(count($GLOBALS['atividades']) > 0) {
								foreach ($GLOBALS['atividades'] as $key => $value) {
									echo '<div class="atividade"><div class="atv-curso" style="background-color:#'. str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT).'">
									<p class="disciplina-nome">'.$value['curso'].'</p>
									</div>
										<div class="atv-info">
											<p class="atividade-nome">'.$value['nome'].'</p>
											<div class="info-encerramento">
												<p class="encerramento">Encerra em<br>';

													$now = date('Y-m-d', strtotime("now"));
													$dataFim = date('Y-m-d', strtotime($value['dataSemFormat']));
													$dataAntes = date('Y-m-d', strtotime($value['dataAntes']));

													if($now >= $dataAntes && $dataFim >= $now) {
														echo '<strong style="color:red">';
													}
													else {
														echo '<strong>';
													}
												echo $value['dataFim'].'</strong> ás '.$value['horaFim'].'</p>
												<i class="fa-solid fa-up-right-from-square"></i>
											</div>
										</div>
									</div>';
								}

							}
							else {
								echo 'Nenhuma atividade pendente.';
							}
						?> 
					</div>
				</div>
				<div id="livros" class="home-label home-label-style bg-half-gray">
					<div class="container-title">
						<i class="fa-solid fa-book" style="color: #00871d;margin-top: 3px;"></i>
						<h4>Livros do curso</h4>
					</div>
					<div class="container-style" style="overflow-x: scroll;<?php echo count($GLOBALS['livros']) == 0 ? 'display: flex;justify-content: center;align-items: center;font-family: system-ui' : ''; ?>">
						<?php

							if(count($GLOBALS['livros']) > 0) {

								foreach ($GLOBALS['livros'] as $key => $value) {
									echo '<div class="livros">
										<div class="box-imglivro">
											<img class="imglivro" src="'.$value['imagelink'].'">
										</div>
										<div class="livro-info-box">
											<p>'.mb_strimwidth($value['nome'], 0, 30,'...').'</p>
											<button type="button">Ver mais</button>
										</div>
									</div>';
								}
							}
							else {
								echo 'Nenhum livro correspondente.';
							}
						?> 
					</div>
				</div>
				<div id="horarios" class="home-label bg-half-gray">
					<h3>Horários</h3>
					<div id="tabela-horarios">
						<table>
						<tbody>
						<tr>
						<td class="border-active header">Horários</td>
						<td class="border-active header">Segunda-feira</td>
						<td class="border-active header">Terça-feira</td>
						<td class="border-active header">Quarta-feira</td>
						<td class="border-active header">Quinta-feira</td>
						<td class="border-active header">Sexta-feira</td>
						</tr>
						<tr>
						<td class="border-active">19:00 - 19:50</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						</tr>
						<tr>
						<td class="border-active">19:50 - 20:40</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						</tr>
						<tr>
						<td class="border-active">21:00 - 21:50</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						</tr>
						<tr>
						<td class="border-active">21:50 - 22:30</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						<td class="border-active">&nbsp;</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>