<template>
    <div>
        <slot :activeSlide="this.activeSlide"/>
        <div class="absolute top-1/2 left-0 p-4 btn-center">
            <button @click="prevSlide" class=" hover:bg-green-500 text-white font-semibold 
            py-2 px-4 border border-none rounded-full shadow">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
        <div class="absolute top-1/2 right-0 p-4 btn-center">
            <button @click="nextSlide" class="hover:bg-green-500 text-white 
            font-semibold py-2 px-4 border border-none rounded-full shadow ml-4">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="header-title">
            <div>
                <img src="/images/logo-arc.png" alt="logo" />
            </div>
            
            <h1>Arc-groupe</h1>
        </div>
    </div>
</template>

<script>
    export default {
        props:['length'],
        data(){
            return {
                activeSlide: 0,
                autoPlayEnabled: true,
                timeOutDuration: 10000,
            };
        },
        mounted() {
            if(this.autoPlayEnabled){
                setInterval(() => {
                this.activeSlide = (this.activeSlide + 1) % this.length;
                }, this.timeOutDuration); // Change the slide
            }
            
        },
        methods:{
            nextSlide() {
              this.activeSlide = this.activeSlide + 1 >= this.length ? 0 : this.activeSlide + 1;
            },
            prevSlide() {
              this.activeSlide = this.activeSlide - 1 < 0 ? this.length - 1 : this.activeSlide - 1;
            },
        }
    }
</script>

<style lang="scss" scoped>
    .btn-center{
        transform: translateY(-50%);
    }
    .btn-center ,button{
        opacity: 0.8;
    }
    i{
        opacity: 1;
    }
    .header-title{
        position: absolute;
        color: white;
        display: flex;
        justify-content: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        h1{
            color: white;
            opacity: 0.8;
            text-align: center;
        }
        div{
            display: flex;
            align-items: center;
            img{
                width: 100px;
                height: 100px;
                opacity: 0.7;
                max-width: max-content;
            }
        }
        
    }

</style>