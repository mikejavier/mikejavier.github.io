<template>
  <section class="container">
    <ms-header></ms-header>
    <main>
      <about></about>
      <knowledge></knowledge>
      <timeline></timeline>
      <projects></projects>
    </main>
    <ms-footer></ms-footer>
  </section>
</template>

<script>
import MsHeader from '~/components/Header.vue'
import MsFooter from '~/components/Footer.vue'
import About from '~/components/About.vue'
import Knowledge from '~/components/Knowledge.vue'
import Timeline from '~/components/Timeline.vue'
import Projects from '~/components/Projects.vue'

export default {
  components: {
    MsHeader,
    MsFooter,
    About,
    Knowledge,
    Timeline,
    Projects
  }
}
</script>

<style lang="scss">
  // colors
  $color-light: #0088CC;
  $color-dark: #292c2e;

  $color-white: #fff;
  $color-black: #000;

  $color-grey: #9E9E9E;
  $color-grey-dark: #424242;
  $color-grey-light: #DDD;

  // font
  $font: 'Open Sans', 'sans-serif';
  $font-size-base: 10px;
  $font-size: 1.6rem;
  $font-line-height:1.2;

  //Margin and Padding
  $margin-base:1rem;
  $padding-base:1rem;

  //BreakPoints
  $bp-phone: max-width 480px;
  $bp-tablet: 967px;
  $bp-desktop: 1024px;

  //Border
  $border-radius-base:4px;

  $z-depth-2: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  $z-depth-3: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 1px 8px 0 rgba(0, 0, 0, 0.12), 0 3px 3px -2px rgba(0, 0, 0, 0.4);
  $z-depth-4: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.4);
  $z-depth-6: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.4);
  $z-depth-8: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.4);
  $z-depth-16: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.4);
  $z-depth-24: 0 9px 46px 8px rgba(0, 0, 0, 0.14), 0 24px 38px 3px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.4);

  *,*:before,*:after{
      box-sizing:border-box;
  }
  html{
      font-size: 62.5%;
  }
  html, body {
      height: 100%;
  }
  body {
      font-family: $font;
      font-size: $font-size;
      background-color: #DFDFDF;
  }

  main{
      margin-top: -3rem;
  }

  a{
      text-decoration: none;
  }

  img{
      max-width: 100%;
  }

  section{
      background-color: $color-white;
      margin-bottom: 2rem;
      box-shadow: $z-depth-2;
  }

  .wrap{
      width: 100%;
      lost-center:1280px;
      lost-flex-container:row;
      padding: 3rem;
  }

  .list{
      list-style: none;
      padding: 0;
      margin: 0;
  }

  .section-title{
      display: block;
      width: 100%;
      margin: 2rem 0;
      font-size: 1.8rem;

      h1{
          display: inline-block;
          margin: 0;
          color: $color-grey-dark;
          text-transform: uppercase;
      }
  }






</style>
