<template>
    <Content>
    <div class="create">
        <TitleSection>New Cabine</TitleSection>
         <form @submit.prevent="submit">
            <div class="name">
                <label for="">Name</label>
                <input type="text" v-model="form.name">
            </div>
            <CreateComponent >
                <template #en>
                    <div class="inputs">
                        <label for="">back wall</label>
                        <input type="text" v-model="form.back_wall_en" @change="test">
                    </div>
                    <div class="inputs">
                        <label for="">ceiling</label>
                        <input type="text" v-model="form.ceiling_en">
                    </div>
                    <div class="inputs">
                        <label for="">floor</label>
                        <input type="text" v-model="form.floor_en">
                    </div>
                    <div class="inputs">
                        <label for="">accessories</label>
                        <input type="text" v-model="form.accessories_en">
                    </div>
                    <div class="inputs">
                        <label for="">handrail</label>
                        <input type="text" v-model="form.handrail_en">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.side_walls_en">
                    </div>
                </template>
                <template #fr>
                    <div class="inputs">
                        <label for="">back wall</label>
                        <input type="text" v-model="form.back_wall_fr">
                    </div>
                    <div class="inputs">
                        <label for="">ceiling</label>
                        <input type="text" v-model="form.ceiling_fr">
                    </div>
                    <div class="inputs">
                        <label for="">floor</label>
                        <input type="text" v-model="form.floor_fr">
                    </div>
                    <div class="inputs">
                        <label for="">accessories</label>
                        <input type="text" v-model="form.accessories_fr">
                    </div>
                    <div class="inputs">
                        <label for="">handrail</label>
                        <input type="text" v-model="form.handrail_fr">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.side_walls_fr">
                    </div>
                </template>
                <template #tr>
                    <div class="inputs">
                        <label for="">back wall</label>
                        <input type="text" v-model="form.back_wall_tr">
                    </div>
                    <div class="inputs">
                        <label for="">ceiling</label>
                        <input type="text" v-model="form.ceiling_tr">
                    </div>
                    <div class="inputs">
                        <label for="">floor</label>
                        <input type="text" v-model="form.floor_tr">
                    </div>
                    <div class="inputs">
                        <label for="">accessories</label>
                        <input type="text" v-model="form.accessories_tr">
                    </div>
                    <div class="inputs">
                        <label for="">handrail</label>
                        <input type="text" v-model="form.handrail_tr">
                    </div>
                    <div class="inputs">
                        <label for="">side walls</label>
                        <input type="text" v-model="form.side_walls_tr">
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
                    <h3>Cabine</h3>
                </div>
                <div class="my-4">
                    <div class="imgs details" @click="newPlafondImage()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_img_plafond" class="hidden" ref="plafond_image">
                            <div class="img" :style="{display:plafond_image?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="plafond_image" alt="" v-if="plafond_image" class="detail">
                    </div>
                    <h3>Plafond</h3>
                </div>
                <div class="my-4">
                    <div class="imgs details" @click="newParoiImage()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_img_paroi" class="hidden" ref="paroi_image">
                            <div class="img" :style="{display:paroi_image?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="paroi_image" alt="" v-if="paroi_image" class="detail">
                    </div>
                    <h3>Paroi</h3>
                </div>
                <div class="my-4">
                    <div class="imgs" @click="newSolImage()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_img_sol" class="hidden" ref="sol_image">
                            <div class="img" :style="{display:sol_image?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="sol_image" alt="" v-if="sol_image" class="detail">
                    </div>
                    <h3>Sol</h3>
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
    import TitleSection from '@/Components/TitleSection.vue';
    import CreateComponent from '@/Pages/globalComponents/CreateComponent.vue';
    import Content from '@/Pages/globalComponents/shared/Content.vue';
    export default {
        components:{
            CreateComponent,
            Content,
            TitleSection
        },
        props:['cabine'],
        data(){
            return {
                form:this.$inertia.form({
                    _method: 'put',
                    name: this.cabine.name,
                    main_image:null,
                    plafond_image:null,
                    paroi_image:null,
                    sol_image:null,

                    id_en:null,
                    back_wall_en:null,
                    ceiling_en:null,
                    floor_en:null,
                    accessories_en:null,
                    handrail_en:null,
                    side_walls_en:null,

                    id_fr:null,
                    back_wall_fr:null,
                    ceiling_fr:null,
                    floor_fr:null,
                    accessories_fr:null,
                    handrail_fr:null,
                    side_walls_fr:null,

                    id_tr:null,
                    back_wall_tr:null,
                    ceiling_tr:null,
                    floor_tr:null,
                    accessories_tr:null,
                    handrail_tr:null,
                    side_walls_tr:null,

                }),
                main_image:'/storage/'+this.cabine.main_image,
                plafond_image:'/storage/'+this.cabine.plafond_image,
                paroi_image:'/storage/'+this.cabine.paroi_image,
                sol_image:'/storage/'+this.cabine.sol_image,
            }
        },
        mounted(){
            /* console.log(this.cabine); */
            /* axios.get(route('cabine.show','en',this.cabine.id)) */
            axios.get('/en/cabine/'+this.cabine.id)
            .then(response=> {
                this.form.id_en=response.data[0].id
                this.form.back_wall_en=response.back_wall;
                this.form.ceiling_en=response.ceiling;
                this.form.floor_en=response.floor;
                this.form.accessories_en=response.accessories;
                this.form.handrail_en=response.handrail;
                this.form.side_walls_en=response.side_walls;
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/fr/cabine/'+this.cabine.id)
            .then(response=> {
                this.form.id_fr=response.data[0].id
                this.form.back_wall_fr=response.data[0].back_wall;
                this.form.ceiling_fr=response.data[0].ceiling;
                this.form.floor_fr=response.data[0].floor;
                this.form.accessories_fr=response.data[0].accessories;
                this.form.handrail_fr=response.data[0].handrail;
                this.form.side_walls_fr=response.data[0].side_walls;
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/tr/cabine/'+this.cabine.id)
            .then(response=> {
                this.form.id_tr=response.data[0].id
                this.form.back_wall_tr=response.data[0].back_wall;
                this.form.ceiling_tr=response.data[0].ceiling;
                this.form.floor_tr=response.data[0].floor;
                this.form.accessories_tr=response.data[0].accessories;
                this.form.handrail_tr=response.data[0].handrail;
                this.form.side_walls_tr=response.data[0].side_walls;
            })
            .catch(error => {
                console.log(error);
            });
        },
        methods:{
            test(){
                console.log(this.form);
            },
            add_img_main(e){
                this.form.main_image= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.main_image=e.target.result
                }
                reader.readAsDataURL(this.form.main_image)
            },
            add_img_plafond(e){
                this.form.plafond_image= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.plafond_image=e.target.result
                }
                reader.readAsDataURL(this.form.plafond_image)
            },
            add_img_paroi(e){
                this.form.paroi_image= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.paroi_image=e.target.result
                }
                reader.readAsDataURL(this.form.paroi_image)
            },
            add_img_sol(e){
                this.form.sol_image= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.sol_image=e.target.result
                }
                reader.readAsDataURL(this.form.sol_image)
            },
            newMainImage(){
                this.$refs.main_image.click();
            },
            newPlafondImage(){
                this.$refs.plafond_image.click();
            },
            newParoiImage(){
                this.$refs.paroi_image.click();
            },
            newSolImage(){
                this.$refs.sol_image.click();
            },

            submit() {
                console.log(this.form);
                this.form.post(route('cabine.update',this.cabine.id),{
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
    h1{
        font-size: x-large;
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
            width: 200px;
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