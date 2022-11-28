<div id="sidebar-buttons">
	<div class="menu">
		<div class="accordion" id="accordionExample">
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingOne">
		      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        Curso
		      </button>
		    </h2>
		    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <ul>
		        	<li>
		        		<a href="">Disciplinas</a>
		        	</li>
		        	<li>
		        		<a href="">Atividades</a>
		        	</li>
		        </ul>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingTwo">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		        Serviços
		      </button>
		    </h2>
		    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <ul>
		        	<li>
		        		<a href="">Solicitação de serviços</a>
		        	</li>
		        </ul>
		      </div>
		    </div>
		  </div>
		  <div class="accordion-item">
		    <h2 class="accordion-header" id="headingThree">
		      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		        Ferramentas
		      </button>
		    </h2>
		    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
		      <div class="accordion-body">
		        <ul>
		        	<li>
		        		<a href="">Ferramenta para correção de dissertação</a>
		        	</li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<ul class="menu-buttons">
		<div>
			<li id="open-sidebar"><i class="fa-solid fa-bars"></i></li>
			<li><i class="fa-regular fa-bell"></i></li>
		</div>
		<div>
			<li id="home-button"><a href="http://localhost/projetoIntegrador/index.php"><i class="fa-solid fa-house"></i></a></li>
			<li id="user-settings" style="position: relative;">
				<div class="label-user">
					<a href="http://localhost/projetoIntegrador/logout.php">Sair</a>	
				</div>
				<?php echo strtoupper(substr($_SESSION['nome'], 0, 1));
				echo strtoupper(substr($_SESSION['sobrenome'], 0, 1)); ?></li>
		</div>
	</ul>
</div>