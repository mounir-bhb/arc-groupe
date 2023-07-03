<template>
    <div class="cabines">
        <TitleSection :borderColor="'#074f74'">Nos cabine  
            <Link href="/cabine/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user">+</Link>
        </TitleSection>
        <div class="cabines-item">
            <LessMore>
                <template #less>
                    <cabine :cabine="cabines[0]" v-if="cabines[0]"></cabine>
                    <cabine :cabine="cabines[1]" v-if="cabines[1]"></cabine>
                </template>
                <template #more>
                    <cabine v-for="(cabine, index) in cabines" :key="index" :cabine="cabine"></cabine>
                </template>
            </LessMore>
            <!-- <div class="less">
                <cabine></cabine>
                <cabine></cabine>
            </div>
            <div>
                <cabine></cabine>
                <cabine></cabine>
            </div> -->
            
        </div>
    </div>
</template>

<script>
    import LessMore from '@/Components/LessMore.vue';
    import TitleSection from '@/Components/TitleSection.vue';
    import cabine from './Cabine.vue';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            cabine,
            LessMore,
            Link
        },
        props:['cabines'],
        /* data(){
            return {
                cabines: this.cabines,
            }
        } */
    }
</script>

<style lang="scss" scoped>
    .cabines-item{
        display: flex;
        /* flex-direction: column; */
        align-items: center;
        justify-content: center;
        gap: 5px;
        flex-wrap: wrap;
    }
</style>