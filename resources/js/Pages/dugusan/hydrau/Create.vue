<template>
    <Content>
    <div class="create">
         <form @submit.prevent="submit">
            <div class="flex justify-around">
                <div>
                    <div class="name">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name">
                    </div>
                    <div class="shared">
                        <div class="inputs">
                            <label for="">P+Q</label>
                            <input type="text" v-model="form.pq">
                        </div>
                        <div class="inputs">
                            <label for="">Vnominale</label>
                            <input type="text" v-model="form.vnominale">
                        </div>
                    </div>
                    
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
                    name: null,
                    main_image:null,

                    pq:null,
                    vnominale:null,


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
                this.form.post(route('hydrau.store'),{
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
            margin-bottom: 20px;
            padding: 20px;
            background-color: var(--back-color-alt);
            width: fit-content;
            border-radius: 5px;
        }
        .shared{
            width: fit-content;
            background-color: var(--back-color-alt);
            padding: 20px;
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