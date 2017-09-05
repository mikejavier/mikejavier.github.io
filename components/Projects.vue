<template>
  <section class="portfolio wrap">
    <div class="section-title">
      <h1><i class="fa fa-lightbulb-o"></i> projetos</h1>
    </div>

    <div class="wrap">
      <article class="card-item" v-for="repo in repos">
        <h1 class="projeto-item-title">{{repo.name}}</h1>
        <p class="projeto-item-excerpt">{{repo.description}}</p>
        <div class="projeto-item-action">
          <a :href="repo.html_url" class="flat-button md-effect-color" target="_blank">Ver Projeto</a>
        </div>
      </article>
    </div>
  </section>
</template>

<script>
import axios from 'axios'
export default {
  name: '',

  data () {
    return {
      repos: []
    }
  },

  created () {
    axios.get('https://api.github.com/users/mikejavier/repos').then((res) => {
      this.repos = res.data
    })
  }
}
</script>

<style lang="scss" scoped>


  .projetos{}
  .projeto-item{
    border: 1px solid #ddd;
    margin-bottom: 3%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
    transition:.4s;
    background-color: #fff;
    @media (min-width: 600px) {
      lost-column:1/2 0;
    }
    @media (min-width: 900px) {
      lost-column:1/3;
    }

    &:hover{
      box-shadow: 0 27px 24px rgba(0, 0, 0, 0.2), 0 40px 77px rgba(0, 0, 0, 0.22);
    }
  }
  .projeto-item-title{
    padding-left: 1rem;
    padding-right: 1rem;
    color: #424242;
    min-height: 7.5rem;
  }
  .projeto-item-excerpt{
    padding-left: 1rem;
    padding-right: 1rem;
    font-size: 1.6rem;
    color: #9E9E9E;
    min-height: 6rem;
  }
  .projeto-item-action{
    border-top: 1px solid #ddd;
    text-align: right;
    text-transform: uppercase;
    padding: 1rem;
  }

  .card-item{
    width: 100%;
    margin-bottom: 3rem;
    border: 1px solid #ddd;
    transition: .2s;
    @media (min-width: 600px){
      lost-column:1/2;
    }
    @media (min-width: 900px){
      lost-column:1/3;
    }
    &:hover,&:active{
      box-shadow: 0 9px 46px 8px rgba(0, 0, 0, 0.14), 0 24px 38px 3px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.4);
      background-color: #f3f3f3;
    }
  }

  .card-item-midia{
    margin: 0;

    > img {
      max-width: 100%;
      height: auto;
    }
  }

  .card-item-icons{
    width: 100%;
    lost-flex-container:row;
    justify-content: space-around;
    align-items: center;
    padding: 1.5rem;

    > i {
      color: #e0e0e0;
      font-size: 2rem;
      cursor:default;
    }

    .design,
    .front-end,
    .responsivo,
    .wordpress{
      color: #424242;
    }
  }

  .card-item-action{
    padding: 1.5rem;
    border-top: 1px solid #ddd;
    text-align: right;
    text-transform: uppercase;
  }



</style>
