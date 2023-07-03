<template>
    <div class="contact" :style="{backgroundColor: this.backgroundColor? this.backgroundColor: 'var(--main-color)',
    color: this.color? this.color : 'white'}">
        <TitleSection textColor="white" borderColor="white">Contact Us</TitleSection>

        <div class="flex justify-between align-items contain">
            <div class="detail">
                <div><span>Num: </span><span>+213:555 77 88 99</span></div>
                <div><span>Email: </span><span>contact@arcGroupe.com</span></div>
                <div><span>facebook:</span><span>arc groupe</span></div>
                <div><span>instagram</span><span>arc-groupe</span></div>
            </div>
            <div class="msg">

            </div>
        </div>
    </div>
</template>

<script>
import TitleSection from '@/Components/TitleSection.vue';

    export default {
        components:{
            TitleSection
        },
        props:{
            backgroundColor:{
                type:String,
                default:undefined
            },
            color:{
                type:String,
                default:undefined
            }
        }
    }
</script>

<style lang="scss" >
    .contact{
        background-color: #0e1116;
        color: white;
        .detail{
            display: flex;
            flex-direction: column;
            margin: 20px;
            width: 50%;

        }
        .msg{
            width: 50%;
        }
        h1{
            color: white;
        }
    }
    
</style>