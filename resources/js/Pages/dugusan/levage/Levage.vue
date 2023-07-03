<template>
    <div class="item" :style="{cursor: $page.props.auth.user? 'pointer':'auto'}" @click="edit">
        <div class="section">
            <div class="desc">
                <h2 v-if="levage.name">{{levage.name}}</h2>
                <table>
                    <tr v-if="levage.max_vitesse">
                        <th>Max. Vitesse nominale:</th>
                        <td>{{ levage.max_vitesse }}</td>
                    </tr>
                    <tr v-if="levage.max_charge">
                        <th>Max. charge admissible:</th>
                        <td>{{ levage.max_charge }}</td>
                    </tr>
                    <tr v-if="levage.min_charge">
                        <th>Min.Charge admissible</th>
                        <td>{{ levage.min_charge }}</td>
                    </tr>
                </table>
                
            </div>
            <img :src="'/storage/'+levage.main_image" alt="">
            <!-- <img src="/images/pics/dgntp2.png" alt=""> -->
        </div>
    </div>
</template>

<script>
    import { router } from '@inertiajs/vue3'
    export default {
        props:['levage'],
        methods:{
            edit(){
                if(this.$page.props.auth.user){
                    router.get(route('levage.edit', this.levage.id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .item{
        width: 450px;
        margin: 20px;
        /* .section{
            width: 100%;
        } */
        .section{
            position: relative;
            width: 430px;
            /* height: 170px; */
            min-height: 180px;
            
            .desc{
                width: 350px;
                display: flex;
                /* align-items: flex-start; */
                justify-content: space-around;
                margin-right: 5px;
            }
            /* .image{
                width: 80px;

            } */
        }
        img{
            position: absolute;
            width: auto;
            bottom: 50%;
            right: 0;
            transform: translate(40%, 50%);
            max-width: 80px;
            /* height: 150px; */
            max-height: 150px;
            z-index: 2;
        }
    }
</style>