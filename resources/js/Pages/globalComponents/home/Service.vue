<template>
    <div class="service">
        <Link href="/dugusan">
        <div class="img-service">
            <img src="/images/pic1.jpg" alt="">
        </div>
        <div class="describe-service">
            <h2>Elevators</h2>
            <div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos veniam aut incidunt expedita, vero ullam recusandae, eum error cum numquam harum dicta dolore odit facilis. Quo vero itaque minima.
                </p>
            </div>
        </div>
        <div class="logo-service">
            <img src="/images/logo_DUGUSAN.png" alt="">
        </div>
    </Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            Link
        }
    }
</script>

<style lang="scss" scoped>
    .service{
        border-radius: 5%;
        /* width: 30%; */
        overflow: hidden;
        border-width: 2px;
        max-width: 300px;
    }
    .img-service{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    /* .img-service img{
        
    } */
    .logo-service{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo-service img{
        margin: 10px;
        height: 40px;
    }
    .describe-service{
        padding: 10px;
    }
    .describe-service h2{
        font-weight: bold;
        font-size: larger;
        color: green;
        text-align: center;
    }
</style>