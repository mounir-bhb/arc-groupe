<template>
    <div class="w-full">
        <div class="less">
            <slot name="less"/>
        </div>
        <div class="see-more" @click="more" :style="{display:this.moreDisplay}"><h3>More</h3></div>
        <div class="more" :style="{display:this.lessDisplay}">
            <slot name="more"/>
        </div>
        <div class="see-less" @click="less" :style="{display:this.lessDisplay}"><h3>Less</h3></div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                moreDisplay:'block',
                lessDisplay:'none'
            }
        },
        methods:{
            more(){
                this.lessDisplay='flex';
                this.moreDisplay='none';
                console.log(this.lessDisplay);
            },
            less(){
                this.lessDisplay='none';
                this.moreDisplay='flex'
            }
        }
    }
</script>

<style lang="scss" scoped>
    .more, .less{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 15px;
    }
    .see-more, .see-less{
        text-align: center;
        font-size: large;
        font-weight: lighter;
        margin: 30px;
        
        cursor: pointer;
        h3{
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 5px;
            /* border-width: 2px; */
            /* border-radius: 3px; */
            width: fit-content;
            background-color: var(--main-color);
            color: white;
            transition: 0.7s;
            
        }
        h3:hover{
            color: white;
            background-color: var(--main-color-alt);
        }
    }
</style>