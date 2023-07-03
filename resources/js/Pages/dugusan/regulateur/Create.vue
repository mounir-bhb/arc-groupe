<template>
    <Content>
    <div class="create">
         <form @submit.prevent="submit">
            <div class="name">
                <label for="">Name</label>
                <input type="text" v-model="form.name">
            </div>
            <CreateComponent >
                <template #en>
                    <div class="inputs">
                        <label for="">Description</label>
                        <textarea v-model="form.description_en"></textarea>
                    </div>
                    
                </template>
                <template #fr>
                    <div class="inputs">
                        <label for="">Description</label>
                        <textarea v-model="form.description_fr"></textarea>
                    </div>
                    
                </template>
                <template #tr>
                    <div class="inputs">
                        <label for="">Description</label>
                        <textarea v-model="form.description_tr"></textarea>
                    </div>
                </template>
            </CreateComponent>
            <div class="imgs-content">
                <div class="my-4 flex flex-col items-center">
                    <div class="imgs" @click="newDiametre1()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_diametre1_url" class="hidden" ref="diametre1_url">
                            <div class="img" :style="{display:diametre1_url?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>

                        </div>
                        <img :src="diametre1_url" alt="" v-if="diametre1_url" class="h-full">
                    </div>
                    <div class="name">
                        <label for="">diametre 1</label>
                        <input type="text" v-model="form.diametre1">
                    </div>
                </div>
                <div class="my-4 flex flex-col items-center">
                    <div class="imgs details" @click="newDiametre2()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_diametre2_url" class="hidden" ref="diametre2_url">
                            <div class="img" :style="{display:diametre2_url?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="diametre2_url" alt="" v-if="diametre2_url" class="detail">
                    </div>
                    <div class="name">
                        <label for="">diametre 2</label>
                        <input type="text" v-model="form.diametre2">
                    </div>
                </div>
                <div class="my-4 flex flex-col items-center">
                    <div class="imgs details" @click="newDiametre3()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_diametre3_url" class="hidden" ref="diametre3_url">
                            <div class="img" :style="{display:diametre3_url?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="diametre3_url" alt="" v-if="diametre3_url" class="detail">
                    </div>
                    <div class="name">
                        <label for="">diametre 3</label>
                        <input type="text" v-model="form.diametre3">
                    </div>
                </div>
                <div class="my-4 flex flex-col items-center">
                    <div class="imgs" @click="newDiametre4()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_diametre4_url" class="hidden" ref="diametre4_url">
                            <div class="img" :style="{display:diametre4_url?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="diametre4_url" alt="" v-if="diametre4_url" class="detail">
                    </div>
                    <div class="name">
                        <label for="">diametre 4</label>
                        <input type="text" v-model="form.diametre4">
                    </div>
                </div>
                <div class="my-4 flex flex-col items-center">
                    <div class="imgs" @click="newDiametre5()">
                        <div>
                            <input type='file' multiple accept="image/*" 
                            @change="add_diametre5_url" class="hidden" ref="diametre5_url">
                            <div class="img" :style="{display:diametre5_url?'none':'flex'}">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M18.944 11.112C18.507 7.67 15.56 5 12 5 9.244 5 6.85 6.61 5.757 9.149 3.609 9.792 2 11.82 2 14c0 2.657 2.089 4.815 4.708 4.971V19H17.99v-.003L18 19c2.206 0 4-1.794 4-4a4.008 4.008 0 0 0-3.056-3.888zM8 12h3V9h2v3h3l-4 5-4-5z"></path></svg>
                                <div class="lab">Upload</div>
                            </div>
                        </div>
                        <img :src="diametre5_url" alt="" v-if="diametre5_url" class="detail">
                    </div>
                    <div class="name">
                        <label for="">diametre 5</label>
                        <input type="text" v-model="form.diametre5">
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
                    diametre1:null,
                    diametre2:null,
                    diametre3:null,
                    diametre4:null,
                    diametre5:null,
                    diametre1_url:null,
                    diametre2_url:null,
                    diametre3_url:null,
                    diametre4_url:null,
                    diametre5_url:null,

                    description_en:null,

                    description_fr:null,

                    description_tr:null,

                }),
                diametre1_url:null,
                diametre2_url:null,
                diametre3_url:null,
                diametre4_url:null,
                diametre5_url:null,
            }
        },
        methods:{
            add_diametre1_url(e){
                this.form.diametre1_url= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.diametre1_url=e.target.result
                }
                reader.readAsDataURL(this.form.diametre1_url)
            },
            add_diametre2_url(e){
                this.form.diametre2_url= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.diametre2_url=e.target.result
                }
                reader.readAsDataURL(this.form.diametre2_url)
            },
            add_diametre3_url(e){
                this.form.diametre3_url= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.diametre3_url=e.target.result
                }
                reader.readAsDataURL(this.form.diametre3_url)
            },
            add_diametre4_url(e){
                this.form.diametre4_url= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.diametre4_url=e.target.result
                }
                reader.readAsDataURL(this.form.diametre4_url)
            },
            add_diametre5_url(e){
                this.form.diametre5_url= e.target.files[0]
                const reader= new FileReader()
                reader.onload = (e)=>{
                    this.diametre5_url=e.target.result
                }
                reader.readAsDataURL(this.form.diametre5_url)
            },
            newDiametre1(){
                this.$refs.diametre1_url.click();
            },
            newDiametre2(){
                this.$refs.diametre2_url.click();
            },
            newDiametre3(){
                this.$refs.diametre3_url.click();
            },
            newDiametre4(){
                this.$refs.diametre4_url.click();
            },
            newDiametre5(){
                this.$refs.diametre5_url.click();
            },

            submit() {
                this.form.post(route('regulateur.store'),{
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
            align-items: center;
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