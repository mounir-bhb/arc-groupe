<template>
    <div>
        <TitleSection>Applied Tests</TitleSection>
        
        <h2>Routine tests</h2>
        <ul>
            <li>Measurement of winding resistance</li>
            <li>iron losses and current test</li>
            <li>Copper losses test</li>
            <li>Short circuit voltage test</li>
            <li>applied voltage test</li>
            <li>insulation oil dielectric test</li>
        </ul>
        <h2>Special tests</h2>
        <ul>
            <li>Partial discharge measurement</li>
            <li>Measurment of harmonics</li>
            <li>Measurment of noise level</li>
        </ul>
    </div>
</template>

<script>
import TitleSection from '@/Components/TitleSection.vue';

    export default {
    components: { TitleSection }
}
</script>

<style lang="scss" scoped>
    ul{
        padding-left: 15px;
    }
</style>