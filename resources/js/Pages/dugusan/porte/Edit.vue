<template>
    <Content>
    <div class="create">
         <form @submit.prevent="submit">
            <div class="my-4 flex justify-center items-center gap-3">
                <h3>Porte</h3>
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
            <div class="main-form">
                <CreateComponent >
                    <template #en>
                        <div class="inputs">
                            <label for="">Name</label>
                            <input type="text" v-model="form.name_en">
                        </div>
                        <div class="inputs">
                            <label for="">Description</label>
                            <textarea v-model="form.description_en"></textarea>
                        </div>
                        
                    </template>
                    <template #fr>
                        <div class="inputs">
                            <label for="">Name</label>
                            <input type="text" v-model="form.name_fr">
                        </div>
                        <div class="inputs">
                            <label for="">Description</label>
                            <textarea v-model="form.description_fr"></textarea>
                        </div>
                        
                        
                    </template>
                    <template #tr>
                        <div class="inputs">
                            <label for="">Name</label>
                            <input type="text" v-model="form.name_tr">
                        </div>
                        <div class="inputs">
                            <label for="">Description</label>
                            <textarea v-model="form.description_tr"></textarea>
                        </div>
                        
                    </template>
                </CreateComponent>
                
            </div>
            
            
                
            <div class="my-4 flex flex-col items-center">
                <h3 @click="test">Other images</h3>
                <div class="imgs-others" >
                    <div v-for="(image,index) in this.imgs" :key="index" class="relative">
                        <img :src="'/storage/'+image.image_url" alt="" class="detail">
                        <div class="delete" @click="deleteImg(index)">
                            X
                        </div>
                    </div>
                    <div v-for="(image,index) in this.new_imgs" :key="index" class="relative">
                        <img :src="image" alt="" class="detail">
                        <div class="delete" @click="deleteNewImg(index)">
                            X
                        </div>
                    </div>
                    <div @click="newImage()">
                        <input type='file' multiple accept="image/*" 
                        @change="add_imgs" class="hidden" ref="otherImages">
                        <div class="img" >
                            <div >
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="m9 13 3-4 3 4.5V12h4V5c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h8v-4H5l3-4 1 2z"></path><path d="M19 14h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path></svg>
                            </div>
                        </div>
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
        props:['porte'],
        mounted(){
            axios.get('/en/porte/'+this.porte.id)
            .then(response=> {
                this.form.name_en=response.data[0].name;
                this.form.description_en=response.data[0].description;
                
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/fr/porte/'+this.porte.id)
            .then(response=> {
                this.form.name_fr=response.data[0].name;
                this.form.description_fr=response.data[0].description;
            })
            .catch(error => {
                console.log(error);
            });

            axios.get('/tr/porte/'+this.porte.id)
            .then(response=> {
                this.form.name_tr=response.data[0].name;
                this.form.description_tr=response.data[0].description;
                
            })
            .catch(error => {
                console.log(error);
            });
        },
        data(){
            return {
                form:this.$inertia.form({
                    _method: 'put',
                    main_image:null,
                    imgs:[],
                    imgs_removed:[],

                    id_en: null,
                    name_en:null,
                    description_en:null,

                    id_fr: null,
                    name_fr:null,
                    description_fr:null,

                    id_tr: null,
                    name_tr:null,
                    description_tr:null,

                }),
                main_image: '/storage/'+this.porte.main_image,
                imgs:this.porte.images,
                new_imgs:[]
            }
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
            add_imgs(e){
                this.form.imgs.push(e.target.files[0])
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.imgs.push(e.target.result)
                }
                reader.readAsDataURL(e.target.files[0])
            },
            deleteImg(index){
                this.form.imgs_removed.push(this.imgs[index].id)
                this.imgs.splice(index,1)
            },
            deleteNewImg(index){
                this.form.imgs.splice(index,1)
                this.new_imgs.splice(index,1)
            },
            
            
            
            newMainImage(){
                this.$refs.main_image.click();
            },
            newImage(){
                this.$refs.images.click();
            },
            

            submit() {
                /* console.log(this.form); */
                this.form.post(route('porte.update',this.porte.id),{
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
        width: fit-content;
    }
    label{
        font-weight: bold;
    }
    .create{
        margin-top: 70px;
        .main-form{
            display: flex;
            justify-content: space-around;
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
            
            
            /* svg{
                
                height: 150px;
                width: 150px;
                display: flex;
                justify-content: center;
                fill: #074f74;
                transition: 0.7s;
            } */
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
            height: 210px;
        }
        .delete{
            position: absolute;
            background-color: red;
            color: white;
            font-weight: bold;
            border-radius: 50%;
            top: 0;
            right: 0;
            transform: translateX(-50%);
            transform: translateY(-50%);
            cursor: pointer;
            padding: 5px;
            width: 25px;
            height: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .imgs-others{
            background-color: var(--back-color-alt);
            border-radius: 10px;
            margin: 20px;
            width: 80%;
            height: 300px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            
            gap: 10px;
        }
        svg{
                
            height: 150px;
            width: 150px;
            display: flex;
            justify-content: center;
            fill: #074f74;
            transition: 0.7s;
        }
    }
    
</style>