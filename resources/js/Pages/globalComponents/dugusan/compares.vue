<template>
    
    <LessMore>
        <template #less>
            <Compare></Compare>
        </template>
        <template #more>
            <Compare></Compare>
            <Compare></Compare>
        </template>
    </LessMore>
    
</template>

<script>
    import LessMore from '@/Components/LessMore.vue';
import Compare from './compare.vue';
    export default {
        components:{
            LessMore,
            Compare
        }
    }
</script>

<style lang="scss" scoped>

</style>