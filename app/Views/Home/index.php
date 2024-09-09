<?php $this->extend('Layout/principal')?>


  <?php  $this->renderSection('titulo') ?> 
  <?php echo $titulo ?> 

      <?php echo $this->renderSection('estilos')?> 
      <!-- Estilos da Pagina-->

      
          <?php echo $this->renderSection('conteudo')?> 
          <!-- conteudo da Pagina-->

            
          <?php  $this->renderSection('scripts');?> 
          <!-- scripts da Pagina-->

