<template>
    
        <div class="card-cabine" :style="{cursor: $page.props.auth.user? 'pointer':'auto'}" @click="edit">
            
            <div class="description">
                <div class=" flex justify-center items-center"><img src="/images/dgn-10/dgn-10.png" alt=""></div>
                <div class=" details">
                    <h2>DGN-10</h2>
                    <div class="text-details">
                        <table class=" border-spacing-y-2 border-separate p-2 table-auto">
                            <tbody>
                                <tr class="border" v-if="cabine.translations[0].back_wall">
                                    <th>Back wall:</th>
                                    <td>{{cabine.translations[0].back_wall}}</td>
                                </tr>
                                <tr class="border" v-if="cabine.translations[0].ceiling">
                                    <th>Ceiling:</th>
                                    <td>{{cabine.translations[0].ceiling}}</td>
                                </tr>
                                <tr class="border" v-if="cabine.translations[0].floor">
                                    <th>Floor:</th>
                                    <td>{{cabine.translations[0].floor}}</td>
                                </tr>
                                <tr class="border" v-if="cabine.translations[0].Accessories">
                                    <th>Accessories:</th>
                                    <td>{{cabine.translations[0].Accessories}}</td>
                                </tr>
                                <tr class="border" v-if="cabine.translations[0].handrail">
                                    <th><div>Handrail:</div></th>
                                    <td>{{cabine.translations[0].handrail}}</td>
                                </tr>
                                <tr class="border" v-if="cabine.translations[0].side_walls">
                                    <th><div>Side Walls:</div></th>
                                    <td>{{cabine.translations[0].side_walls}}</td>
                                </tr>
                            </tbody>
                        
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="sub-img">
                <div>
                    <img :src="'/storage/'+cabine.plafond_image" alt="">
                    <div>PLAFOND</div>
                </div>
                <div>
                    <img :src="'/storage/'+cabine.paroi_image" alt="">
                    <div>PAROI LATERALE</div>
                </div>
                <div>
                    <img :src="'/storage/'+cabine.sol_image" alt="">
                    <div>SOL</div>
                </div>
            </div>
        </div>
</template>

<script>
    import TitleSection from '@/Components/TitleSection.vue';
    import { router } from '@inertiajs/vue3'
    export default {
        components:{
            TitleSection,
            router
        },
        props:['cabine'],
        /* data(){
            return {
                cabine: this.cabine
            }
        }, */
        methods:{
            edit(){
                if(this.$page.props.auth.user){
                    router.get(route('cabine.edit', this.cabine.id))
                }
            }
        }

    }
</script>

<style lang="scss" scoped>
    
    .card-cabine{
        /* width: 50%; */
        position: relative;
        border-width: 2px;
        width: 45%;
        height: auto;
        padding: 20px;
        margin: 5px;
        border-radius: 1%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: var(--back-color-alt);
        font-size: medium;
        transition-duration: 0.7s;
        h2{
            margin: 12px;
        }
        
    }
    .description::before{
        content: "";
        position: absolute;
        width: 25%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: var(--main-color);
        z-index: 1;
        transform: skewX(10deg);
        transform-origin: bottom right;
    }
    
    .description{
        position: relative;
        width: 100%;
       /*  height: 400px; */
        font-size: 12px;
        display: flex;
        justify-content: space-around;
        overflow: hidden;
        div:nth-of-type(1){
            img{
                height: 350px;
                z-index: 2;
            }
        }
        div:nth-of-type(3){
            img{
                height: 80px;
            }
        }
        
    }
    /* .description::after{
        content: "";
        position: absolute;
        width: 25%;
        height: 100%;
        top: 0;
        right: 0;
        background-color: #0c5da8;
        z-index: -1;
        transform: skewX(-10deg);
        transform-origin: bottom right;
    } */
    .sub-img{
        display: flex;
        /* flex-direction: column; */
        color: white;
        background-color: var(--main-color);
        align-items: center;
        justify-content: space-around;
        padding-top: 10px;
        div{
            text-align: center;
            font-weight: bold;
            display: flex;
            align-items: center;
            flex-direction: column;
            div{
                padding-top: 3px;
            }
        }
    }
    .details{
        
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .text-details{
        font-size: large;
        height: 100%;
        
    }
    /* .card-cabine:hover .sub-img{
        display: flex;
    } */
</style>