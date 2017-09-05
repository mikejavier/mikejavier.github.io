<template>
  <section>
    <ms-header></ms-header>
    <main>
      <about></about>
      <knowledge></knowledge>
      <!-- <timeline></timeline> -->
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

<style lang="scss"></style>
