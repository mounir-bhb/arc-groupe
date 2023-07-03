

<template> 
    <!-- <nav :class="{'opacity-90': isScrolling}"
        :style="{backgroundColor: isScrolling? 'var(--main-color)':'transparent',color:isScrolling?'white':'var(--main-color)'}">
     -->
     <nav>
        <div class="container-nav ">
            <div class="links-nav ">
                <div class="links">
                    <Link href="/home" class="nav-link">Home</Link>
                    <Link href="/dugusan" class="nav-link">Dugusan</Link>
                    <Link href="/trafo" class="nav-link">Oz trafo</Link>
                    <Link href="/strafo" class="nav-link">Oz trafo</Link>
                </div>
                <div>
                    <Link href="/home" class="logo">
                        <!-- ARC GROUPE -->
                        <img src="/images/logo-arc.png" alt="logo" class="logo-img">
                        <div class="logo-div px-2">ARC GROUPE</div>
                    </Link>
                </div>
                <div class="links">
                    <Link href="/home" class="nav-link">Home</Link>
                    <Link href="/services/dugusan" class="nav-link">Dugusan</Link>
                    <Link href="/services/trafo" class="nav-link">Oz trafo</Link>
                    <!-- <Link href="/help" class="nav-link">Help</Link> -->
                    <Language></Language>
                </div>
                <div class="-mr-2 flex items-center lg:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
            </div>
        </div>
        <div
            :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
            class="lg:hidden resp-links-nav">
            <div class="resp-links py-4">
                <Link href="/home" class="nav-link">Home</Link>
                <Link href="/dugusan" class="nav-link">Dugusan</Link>
                <Link href="/trafo" class="nav-link">Oz trafo</Link>
                <Link href="/strafo" class="nav-link">Oz trafo</Link>
                <Link href="/home" class="nav-link">Home</Link>
                <Link href="/services/dugusan" class="nav-link">Dugusan</Link>
                <Link href="/services/trafo" class="nav-link">Oz trafo</Link>
                <Language></Language>
            </div>
        </div>
    </nav>
</template>

<script>
    import { Link } from '@inertiajs/vue3';
    import Language from './Language.vue'
    export default {
    components:{
        Link,
        Language
    },
        data() {
            return {
                isScrolling: false,
                showingNavigationDropdown:false
                /* shadow: '0px -2px 10px 1px #22c55e' */
            }
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll)
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll)
        },
        methods: {
            handleScroll() {
                if (window.scrollY > 0) {
                  this.isScrolling = true
                    /* this.shadow= 'none' */
                  
                } else {
                  this.isScrolling = false
                  /* this.shadow= '0px -2px 10px 1px #22c55e' */
                }
            }
        }
  }
</script>

<style lang="scss" scoped>
    
    nav{
        font-weight: bold;
        height: 45px;
        z-index: 5;
        position: fixed;
        top: 0;
        display: flex;
        justify-content: center;
        max-width: calc(100% - 200px);
        width: 100%;
        background-color: var(--back-color-alt);
        color: var(--main-color);
        /* box-shadow: -2px 2px 0.5px 2px #d4d1d1; */
        opacity: 0.9;
    }
    @media (max-width: 767px){
        nav{
            max-width: 100%;
            display: block;
        }
    }
    .container-nav{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        /* margin-left: 5%;
        margin-right: 5%; */
    }
    .links-nav{
        height: 45px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        .links{
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 32%;
            height: 100%;
        }
        @media (max-width: 767px){
            .links{
                display: none;
            }
        }
    }
    .logo{
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo-img{
        height: 40px; 
    }
    .logo-div {
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: green;
    }
    .nav-link{
        font-size: large;
        font-family:  'EB Garamond', serif;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-right: 5px;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }
    /* .nav-link:hover{
        color: var(--main-color-alt);
    } */
    .nav-link::after{
        position: absolute;
        content: "";
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        /* transform: translateY(-50%); */
        border-radius: 2px;
        background-color: var(--main-color);
        transition-duration: 0.7s;
        z-index: -1;
    }
    .nav-link:hover::after{
        width: 100%;
    }
    .resp-links-nav{
        background: var(--back-color-alt);
        /* overflow-y: scroll; */
        .resp-links{
            /* overflow: scroll; */
            .nav-link{
                font-size: x-large;
            }
        }
    }
</style>