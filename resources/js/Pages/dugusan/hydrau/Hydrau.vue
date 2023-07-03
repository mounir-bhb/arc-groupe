<template>
    <div class="item" :style="{cursor: $page.props.auth.user? 'pointer':'auto'}" @click="edit">
        <div class="section">
            <div class="desc">
                <h2 v-if="hydrau.name">{{hydrau.name}}</h2>
                <table>
                    <tr v-if="hydrau.pq">
                        <th>P+Q:</th>
                        <td>{{hydrau.pq}}</td>
                    </tr>
                    <tr v-if="hydrau.vnominale">
                        <th>Vnominale</th>
                        <td>{{ hydrau.vnominale }}</td>
                    </tr>
                </table>
            </div>
            <img src="/images/pics/ohtp16.png" alt="">
        </div>
    </div>
</template>

<script>
    import { router } from '@inertiajs/vue3'
    export default {
        props:['hydrau'],
        methods:{
            edit(){
                if(this.$page.props.auth.user){
                    router.get(route('hydrau.edit', this.hydrau.id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
        .item{
            width: 400px;
            .section{
            position: relative;
            padding: 20px;
            height: 200px;
            width: 350px;
            justify-content: flex-start;
            
            .desc{
                display: flex;
                width: 70%;
            }
        }
        img{
            position: absolute;
            right: 0;
            top: -10%;
            height: 250px;
            z-index: 2;
        }
        }
        
        
</style>