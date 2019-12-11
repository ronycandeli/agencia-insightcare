 
<?php
include ('funcoes.php');
  include_once('head.php');
   ?>
 
  <section id="banner">
    <h2>Compre nossos produtos! =)</h2>
  </section>
  <section id="servico" class="container mt-5">
    <div class="row">
 
 <?php echo listarServicos() ?>
     
    </div>
  </section>

  <section id="about" class="container mt-5">
    <div class="row">
 
        <div class="col-6">
            <img src="images/about.svg" class="img-fluid">
        </div>

      <div class="col-6 d-flex justify-content-center flex-column"> 
                <h1 class="card-title">Criamos seu site</h1>
                <p class="card-text"> Somos uma agência que usa as melhores tecnologias e conhecimentos para seu site ficar visivel.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
<?php
  
  include_once('footer.php');
?>