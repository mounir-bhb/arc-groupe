<template>
    <div class="about contain">

        <TitleSection>About Us</TitleSection>
        <!-- <div class="title">
            <h1>About Us</h1>
            <div class=" grid place-items-center"><div class="border border-[#22c55e] w-2/3"></div></div>
        </div> -->
        <div class=" contenu ">
            
            
            <div class="describ">

                <div class="px-6" contenteditable="true">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ex omnis nobis doloremque est, nisi asperiores odio sapiente mollitia neque, voluptates quo quod. Cumque error quia dolorum iste repellendus ipsa.
                    Quidem doloribus ipsa quia illum at eos tenetur, et numquam eius, commodi est explicabo facere odit dolor officiis mollitia adipisci aliquid. Reprehenderit, molestias culpa tempore maxime amet magnam sapiente excepturi.
                </div>

            </div>
            
            <div class="pic">
                <div>
                    <img src="/images/pic4.jpg" alt="" class="img-side"/>
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    export default {
        components:{
            TitleSection
        }
    }
</script>

<style lang="scss" scoped>
    .about  {
        height: auto;
        
    }
    
    .contenu{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px 0 30px 0;
    }
    @media (max-width: 767px){
        .contenu{
            flex-direction: column-reverse;
        }
        /* .describ, .pic{
            width: 100%;
        } */
    }
    .describ{
        width: 50%;
    }
    @media (max-width: 767px){
        .describ{
            width: 100%;
        }
    }
    .pic{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
        overflow: hidden;
        margin: 60px 50px 60px 50px;
/*         padding: 50px;
 */
    }
    @media (max-width: 767px){
        .pic{
            width: 100%;
            margin-top: 20px;
        }
    }
    .img-side{
        padding: 20px;
        transform: translateY(-50%);
        transform: rotate(5deg);
    }
    
</style>