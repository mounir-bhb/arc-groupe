<template>
    <Content>
        <div class="main-trafo contain">
            <div class="flex">
                <div class="sections-1">
                    <Switch ></Switch>
                    <Connection ></Connection>
                    <CircuitVoltage ></CircuitVoltage>
                    <Frequency ></Frequency>
                    <Overvoltage ></Overvoltage>
                    <Balance ></Balance>
                </div>
                <div class="images-1">
                    <img src="/images/trafo/oz-Trafo-Katalog-2-1.png" alt="">
                    <img src="/images/trafo/oz-Trafo-Katalog-2-2.png" alt="">
                    <img src="/images/trafo/oz-Trafo-Katalog-2-3.png" alt="">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="images-2">
                    <img src="/images/trafo/oz-Trafo-Katalog-4.jpg" alt="">
                </div>
                <div class="sections-2">
                    <HeightTransformers ></HeightTransformers>
                    <QualityControl ></QualityControl>
                    <AppliedTests ></AppliedTests>
                    
                </div>
                
            </div>
            <div class="flex justify-center  my-6">
                <img src="/images/trafo/oz-Trafo-Katalog.jpg" alt="" class="w-1/2">
            </div>
            
            <div class="flex images-3">
                <img src="/images/trafo/oz-Trafo-Katalog-5.jpg" alt="">
                <img src="/images/trafo/oz-Trafo-Katalog-3.jpg" alt="">
            </div>
            <img src="/images/trafo/oz-Trafo-Katalog-6.png" alt="">
            <img src="/images/trafo/table.png" alt="" class="w-full">
            <div class="flex justify-center ">
                <ActivePart class=" w-2/3 my-6"></ActivePart>
            </div>
            
            <div class="flex justify-center">
                <img src="/images/trafo/oz-Trafo-Katalog-7.jpg" alt="" class="w-4/5">
            </div>
            
        </div>
            
    </Content>
</template>

<script>
import Content from './globalComponents/shared/Content.vue';
    import Switch from './globalComponents/trafo/Switch.vue'
    import Connection from './globalComponents/trafo/Connection.vue'
    import CircuitVoltage from './globalComponents/trafo/CircuitVoltage.vue'
    import Frequency from './globalComponents/trafo/Frequency.vue'
    import Overvoltage from './globalComponents/trafo/Overvoltage.vue'
    import Balance from './globalComponents/trafo/Balance.vue'
    import HeightTransformers from './globalComponents/trafo/HeightTransformers.vue'
    import QualityControl from './globalComponents/trafo/QualityControle.vue'
    import AppliedTests from './globalComponents/trafo/AppliedTests.vue'
    import ActivePart from './globalComponents/trafo/ActivePart.vue'
    export default {
    components: { 
        Content,
        Switch,
        Connection,
        CircuitVoltage,
        Frequency,
        Overvoltage,
        Balance,
        HeightTransformers,
        QualityControl,
        AppliedTests,
        ActivePart
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
    .contain{
        margin:0px 50px 0px 50px;
    }
    
    h1{
        color: #0e1116;
        font-size: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 600;
    }
    h2{
        color: var(--main-color-alt);
        font-size: large;
        font-weight: bolder;
        /* padding-bottom: 15px; */
        /* text-align: center; */
    }
    h3{
        color: #0e1116;
        font-size: larger;
        font-weight: bold;
        padding-left: 15px;
        padding-right: 15px;
        margin-left: auto;
        margin-right: auto;
    }
    .main-trafo{
        margin-top: 60px;
        /* img{
            width: 40vh;
        } */
        
        p{
            text-indent: 30px;
        }
        .sections-1{
            width: 70%;
            /* .section{
                
            } */
            
        }
        .images-1{
            width: 30%;
        }
        .sections-2{
            width: 60%;
            padding: 5px;
            /* .section{
                
            } */
            
        }
        .images-2{
            width: 30%;
            padding: 5px;
            display: flex;
            justify-content: center;
            img{
                height: 100vh;
                /* width: 100%; */
            }
        }
        .images-3{
            display: flex;
            justify-content: space-around;
            img{
                width: 40%;
                padding: 5px;
            }
        }
        /* .section{
            margin: 10px;
            padding: 10px;
        } */
        /* img{
            width: 600px;
            margin: 10px;
        } */
    }
    
</style>