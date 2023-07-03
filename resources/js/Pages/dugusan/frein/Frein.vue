<template>
    <div class="frein" :style="{cursor: $page.props.auth.user && frein[0]? 'pointer':'auto'}" @click="edit">
        <h2 class="border-b-2 mb-4">Frein d'ascenseur hydraulique unidirectionnel
            <Link href="/frein/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user && !frein[0]">+</Link>
        </h2>
        <div class="section" v-if="frein[0]">
            <div class="desc">
                <h2 v-if="frein[0].name" >{{frein[0].name}}</h2>
                <div class="flex justify-center items-center h-full">
                    <table>
                        <tr v-if="frein[0].vnominale">
                            <th>Vnominal:</th>
                            <td><!-- 0.63 / sn --> {{ frein[0].vnominale}}</td>
                        </tr>
                        <tr v-if="frein[0].pq">
                            <th>P+Q:</th>
                            <td><!-- 4000 kg --> {{ frein[0].pq }}</td>
                        </tr>
                    </table>
                    <!-- <img src="/images/pics/dgnt9-t16.png" alt=""> -->
                    <img :src="'/storage/'+frein[0].main_image" alt="" v-if="frein[0].main_image">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { router } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            Link
        },
        props:['frein'],
        methods:{
            edit(){
                if(this.$page.props.auth.user && this.frein[0]){
                    router.get(route('frein.edit', this.frein[0].id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>