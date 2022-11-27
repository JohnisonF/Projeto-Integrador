<?php require_once __DIR__.'/../template/structuretop.php'; ?>
	<div class="container">
		<div class="row">
			<div id="space-boletim">
				<table class="table-boletim">
					<thead>
						<tr>
							<td class="title-table"><div class="title-materia">Matérias</div></td>
							<td class="title-table"><div class="title-nota">B1</div></td>
							<td class="title-table"><div class="title-nota">B2</div></td>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($GLOBALS['notas'] as $key => $value) {
								echo '<tr>';
								echo '<td class="text-left"><div class="materias">'.$value['materia'].'</div></td>';
								echo '<td class="padding-nota"><div class="notas">'.$value['nota'].'</div></td>';
								echo '<td class="padding-nota"><div class="notas">'.($value['nota2b'] ? $value['nota2b'] : '-') .'</div></td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<?php require_once __DIR__.'/../template/structurebottom.php'; ?>