<template>
    <div class="services contain">
        <TitleSection>Our Services</TitleSection>
        <div class="specialities">
            <slot/>
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
    .specialities{
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;

    }
</style>