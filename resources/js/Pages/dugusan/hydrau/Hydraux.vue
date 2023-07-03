<template>
    <div class="tompon-hydrau contain" id="tompon-hydrau">
            <TitleSection>Tompon hydraulique
                <Link href="/hydrau/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user">+</Link>
            </TitleSection>
            <div class="sections">
                
                <Hydrau v-for="(hydrau, index) in hydraux" :key="index" :hydrau="hydrau"></Hydrau>
                
            </div>
        </div>
</template>

<script>
import TitleSection from '@/Components/TitleSection.vue';
import Hydrau from './Hydrau.vue';
import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            Hydrau,
            Link
        },
        props:['hydraux'],
    }
</script>

<style lang="scss">
    .sections{
            justify-content: space-around;
        }

</style>