<template>
    
    <div class="top" :class=this.over >
        <button class=" text-white font-semibold py-2 px-4 shadow" @click="goTop">
            <!-- <i class="fa-solid fa-up"></i> -->
            <i class="fa-solid fa-chevron-up"></i>
        </button>
        
    </div>
    
</template>

<script>
    export default {
        props:{
            color:{
                type: String,
                default: undefined
            },
            hovColor:{
                type: String,
                default: undefined
            }
        },
        data(){
            return {
                over:'hidden',
                hoverder:false
            };
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll)
        },
        methods:{
            handleScroll() {
                if (window.scrollY > window.innerHeight) {
                  /* this.isScrolling = true */
                  this.over='block'
                } else {
                  /* this.isScrolling = false */
                  this.over='hidden'
                }
            },
            goTop(){
                window.scrollTo({
                    top:0,
                    behavior:'smooth'
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .top{
        width: 40px;
        height: 40px;
        bottom: 10px;
        right: 10px;
        position: fixed;
        border-radius: 100%;
        background-color: var(--main-color);
        z-index: 5;
        button{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 100%;
            i{
                display: flex;
                justify-content: center;
                align-items: center;

            }
        }
    }
    button:hover{
        background-color: var(--main-color-alt);
    }
    
    
    
</style>