<template>
    <Content>
    <div class="create">
         <form @submit.prevent="submit">
            
            <CreateComponent >
                <template #en>
                    <div class="inputs">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name_en">
                    </div>
                    <div class="inputs">
                        <label for="">nombre d'arrets</label>
                        <input type="text" v-model="form.nombre_arrets_en" @change="test">
                    </div>
                    <div class="inputs">
                        <label for="">type_controle</label>
                        <input type="text" v-model="form.type_controle_en">
                    </div>
                    <div class="inputs">
                        <label for="">type_entrainement</label>
                        <input type="text" v-model="form.type_entrainement_en">
                    </div>
                    <div class="inputs">
                        <label for="">controle_groupe</label>
                        <input type="text" v-model="form.controle_groupe_en">
                    </div>
                    <div class="inputs">
                        <label for="">communication_serie</label>
                        <input type="text" v-model="form.communication_serie_en">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.supplementaire_en">
                    </div>
                </template>
                <template #fr>
                    <div class="inputs">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name_fr">
                    </div>
                    <div class="inputs">
                        <label for="">nombre d'arrets</label>
                        <input type="text" v-model="form.nombre_arrets_fr">
                    </div>
                    <div class="inputs">
                        <label for="">type_controle</label>
                        <input type="text" v-model="form.type_controle_fr">
                    </div>
                    <div class="inputs">
                        <label for="">type_entrainement</label>
                        <input type="text" v-model="form.type_entrainement_fr">
                    </div>
                    <div class="inputs">
                        <label for="">controle_groupe</label>
                        <input type="text" v-model="form.controle_groupe_fr">
                    </div>
                    <div class="inputs">
                        <label for="">communication_serie</label>
                        <input type="text" v-model="form.communication_serie_fr">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.supplementaire_fr">
                    </div>
                </template>
                <template #tr>
                    <div class="inputs">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name_tr">
                    </div>
                    <div class="inputs">
                        <label for="">nombre d'arrets</label>
                        <input type="text" v-model="form.nombre_arrets_tr">
                    </div>
                    <div class="inputs">
                        <label for="">type_controle</label>
                        <input type="text" v-model="form.type_controle_tr">
                    </div>
                    <div class="inputs">
                        <label for="">type_entrainement</label>
                        <input type="text" v-model="form.type_entrainement_tr">
                    </div>
                    <div class="inputs">
                        <label for="">controle_groupe</label>
                        <input type="text" v-model="form.controle_groupe_tr">
                    </div>
                    <div class="inputs">
                        <label for="">communication_serie</label>
                        <input type="text" v-model="form.communication_serie_tr">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.supplementaire_tr">
                    </div>
                </template>
            </CreateComponent>
            <div class="imgs-content">
                <div class="my-4">
                    <div class="imgs" @click="newMainImage()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_img_main" class="hidden" ref="main_image">
                            <div class="img" :style="{display:main_image?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>

                        </div>
                        <img :src="main_image" alt="" v-if="main_image" class="h-full">
                    </div>
                </div>
                
                
                
                
                
            </div>
            <div class="btn">
                <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" type="submit">
                    Save
                </button>
            </div>
            
            
        </form>  
          
    </div>
</Content>
</template>

<script>
    import CreateComponent from '@/Pages/globalComponents/CreateComponent.vue';
import Content from '@/Pages/globalComponents/shared/Content.vue';
    export default {
        components:{
    CreateComponent,
    Content
},
        data(){
            return {
                form:this.$inertia.form({

                    main_image:null,

                    name_en: null,
                    nombre_arrets_en:null,
                    type_controle_en:null,
                    type_entrainement_en:null,
                    controle_groupe_en:null,
                    communication_serie_en:null,
                    supplementaire_en:null,

                    name_fr: null,
                    nombre_arrets_fr:null,
                    type_controle_fr:null,
                    type_entrainement_fr:null,
                    controle_groupe_fr:null,
                    communication_serie_fr:null,
                    supplementaire_fr:null,

                    name_tr: null,
                    nombre_arrets_tr:null,
                    type_controle_tr:null,
                    type_entrainement_tr:null,
                    controle_groupe_tr:null,
                    communication_serie_tr:null,
                    supplementaire_tr:null,

                }),
                main_image:null,
            }
        },
        methods:{
            add_img_main(e){
                this.form.main_image= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.main_image=e.target.result
                }
                reader.readAsDataURL(this.form.main_image)
            },
            
            
            newMainImage(){
                this.$refs.main_image.click();
            },
            

            submit() {
                this.form.post(route('panneau.store'),{
                    preserveScroll: true,                   
                })
            },
        }
    }
</script>

<style lang="scss" >
    :root{
        --main-color:#074f74;
        --main-color-alt:#0984c2;
        --back-color: #f7f8f8;
        --back-color-alt:#eee;
    }
    html{
        background-color: var(--back-color);
    }
    h3{
        text-align: center;
        font-size: larger;
        font-weight: bold;
        color: var(--main-color);
        padding-top: 10px;
        padding-bottom: 10px;
        
    }
    label{
        font-weight: bold;
    }
    .create{
        margin-top: 70px;
        .name{
            margin: 20px;
            padding: 20px;
            background-color: var(--back-color-alt);
            width: fit-content;
            border-radius: 5px;
        }
        input{
            border: none;
            border-bottom: solid;
            border-width: 1px;
            background-color: transparent;
            margin: 5px;
            margin-left: 10px;
        }
        .inputs{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px;

        }
        .btn{
            text-align: center;
            display: flex;
            justify-content: center;
            button{
                margin: 15px;
                padding: 10px;
                border-radius: 5px;
                background-color: var(--main-color);
                color: white;
                font-size: large;
                font-weight: bold;
                transition: 0.7s;
            }
        }
        .imgs-content{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        
        .imgs{
            position:relative;
            height: 300px;
            /* border-width: 2px; */
            border-radius: 20px;
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: var(--back-color-alt);
            img{
                position: relative;
                /* height: 100%; */
            }
            .img{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100%;
                width: 100%;
                
                .lab{
                    font-size: larger;
                    align-items: center;
                }
            }
            
            
            svg{
                /* width: 100%; */
                height: 150px;
                width: 150px;
                display: flex;
                justify-content: center;
                fill: #074f74;
                transition: 0.7s;
            }
        }
        button:hover{
            background-color: var(--main-color-alt);
        }
        /* .imgs:hover{
            background-color: #24252581;
        } */
        .imgs:hover{
            svg{
                fill: #0984c2;
            }  
        }
        .detail{
            height: 160px;
        }
    }
    
</style>