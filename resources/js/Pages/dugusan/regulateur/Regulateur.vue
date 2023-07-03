<template>
    <div class="contain regulateur p-6 text-center" id="regulateur" :style="{cursor: $page.props.auth.user && regulateur[0]? 'pointer':'auto'}" @click="edit">
        <TitleSection >Régulateur de survitesse
            <Link href="/regulateur/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user && !regulateur[0]">+</Link>
        </TitleSection>
        <div class="">
            
            <div class="section ">
                <div class="desc">
                    <h2 v-if="regulateur[0].name" >{{ regulateur[0].name }}</h2>
                    <div v-if="regulateur[0].translations[0].description">
                        {{ regulateur[0].translations[0].description }}
                    </div>
                </div>
                <div class="image">
                    
                    <img :src="'/storage/'+regulateur[0].diametre1_url" alt="" v-if="regulateur[0].diametre1_url">
                    <div v-if="regulateur[0].diametre1">Diamètre de la poulie: {{ regulateur[0].diametre1 }}</div>
                </div>
            </div>
            <div class="regulateur-pics">
                <div class="regulateur-pic">
                    <div class="flex items-center h-full">
                        
                        <img :src="'/storage/'+regulateur[0].diametre2_url" alt="" v-if="regulateur[0].diametre2_url">
                    </div>
                    <div v-if="regulateur[0].diametre2">Diamètre de la poulie: {{ regulateur[0].diametre2 }}</div>
                </div>
                <div class="regulateur-pic">
                    <div>
                        
                        <img :src="'/storage/'+regulateur[0].diametre3_url" alt="" v-if="regulateur[0].diametre3_url">
                    </div>
                    <div v-if="regulateur[0].diametre3">Diamètre de la poulie: {{ regulateur[0].diametre3 }}</div>
                </div>
                <div class="regulateur-pic">
                    <div>
                        
                        <img :src="'/storage/'+regulateur[0].diametre4_url" alt="" v-if="regulateur[0].diametre4_url">
                    </div>
                    <div v-if="regulateur[0].diametre4">Diamètre de la poulie: {{ regulateur[0].diametre4 }}</div>
                </div>
                <div class="regulateur-pic">
                    <div>
                        
                        <img :src="'/storage/'+regulateur[0].diametre5_url" alt="" v-if="regulateur[0].diametre5_url">
                    </div>
                    <div v-if="regulateur[0].diametre5">Diamètre de la poulie: {{ regulateur[0].diametre5 }}</div>
                </div>
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
            TitleSection
        },
        props:['regulateur'],
        methods:{
            edit(){
                if(this.$page.props.auth.user && this.regulateur[0]){
                    router.get(route('regulateur.edit', this.regulateur[0].id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .regulateur{
        
        .section{
            display: flex;
            justify-content: space-around;
            .desc{
            display: flex;
            flex-direction: column;
            justify-content: center;
            
        }
            div:nth-of-type(2){
                display: flex;
                flex-direction: column;
                align-items: center;
            
            }
            img{
                width: 30%;
            }
            
        }
        
        
    }
    .regulateur .desc{
        h2{
            color: white;
        }
        color: white;
        background-color: var(--main-color);
        transform: skewX(15deg);
        padding: 10px;
    }
    .regulateur .image{
        color: var(--main-color-alt);
        background-color: var(--back-color-alt);
        transform: skewX(15deg);
        padding: 10px;
    }
    .regulateur-pics{
        display: flex;
        justify-content: space-around;
        align-items: flex-end;
        padding-top: 20px;
        /* transform: skewX(15deg); */
        
        .regulateur-pic{
            img{
                align-items: center;
                width: 200px;
            }
        }
    }
</style>