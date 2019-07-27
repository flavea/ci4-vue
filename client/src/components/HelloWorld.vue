<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>Essential Links</h2>
    <ul>
      <li>
        <a
          href="https://vuejs.org"
          target="_blank"
        >
          Vue Js Documentation
        </a>
      </li>
      <li>
        <a
          href="https://codeigniter4.github.io/userguide/index.html"
          target="_blank"
        >
          CodeIgniter4 Documentation
        </a>
      </li>
      <li>
        <router-link :to="{ name: 'Books'}">Example Page: Books</router-link>
      </li>
    </ul>
  </div>
</template>

<script>

export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your Vue.js + Code Igniter + REST API App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
