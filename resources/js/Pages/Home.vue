<template>
    <div>
        
        <header-slide id="home"></header-slide>
        
        <nav-bar></nav-bar>
        
        <services id="services" class="contain">
            <swiper
                :slidesPerView="'auto'"
                :spaceBetween="30"
                :pagination="{
                    clickable: true,
                }"
                :autoplay="{
                    delay: 3000,
                    disableOnInteraction: false,
                }"
                :breakpoints="{
                '640': {
                  slidesPerView: 2,
                  spaceBetween: 20,
                },
                '768': {
                  slidesPerView: 3,
                  spaceBetween: 20,
                },
                
            }"
            :grabCursor="true"
            :loop="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
                <swiper-slide><service></service></swiper-slide>
            </swiper>
            
            <!-- <service></service>
            <service></service>
            <service></service>
            <service></service>
            <service></service>
            <service></service>
            <service></service> -->
        </services>
        <about id="about"></about>
        <!-- <organization></organization> -->
        <contact id="contact" backgroundColor="black"></contact>
        <to-top></to-top>
        
    </div> 
</template>

<script>
    import NavBar from './globalComponents/shared/NavBar.vue'
    import HeaderSlide from './globalComponents/shared/HeaderSlide.vue'
    import About from './globalComponents/home/About.vue';
    import Contact from './globalComponents/shared/Contact.vue';
    import Service from './globalComponents/home/Service.vue';
    import Services from './globalComponents/home/Services.vue';
    import ToTop from '@/Components/ToTop.vue';
    import organization from './globalComponents/home/organization.vue';
    import { Swiper, SwiperSlide } from 'swiper/vue';
    import 'swiper/css';

  import 'swiper/css/pagination';

  /* import './style.css'; */
  import { Pagination, Autoplay } from 'swiper';
    export default {
        components:{
            NavBar,
            HeaderSlide,
            ToTop,
            About,
            Contact,
            Service,
            Services,
            organization,
            Swiper,
            SwiperSlide,
        },
        setup(){
            return {
                modules: [ Pagination, Autoplay ],
            };
        }
    }
</script>

<style lang="scss" >
    /* html{
        scroll-behavior: smooth;
    } */
    
    .contain{
        margin:0px 50px 0px 50px;
    }
    :root{
        --main-color:#22c55e;
        --main-color-alt: #3df380;
    }
    h1{
        color: #0e1116;
        font-size: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 600;
    }
    .mySwiper{
        /* display: flex;
        justify-content: center; */
        width: fit-content;
    }
    /*::selection{
        background-color: #22c55e;
        color: white;
    } */
    .swiper-slide {
  text-align: center;
  font-size: 18px;
  /* background: #fff; */
  margin-top: 0;
  padding-top: 0;
  /* Center slide text vertically */
  display: flex;
  justify-content: center;
  align-items: center;
}
    
    
</style>