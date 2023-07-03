<template>
    <div>
        <ToTop></ToTop>
        <div class="specialite">
            <!-- <SideBar></SideBar> -->
            <SideBar></SideBar>
            <div class="content">
                <NavServices></NavServices>
                <slot/>
            </div>
        </div>
    </div>
</template>

<script>
    import NavServices from '@/Components/NavServices.vue';
    import ToTop from '@/Components/ToTop.vue';
import SideBar from './SideBar.vue';
    

    export default {
        components:{
    NavServices,
    ToTop,
    SideBar
}
    }
</script>

<style lang="scss" scoped>

    .content{
        flex: 1;
        max-width: calc(100% - 200px);
    }
    @media (max-width: 768px){
        .content{
            max-width: 100%;
        }
    }
    .specialite{
        /* position: relative; */
        display: flex;
        justify-content: flex-end;
    }
</style>