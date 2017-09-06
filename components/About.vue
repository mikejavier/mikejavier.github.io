<template>
  <section class="section">
    <div class="container">

      <h1 class="title">About</h1>

      <div class="content">
        <p>Olá, meu nome é Michael Santillán nascido no Equador, tenho {{getAge}} anos e atualmente moro no Brasil onde trabalho como desenvolvedor Front-End. Pelas empresas que eu passei fui responsável pela criação de websites utilizando as melhores e atuais técnicas de desenvolvimento existente no mercado. Passo a maior parte do meu tempo criando e trabalhando em projetos fantásticos.</p>

        <p class="biography-data-label">
          <span class="icon"><i class="fa fa-map-marker"></i></span>
          Recife - Brasil
        </p>

        <p class="biography-data-label">
          <span class="icon"><i class="fa fa-phone"></i></span>
          +55 81 9.96917095
        </p>

        <p class="biography-data-label">
          <span class="icon"><i class="fa fa-envelope"></i></span>
          contato@michaelsantillan.com
        </p>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    data () {
      return {

      }
    },
    computed: {
      getAge () {
        const today = new Date()
        return today.getFullYear() - 1992
      }
    }
  }
</script>

<style lang="scss" scoped></style>
