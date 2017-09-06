<template>
  <section class="section">
    <div class="container">
      <h1 class="title">Articles</h1>

      <article class="media box" v-for="(post, index) in posts" v-if="index > 3">
        <div class="media-content">
          <div class="content">
            <h3>{{post.title}}</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis optio porro nobis. Hic pariatur nemo inventore architecto iste, veritatis quisquam.</p>
            <!-- <p>{{post.description}}</p> -->
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
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
      posts: []
    }
  },

  created () {
    axios.get('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2F%40mikejavier%2F').then(data => {
      console.log(data)
      this.getPosts(data.data.items)
    })
  },

  methods: {
    getPosts (data) {
      data.filter(elem => {
        console.log(elem)
        if (elem.categories.length !== 0) this.posts.push(elem)
      })
    }
  }
}
</script>

<style lang="scss" scoped></style>
