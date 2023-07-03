<template>
    <div class="porte" :style="{cursor: $page.props.auth.user? 'pointer':'auto'}" @click="edit" v-if="porte && porte.translations">
        <h2 v-if="this.porte.translations[0].name"></h2>
        <div>
            
            <img :src="'/storage/'+porte.main_image" alt="" v-if="porte.main_image">
        </div>
        <div class="description" v-if="porte.translations[0].description">
            
        </div>  
        
    </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    import { router } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection
        },
        props:['porte'],
        mounted(){
            console.log(this.porte);
        },
        methods:{
            edit(){
                if(this.$page.props.auth.user){
                    router.get(route('porte.edit', this.porte.id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    
    .porte{
        h2{
            padding: 20px;
        }
        min-width: 40%;
        width: 40%;
        /* margin: 20px; */
        background-color: #eee;
        /* border-width: 2px;  */
        .description{
            position: relative;
            background-color: var(--main-color);
            color: white;
            padding: 20px;
            opacity: 0.9;
            z-index: 1;
        }
        
    }
        
        
    
</style>