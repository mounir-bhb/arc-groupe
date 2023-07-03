<template>
    <div class="panneau" :style="{cursor: $page.props.auth.user? 'pointer':'auto'}" @click="edit">
            <h2 v-if="panneau.translations[0].name">{{ panneau.translations[0].name }}</h2>
            <div class="section">
                <div>
                    <table>
                        <tr v-if="panneau.translations[0].nombre_arrets">
                            <th>Nombre d'arrets</th>
                            <td>{{panneau.translations[0].nombre_arrets}}</td>
                        </tr>
                        <tr v-if="panneau.translations[0].type_controle">
                            <th>Type de controle</th>
                            <td>{{panneau.translations[0].type_controle}}</td>
                        </tr>
                        <tr v-if="panneau.translations[0].type_entrainement">
                            <th>Type d'entrainement</th>
                            <td>{{panneau.translations[0].type_entrainement}}</td>
                        </tr>
                        <tr v-if="panneau.translations[0].controle_groupe">
                            <th>Controle de groupe</th>
                            <td>{{panneau.translations[0].controle_groupe}}</td>
                        </tr>
                        <tr v-if="panneau.translations[0].communication_serie">
                            <th>Communiation série</th>
                            <td>{{panneau.translations[0].communication_serie}}</td>
                        </tr>
                        <tr v-if="panneau.translations[0].supplementaire">
                            <th>Fonctionnalité supplémentaires:</th>
                            <td>
                                {{ panneau.translations[0].supplementaire }}
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- <img src="/images/pics/arl300.png" alt=""> -->
                <img :src="'/storage/'+panneau.main_image" alt="">
            </div>
        </div>
</template>

<script>
    import { router } from '@inertiajs/vue3'
    export default {
        props:['panneau'],
        methods:{
            edit(){
                if(this.$page.props.auth.user){
                    router.get(route('panneau.edit', this.panneau.id))
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    
    .panneau{
        position: relative;
        /* border-width: 1px; */
        border-radius: 5px;
        /* background-color: var(--back-color-alt); */
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 15px;
        overflow: hidden;
        width: 80%;
        box-shadow: -2px 2px 0.5px 2px #eee;
        img{
            z-index: 2;
            width: 30%;
        }
        .section{
            display: flex;
            justify-content: space-around;
            th{
                padding-top: 4px;
                padding-bottom: 4px;
                display: flex;
            }
        }
    }
    .panneau::after{
        content: "";
        position: absolute;
        width: 20%;
        height: 100%;
        top: 0;
        right: 0;
        background-color: var(--main-color);
        transform: skewX(-10deg);
        transform-origin: bottom right;
    }
</style>