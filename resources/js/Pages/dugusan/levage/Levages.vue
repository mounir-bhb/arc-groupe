<template>
    <div class="tompon-levage contain" id="tompon-levage">
        <TitleSection>Tompon de levage en polyuréthane
            <Link href="/levage/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user">+</Link>
        </TitleSection>
        <div class="sections">
            <Levage v-for="(levage, index) in levages" :key="index" :levage="levage"></Levage>
            <Levage v-for="(levage, index) in levages" :key="index" :levage="levage"></Levage>
        </div>
    </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    import Levage from './Levage.vue';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            Levage,
            Link
        },
        props:['levages'],
    }
</script>

<style lang="scss" >
    
</style>