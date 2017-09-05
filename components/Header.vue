<template>
  <header class="about">
    <div class="wrap">
      <div class="about-content">
        <img src="~/assets/images/ms.png"  alt="Michael Santillán Avatar" class="about-avatar">
        <h1 class="about-name">Michael Santillán</h1>
        <h2 class="about-role">Front-End Developer</h2>
        <div class="social-icons">
          <a href="http://www.facebook.com/zmike.javier" target="_blank" class="social-icons-link"><i class="fa fa-facebook md-effect-light"></i></a>
          <a href="http://www.twitter.com/_mikejavier" target="_blank" class="social-icons-link"><i class="fa fa-twitter md-effect-light"></i></a>
          <a href="http://br.linkedin.com/in/mikejavier/" target="_blank" class="social-icons-link"><i class="fa fa-linkedin md-effect-light"></i></a>
          <a href="https://github.com/mikejavier" target="_blank" class="social-icons-link"><i class="fa fa-github md-effect-light"></i></a>
        </div>
        <button target="_blank" href="https://docs.google.com/document/d/1Ay3gMvsL_Oqv9HQm3iH3mjO5vU0vNCQe4KvD7ewx4EA/edit?usp=sharing" class="button is-primary">download <i class="fa fa-download"></i> curriculum</button>
      </div>
    </div>
  </header>
</template>

<style lang="scss" scoped>
  .about{
    text-align: center;
    background:transparent url(~/assets/images/bg.jpg) fixed center no-repeat;
    background-size: cover;
    padding-bottom: 10%;
    height: 110%;
    min-height: 640px;

    > .wrap{
      height: 100%;
      justify-content:center;
      align-items:center;
    }
  }
  .about-content{
    lost-flex-container:column;
  }

  .about-avatar{
    max-width: 50%;
    margin: 10% auto 0;
    @media (min-width: 600px) {
      max-width: 250px;
    }
  }
  .about-name{
    margin: 0 0 1rem;
    font-size: 4rem;
    color: #fff;
    font-weight: bold;
  }
  .about-role{
    color: #fff;
    font-size: 2rem;
    margin: 0 0 1rem;
  }

  .social-icons{
    width: 100%;
    margin: 0 0 1rem;

    .social-icons-link{
      color: #fff;
      font-size: 3rem;

      &:hover{
        // color: $color-light;
        transition:.2s;
      }
    }
  }



  .single-header{
    text-align: center;
    height: 360px;
  }

</style>
