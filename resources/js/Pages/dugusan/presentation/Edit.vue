<template>
    <Content>
    <div class="create">
         <form @submit.prevent="submit">
            
            <CreateComponent >
                <template #en>
                    <div class="inputs" v-for="(paragraph, index) in form.paragraphes_en" :key="index">
                        <label for="">paragraphe n°{{ index+1 }}</label>
                        <textarea name="" id="" cols="30" rows="10" v-model="form.paragraphes_en[index].description"></textarea>
                        <div class="delete" v-if="index!=0" @click="deleteP(index)">
                            X
                        </div>
                    </div>
                    
                </template>
                <template #fr>
                    <div class="inputs" v-for="(paragraph, index) in form.paragraphes_fr" :key="index">
                        <label for="">paragraphe n°{{ index+1 }}</label>
                        <textarea name="" id="" cols="30" rows="10" v-model="form.paragraphes_fr[index].description"></textarea>
                        <div class="delete" v-if="index!=0" @click="deleteP(index)">
                            X
                        </div>
                    </div>
                </template>
                <template #tr>
                    <div class="inputs" v-for="(paragraph, index) in form.paragraphes_tr" :key="index">
                        <label for="">paragraphe n°{{ index+1 }}</label>
                        <textarea name="" id="" cols="30" rows="10" v-model="form.paragraphes_tr[index].description"></textarea>
                        <div class="delete" v-if="index!=0" @click="deleteP(index)">
                            X
                        </div>
                    </div>
                </template>
            </CreateComponent>
            <div class="my-2 flex justify-center ">
                <div @click="add_paragraph" class="btn-pg">Add paragraph</div>
            </div>
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
        props:['presentation'],
        data(){
            return {
                form:this.$inertia.form({
                    _method: 'put',
                    main_image:null,

                    paragraphes_en:[
                        {
                            id:null,
                            description:null
                        }
                    ],

                    paragraphes_fr:[
                        {
                            id:null,
                            description:null
                        }
                    ],

                    paragraphes_tr:[
                        {
                            id:null,
                            description:null
                        }
                    ],

                }),
                main_image: '/storage/'+this.presentation.main_image,
            }
        },
        mounted(){
            axios.get('/en/presentation/'+this.presentation.id)
            .then(response=> {
                this.form.paragraphes_en=response.data;
                
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/fr/presentation/'+this.presentation.id)
            .then(response=> {
                this.form.paragraphes_fr=response.data;
                
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/tr/presentation/'+this.presentation.id)
            .then(response=> {
                this.form.paragraphes_tr=response.data;
                
            })
            .catch(error => {
                console.log(error);
            });
        },
        methods:{

            add_paragraph(){
                
                this.form.paragraphes_en.push({
                    
                    description:null,
                })
                this.form.paragraphes_fr.push({
                    
                    description:null,
                })
                this.form.paragraphes_tr.push({
                    
                    description:null,
                })
            },
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
            deleteP(index){
                 this.form.paragraphes_en.splice(index,1)
                this.form.paragraphes_fr.splice(index,1)
                this.form.paragraphes_tr.splice(index,1) 
            },

            test(ind){
                console.log(ind);
            },

            submit() {
                this.form.post(route('presentation.update',this.presentation.id),{
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
        textarea{
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
        .btn-pg{
            width: fit-content;
            padding: 15px;
            border-radius: 10px;
            background-color: var(--back-color-alt);
            color: #0984c2;
            font-size: large;
            /* font-weight: bold; */
            cursor: pointer;
            transition: 0.7s;
        }
        .btn-pg:hover{
            border-width: 2px;
            background-color: transparent;
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
            height: 500px;
            /* border-width: 2px; */
            border-radius: 20px;
            width: 500px;
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
    .delete{
        background-color: red;
        color: white;
        width: fit-content;
        padding: 5px;
        border-radius: 20px;
        cursor: pointer;
    }
    .delete:hover{
        background-color: rgb(255, 34, 34);
    }
    
</style>