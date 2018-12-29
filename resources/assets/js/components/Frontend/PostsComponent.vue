<template>
  <div>

    <div class="col-md-6" v-for="post in posts">
      <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
        <img v-bind:src="post.top_image" v-bind:alt="post.title" />
        <div class="blog-content-body">
          <div class="post-meta">
            <span class="author mr-2"> Author Name</span>&bullet;
            <span class="mr-2">March 15, 2018 </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
          </div>
          <h2>{{post.title}}</h2>
        </div>
      </a>
    </div>

  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Posts Component mounted.')
  },

  data(){
    return{
      posts:[],
      post:{
        'image':'',
        'author_id':'',
        'top_image':'',
        'top_description':'',
        'center_image':'',
        'left_image':'',
        'right_image':'',
        'bottom_description':'',
        'category_id':'',
        'tag_id':'',
        'comment_id':'',
        'date':'',
        'comments':'',
        'title':''
      }
    }
  }, //data

  created(){
    this.fetchPosts();
  },//created

  methods:{
    fetchPosts(){
      fetch('api/posts').
      then(response => response.json()).
      then(response => {
        this.posts = response.data;
      })
    }
  }
}
</script>
