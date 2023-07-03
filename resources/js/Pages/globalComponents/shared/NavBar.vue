

<template>
    <!-- <nav class="w-full border-green-500 text-white bg-green-600  opacity-90" :class="{'bg-transparent text-white bold': !isScrolling, 'text-white bg-green-600  opacity-90': isScrolling}"> -->
    <nav class="w-full border-green-500 text-white bg-green-600  opacity-90">
        <div class="container-nav ">
            <div class="logo ">
                <Link href="#home" class="flex text-white font-bold">
                    <img src="/images/logo-arc.png" alt="logo" class="logo-img">
                    <div class="logo-div px-2">ARC GROUPE</div>
                </Link>
            </div>
            <div class="links-nav ">
                <Link href="/home" class=" nav-link">Home</Link>
                <Link href="/home/#services" class="nav-link">Services</Link>
                <Link href="/home/#about" class=" nav-link">About us</Link>
                <!-- <div class="relative parent-link">
                    <div class="child hover:text-green-500 mr-4 ">
                        <Link href="#services" class="mx-2">Services</Link>
                        <span class=""><i class="fa-light fa-chevron-down"></i></span>
                    </div>
                    <div class="hidden hover:block">
                        <div class="sub-link absolute bg-green-500 rounded shadow-lg text-white
                        divide-y divide-green-400">
                            <Link href="#" class="sub-l px-4 py-1">Service 1</Link>
                            <Link href="#" class="sub-l px-4 py-2">Service 2</Link>
                            <Link href="#" class="sub-l px-4 py-2">Service 3</Link>
                        </div>
                    </div>
                    
                </div> -->
                <Link href="/home/#contact" class="nav-link">Contact us</Link>
                <Link href="/help" class=" nav-link">Help</Link>
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
        <div
            :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
            class="lg:hidden resp-links-nav">
            <div class="resp-links py-4">
                <Link href="/home" class=" nav-link">Home</Link>
                <Link href="/home/#services" class="nav-link">Services</Link>
                <Link href="/home/#about" class=" nav-link">About us</Link>
                <Link href="/home/#contact" class="nav-link">Contact us</Link>
                <Link href="/help" class=" nav-link">Help</Link>
            </div>
        </div>
    </nav>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    export default {
    components:{
        Link
    },
         data() {
            return {
                isScrolling: false,
                showingNavigationDropdown:false
            }
        },
       /* mounted() {
            window.addEventListener('scroll', this.handleScroll)
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll)
        }, */
        /* methods: {
            handleScroll() {
                if (window.scrollY > 0) {
                  this.isScrolling = true
                  
                } else {
                  this.isScrolling = false
                }
            }
        } */
  }
</script>

<style lang="scss" scoped>
    
    nav{
        height: 45px;
        z-index: 2;
        /* bottom: 0; */
        position: fixed;
        top: 0;
        margin-bottom: 10px;
    }
    .logo{
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo-img{
        height: 50px; 
    }
    .logo-div {
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container-nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-left: 5%;
        margin-right: 5%;
    }
    .links-nav{
        
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    @media (max-width: 767px){
        .links-nav{
            display: none;
        }
    }
    .nav-link{
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
    }
    .nav-link::after{
        position: absolute;
        content: "";
        width: 100%;
        height: 0;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        border-radius: 2px;
        background-color: var(--main-color-alt);
        transition-duration: 0.7s;
        z-index: -1;
    }
    .nav-link:hover::after{
        height: 100%;
    }
    /* .parent-link{
        height: 45px;
    }
    .child{
        height: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .sub-link{
        width: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: absolute;
    }
    .sub-l:hover{
        background-color: white;
        color: #22c55e;
    } */
    /* .parent-link:hover > .sub-link{
        display: inline-block;
    } */
    .resp-links-nav{
        background: #16a34a;
        /* overflow-y: scroll; */
        .resp-links{
            /* overflow: scroll; */
            .nav-link{
                font-size: x-large;
            }
        }
    }
</style>