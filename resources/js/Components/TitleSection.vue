<template>
    
    <div class="title">
        <h1 :style="{color: this.textColor? this.textColor: 'var(--main-color)', fontSize:this.fontSize? this.fontSize: '',
        borderColor: this.borderColor? this.borderColor: 'var(--main-color)'}" class="border-b w-fit px-2"><slot/></h1>
    </div>
    
</template>

<script>


    export default {
        props:{
            borderColor:{
                type: String,
                default: undefined
            },
            textColor:{
                type: String,
                default: undefined
            },
            fontSize:{
                type: String,
                default: undefined
            }
        },
        methods:{
            test(){
                console.log(this.borderColor)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .title{
        margin-top: 15px;
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        text-align: center;
        .line{
            width: 50%;
            border-width: 1px;
            border-color: var(--main-color);
        }
    }
</style>