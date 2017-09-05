<template>
  <section class="conhecimentos wrap">
    <div class="section-title">
      <h1><i class="fa fa-gears"></i> Competências</h1>
    </div>
    <div class="wrap">
      <div class="conhecimentos-gerais">
        <div class="conhecimentos-gerais-item">
         <div class=" progress-radial progress-70"><div class="overlay"><span class="overlay-label">70%</span></div></div>
         <h3 class="conhecimentos-gerais-item-nome"> Desenho Web</h3>
       </div>
       <div class="conhecimentos-gerais-item">
         <div class=" progress-radial progress-85"><div class="overlay"><span class="overlay-label">90%</span></div></div>
         <h3 class="conhecimentos-gerais-item-nome"> Desenvolvimento</h3>
       </div>
       <div class="conhecimentos-gerais-item">
         <div class=" progress-radial progress-60"><div class="overlay"><span class="overlay-label">60%</span></div></div>
         <h3 class="conhecimentos-gerais-item-nome"> Marketing & SEO</h3>
       </div>
     </div>

     <ul class="conhecimentos-especificos">
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">HTML 5</h3>
        <div class="progress">
          <span class="progress-bar-laranja-90"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">CSS 3</h3>
        <div class="progress">
          <span class="progress-bar-azul-90"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">Javascript</h3>
        <div class="progress">
          <span class="progress-bar-amarelo-60"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">Wordpress</h3>
        <div class="progress">
          <span class="progress-bar-preto-70"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">Photoshop</h3>
        <div class="progress">
          <span class="progress-bar-roxo-60"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">PHP</h3>
        <div class="progress">
          <span class="progress-bar-vermelho-40"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">SEO, Marketing, Redes Sociais</h3>
        <div class="progress">
          <span class="progress-bar-verde-80"></span>
        </div>
      </li>
      <li class="conhecimentos-especificos-item">
        <h3 class="conhecimentos-especificos-item-label">Git</h3>
        <div class="progress">
          <span class="progress-bar-marron-60"></span>
        </div>
      </li>
    </ul>
  </div>
</section>
</template>

<style lang="scss" scoped>

  .conhecimentos{
    width: 100%;

    > .wrap{
      align-items:center;
      padding: 0;
    }
  }

  .conhecimentos-gerais{
    width: 100%;
    @media (min-width: 900px){
      lost-column:1/2;
    }
  }

  .conhecimentos-gerais-item{
    width: 100%;
    text-align: center;
    margin-bottom: 5rem;
    @media (min-width: 560px) {
      lost-column:1/3;
    }

    .overlay{
      lost-flex-container:row;
      align-items:center;
    }
    .overlay-label{
      color: #0088CC;
      font-size: 2.5rem;
      width: 100%;
      text-align: center;
    }

    .conhecimentos-gerais-item-nome{
      text-align: center;
      font-size: 1.6rem;
      color: #424242;
      font-weight: 700;
    }
  }

  .conhecimentos-especificos{
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    @media (min-width: 900px){
      lost-column:1/2;
    }
  }
  .conhecimentos-especificos-item{
    margin-bottom: 1rem;
    @media (min-width: 900px){
      lost-column:1/2;
    }
  }

  .conhecimentos-especificos-item-label{
    font-size: 1.6rem;
    margin-top: 0;
    margin-bottom: .5rem;
    color: #424242;
  }








  .progress-label {
    margin: 0 0 5px;
    font-size: .8rem;
    color: #424242;
  }

  .progress {
    background-color: #F3F3F3;
    height: 30px;
    width: 100%;
    position: relative;
    margin-bottom: 1rem;
  }
  .progress .progress-bar-verde-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-10 {
    position: absolute;
    width: 10%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-20 {
    position: absolute;
    width: 20%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-30 {
    position: absolute;
    width: 30%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-40 {
    position: absolute;
    width: 40%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-50 {
    position: absolute;
    width: 50%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-60 {
    position: absolute;
    width: 60%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-70 {
    position: absolute;
    width: 70%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-80 {
    position: absolute;
    width: 80%;
    height: 100%;
    background-color: #000;
  }
  .progress .progress-bar-verde-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #2CC36B;
  }
  .progress .progress-bar-azul-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #2E8ECE;
  }
  .progress .progress-bar-roxo-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #9B50BA;
  }
  .progress .progress-bar-amarelo-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #F2CA26;
  }
  .progress .progress-bar-vermelho-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #D04233;
  }
  .progress .progress-bar-laranja-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #e67e22;
  }
  .progress .progress-bar-rosa-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #D2527F;
  }
  .progress .progress-bar-marron-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #795548;
  }
  .progress .progress-bar-preto-90 {
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #000;
  }

  /* -------------------------------------
   * Bar container
   * ------------------------------------- */
   .progress-radial {
    position: relative;
    margin: 0 auto;
    width: 140px;
    height: 140px;
    border: 2px solid #fff;
    background-color: #0088CC;
    border-radius: 50%;
  }
  .progress-radial .overlay {
    position: absolute;
    width: 70px;
    height: 70px;
    background-color: #fff;
    border-radius: 50%;
    text-align: center;
    left: 50%;
    transform: translate(-50%);
    top: 25%;
    font-size: 1.5rem;
    padding: 1rem 0;
  }

  /* -------------------------------------
   * Mixin for progress-% class
   * ------------------------------------- */
   .progress-0 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(90deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-5 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(108deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-10 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(126deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-15 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(144deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-20 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(162deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-25 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(180deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-30 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(198deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-35 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(216deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-40 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(234deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-45 {
    background-image: linear-gradient(90deg, #fff 50%, transparent 50%, transparent), linear-gradient(252deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-50 {
    background-image: linear-gradient(-90deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-55 {
    background-image: linear-gradient(-72deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-60 {
    background-image: linear-gradient(-54deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-65 {
    background-image: linear-gradient(-36deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-70 {
    background-image: linear-gradient(-18deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-75 {
    background-image: linear-gradient(0deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-80 {
    background-image: linear-gradient(18deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-85 {
    background-image: linear-gradient(36deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-90 {
    background-image: linear-gradient(54deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-95 {
    background-image: linear-gradient(72deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

  .progress-100 {
    background-image: linear-gradient(90deg, #0088CC 50%, transparent 50%, transparent), linear-gradient(270deg, #0088CC 50%, #fff 50%, #fff);
  }

</style>
