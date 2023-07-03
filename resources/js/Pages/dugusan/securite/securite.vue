<template>
    <div class="securite" :style="{cursor: $page.props.auth.user && securite[0]? 'pointer':'auto'}" @click="edit">
        <div class="flex justify-center items-center">
            <h2 class="text-white border-b-2 mb-4">Equipement de sécurité avec effet tompon</h2>
            <Link href="/securite/create" class="bold text-2xl ml-5" v-if="$page.props.auth.user && !securite[0]">+</Link>
        </div>
        
        <div class="section" v-if="securite[0]">
            <div class="desc">
                <h2 class="text-white" v-if="securite.name">{{ securite.name }}</h2>
                <div class="flex justify-center items-center h-full">
                    
                    <table>
                        <tr v-if="securite[0].vnominale">
                            <th>V-nominal:</th>
                            <td>{{ securite[0].vnominale }}</td>
                        </tr>
                        <tr v-if="securite[0].pq">
                            <th>P+Q :</th>
                            <td>{{ securite[0].pq }}</td>
                        </tr>
                        <tr v-if="securite[0].translations[0].type_rails">
                            <th>Type de rails:</th>
                            <td>{{ securite[0].translations[0].type_rails }}</td>
                        </tr>
                        <tr v-if="securite[0].translations[0].normes_directive">
                            <th>Normes Directive:</th>
                            <td>{{ securite[0].translations[0].normes_directive }}</td>
                        </tr>
                    </table>
                    <!-- <img src="/images/pics/dgn9-16.png" alt=""> -->
                    <img :src="'/storage/'+securite[0].main_image" alt="" v-if="securite[0].main_image">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { router } from '@inertiajs/vue3';
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            Link
        },
        props:['securite'],
        methods:{
            edit(){
                if(this.$page.props.auth.user && this.securite[0]){
                    router.get(route('securite.edit', this.securite[0].id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>