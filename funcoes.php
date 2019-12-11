<?php

$servicos = [
    ["imagem"=>"images/desenv-site.jpg", 
    "titulo"=>"Criar um site", 
    "descrição"=>"Descrição do serviço 1"],
  
    ["imagem"=>"images/ecommerce.png",
    "titulo"=>"Criar uma Loja Virtual",
    "descrição"=>"Descrição do serviço 2"],
  
    ["imagem"=>"images/blog.jpg",
    "titulo"=>"Criar um blog",
    "descrição"=>"Descrição do serviço 3"]
  ];

  function listarServicos(){
      global $servicos;
      foreach ($servicos as $servico) {
          echo "<div class='col-4'>
          <div class='card'>
            <img src='".$servico['imagem']."' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>".$servico['titulo']."</h5>
              <p class='card-text'>".$servico["descrição"]." </p>
              <a href='#' class='btn btn-primary'>Contrate agora</a>
            </div>
          </div>
        </div>   ";
      }
  }
 









?>