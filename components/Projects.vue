<template>
  <section class="section">
    <div class="container">
      <h1 class="title">Projects</h1>

      <div class="columns is-multiline is-tablet">
        <div class="column is-one-quarter" v-for="repo in repos" v-if="repo.homepage && !repo.fork">
          <article class="card">
            <header class="card-header">
              <p class="card-header-title">{{repo.name}}</p>
            </header>
            <div class="card-content">
              <div class="content">
                <p>{{repo.description}}</p>
              </div>
            </div>
            <footer class="card-footer">
              <a :href="repo.html_url" class="card-footer-item" target="_blank">Demo</a>
              <a :href="repo.html_url" class="card-footer-item" target="_blank"><i class="fa fa-github"></i></a>
            </footer>
          </article>
        </div>
      </div>

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

<style lang="scss" scoped></style>
