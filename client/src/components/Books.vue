<template>
  <div>
    <h2>Books</h2>
    <ul>
      <li v-for="book in books" :key="book.book_id">
         {{ book.book_title }} by {{ book.book_author }}
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Books',
  data () {
    return {
      books: []
    }
  },
  mounted () {
    this.$api.get('book/get').then(response => ( this.books = response.data.books ))
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
