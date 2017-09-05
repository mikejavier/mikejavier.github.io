<template>
  <section class="biography wrap">
    <div class="section-title">
      <h1><i class="fa fa-user"></i> Sobre</h1>
    </div>
    <div class="wrap">
      <p class="biography-text">
        Olá, meu nome é Michael Santillán nascido no Equador, tenho 21 anos e atualmente moro no Brasil onde trabalho como desenvolvedor Front-End. Pelas empresas que eu passei fui responsável pela criação de websites utilizando as melhores e atuais técnicas de desenvolvimento existente no mercado. Passo a maior parte do meu tempo criando e trabalhando em projetos fantásticos.

        <br><br>" Enfrente algo que é difícil; isso te fará bem. A menos que você tente fazer algo além do que você já domina, você nunca crescerá."

      </p>

      <div class="biography-data">
        <span class="biography-data-label"><i class="fa fa-map-marker"></i> Recife - Brasil</span>
        <span class="biography-data-label"><i class="fa fa-smile-o"></i> 20+ clientes satisfeitos</span>
        <span class="biography-data-label"><i class="fa fa-birthday-cake"></i> 26/07/1992</span>
        <span class="biography-data-label"><i class="fa fa-desktop"></i> 50+ projetos realizados</span>
        <span class="biography-data-label"><i class="fa fa-phone"></i> +55 81 9.98976047</span>
        <span class="biography-data-label"><i class="fa fa-pencil"></i> 40+ artigos escritos</span>
        <span class="biography-data-label"><i class="fa fa-envelope"></i> contato@michaelsantillan.com</span>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
  .biography{

    > .wrap{
      padding: 0;
    }
  }
  .biography-text{
    margin-top: 0;
    margin-bottom: 3rem;
    @media (min-width: 600px){
      lost-column:1/2;
      margin-bottom: 0;
    }
  }

  .biography-data{
    width: 100%;
    lost-flex-container:row;
    @media (min-width: 600px){
      lost-column:1/2;
    }
  }
  .biography-data-label{
    width: 100%;
    white-space: nowrap;
    margin-bottom: 1.5rem;
    @media (min-width: 900px){
      width: 50%;
      display: inline-block;

    }

    &:last-child{
      display: block;
      width: 100%;
    }

    i{
      display: inline-block;
      margin-right: .5rem;
    }
  }


</style>
