<template>
  <header class="relative headerSlide ">
    <div class="w-full h-full  overflow-hidden">
      <video  autoplay muted loop>
        <source src="/images/Decide.mp4" >
      </video>
      <!-- <caroussel v-slot="activeSlide" :length="this.slides.length">
        <div v-for="(slide, index) in slides" :key="index">
          <slide >
            <div v-if="index === activeSlide.activeSlide">
              
              <img :src="slide.image" class="w-full h-full object-cover" />
            </div>
            
          </slide>
        </div>
        
      </caroussel> -->
      
    </div>
  </header>

</template>

<script>
  import caroussel from '@/Components/caroussel.vue';
  import slide from '@/Components/slide.vue';
  import NavBar from './NavBar.vue'
export default {
  components:{
    caroussel,
    slide,
    NavBar
  },
  data() {
    return {
      slides: [
        { image: "/images/pic1.jpg" },
        { image: "/images/pic2.jpg" },
        { image: "/images/pic3.jpg" }
      ],
      
    };
  },
  
  methods: {
    test(activeSlide){
      console.log(activeSlide);
    },
    
    beforeEnter(el) {
      
    },
    enter(el, done) {
      
    },
    afterEnter(el) {
      
    },
    beforeLeave(el) {
    },
    leave(el, done) {
    },
    afterLeave(el) {
      
    },
  }
};
</script>

<style lang="scss" scoped>
  
  
  
  .headerSlide{
    margin-top: 45px;
    height: calc(100vh - 45px);
    /* width: 100%; */
    
  }
  @media (max-width: 767px){
    .headerSlide{
      height: fit-content;
    }
  }
  video{
    width: 100%;
  }
  /* img{
    filter: brightness(50%) grayscale(100%) hue-rotate(180deg);
  } */
  

</style>
