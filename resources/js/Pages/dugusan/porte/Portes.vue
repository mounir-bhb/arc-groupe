<template>
    <div class="portes contain">
        <TitleSection :borderColor="'#074f74'">Portes de cabine
            <Link href="/porte/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user">+</Link>
        </TitleSection>
        <LessMore>
            <template #less>
                <Porte :porte="portes[0]" v-if="portes[0]"></Porte>
                <Porte :porte="portes[1]" v-if="portes[1]"></Porte>
            </template>
            <template #more>
                <Porte v-for="(porte, index) in portes" :key="index" :porte="porte"></Porte>
                
            </template>
        </LessMore>
        
        <!-- {{ portes[0] }} -->
    </div>
</template>

<script>
    import LessMore from '@/Components/LessMore.vue';
    import TitleSection from '@/Components/TitleSection.vue';
    import Porte from './Porte.vue';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            Porte,
            LessMore,
            Link
        },
        props:['portes'],
    }
</script>

<style lang="scss" scoped>
    /*.portes{
         .slider{
            display: flex;
            flex-wrap: nowrap;
            overflow-x: hidden;
            gap: 10px;
            margin-bottom: 15px;
            width: 100%;
        } */
        
        
    
</style>