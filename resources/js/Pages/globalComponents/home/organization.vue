<template>
    <div class="organization">
        <TitleSection>Our organizations</TitleSection>
        <img src="/images/org.jpeg" alt="">
    </div>
</template>

<script>
    
    import TitleSection from '@/Components/TitleSection.vue';
    export default {
    TitleSection,
    components: { TitleSection }
}
</script>

<style lang="scss" scoped>
    img{
        width: 100%;
    }
</style>