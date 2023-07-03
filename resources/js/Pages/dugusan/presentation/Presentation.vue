<template>
    <div class="presentation" :style="{cursor: $page.props.auth.user && presentation[0] ? 'pointer':'auto'}" @click="edit">
        <div class="conteneur">
            <div class="detail">
                <TitleSection >Présentation
                    <Link href="/presentation/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user && !presentation[0]">+</Link>
                </TitleSection>
                <div class="contain" v-if="presentation[0]">
                    <p v-for="(paragraphe, index) in presentation[0].translations" :key="index" >
                        {{ paragraphe.description }}
                    </p>
                    
                </div>
            </div>
            <div class="image">
                <img :src="'/storage/'+presentation[0].main_image" alt="" v-if="presentation[0]">
            </div>
        </div>
    </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    import { router } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            Link
        },
        props:['presentation'],
        methods:{
            edit(){
                if(this.$page.props.auth.user && this.presentation[0]){
                    router.get(route('presentation.edit', this.presentation[0].id))
                }
                
            }
        }
    }
</script>

<style lang="scss" scoped>
    .presentation{
        /* margin-top: 45px;
        margin-bottom: 30px; */
        
        height: 100vh;
        /* margin: 45px 0px 30px 0px; */
        margin: 0px 0px 30px 0px;
        padding-top: 20px;
        padding-bottom: 20px;
        /* background-color: #17181a; */
        /* color: white; */
        display: flex;
        justify-content: center;
        align-items: center;
        .conteneur{
            position: relative;
            margin-top: 30px;
            padding-bottom: 20px;
            width: 85%;
            background-color: var(--back-color-alt);
            display: flex;
        }
        .detail{
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .image{
            position: absolute;
            right: -5%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            
            
        }
        p{
            text-indent: 30px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
    }

</style>