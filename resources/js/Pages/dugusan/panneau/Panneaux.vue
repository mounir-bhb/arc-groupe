<template>
    <div class="contain panneaux" id="panneaux">
        <TitleSection>panneaux de controle
            <Link href="/panneau/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user">+</Link>
        </TitleSection>
        <Panneau v-for="(panneau, index) in panneaux" :key="index" :panneau="panneau"></Panneau>
        
    </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    import Panneau from './panneau.vue';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            Panneau,
            Link
        },
        props:['panneaux'],
    }
</script>

<style lang="scss" scoped>
    .panneaux{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    
</style>