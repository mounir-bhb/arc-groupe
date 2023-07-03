<template>
    <div>
        <!-- <ToTop></ToTop>
        <div class="specialite">
            <SideBar></SideBar>
            <div class="content">
                <NavServices></NavServices> -->
            <Content>
                <Presentation id="presentation" v-if="presentation" :presentation="presentation" @click="test" ></Presentation>
                <Cabines id="cabine" :cabines="cabines" v-if="cabines"></cabines>
                <Portes id="portes" :portes="portes" v-if="portes"></Portes>
                <div class="parachute contain" id="parachute">
                    <TitleSection>Parachute coulissant bidirectionnel</TitleSection>
                    <h3>SKY-3000</h3>
                    <Compares ></Compares>
                    <!-- <div class="compare">
                        
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 3000-A3-9</td>
                                <td>SKY 3000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>1300-3000</td>
                                <td>1300-3000</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>1.5m/s</td>
                                <td>1.5m/s</td>
                            </tr>
                            <tr>
                                <th>Slide-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div>
                    <div class="compare">
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 3000-A3-9</td>
                                <td>SKY 3000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>1300-3000</td>
                                <td>1300-3000</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>1.5m/s</td>
                                <td>1.5m/s</td>
                            </tr>
                            <tr>
                                <th>Side-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div>
                    <div class="compare">
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 3000-A3-9</td>
                                <td>SKY 3000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>980-2330</td>
                                <td>980-2330</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>2.5m/s</td>
                                <td>2.5m/s</td>
                            </tr>
                            <tr>
                                <th>Slide-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div> -->
                    <div>
                        <div><h2>suspension de vitesse de cabine</h2></div>
                        <img src="" alt="">
                    </div>

                    <div>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    <h3>SKY-4000</h3>
                    <Compares></Compares>
                    <!-- <div class="compare">
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 4000-A3-9</td>
                                <td>SKY 4000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>2350-4550</td>
                                <td>2350-4550</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>1.5m/s</td>
                                <td>1.5m/s</td>
                            </tr>
                            <tr>l
                                <th>Side-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div>
                    <div class="compare">
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 4000-A3-9</td>
                                <td>SKY 4000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>2055-4125</td>
                                <td>2055-4125</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>2.16m/s</td>
                                <td>2.16m/s</td>
                            </tr>
                            <tr>
                                <th>Side-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div>
                    <div class="compare">
                        <table>
                            <tr>
                                <th>Data (type)</th>
                                <td>SKY 4000-A3-9</td>
                                <td>SKY 4000-A3-16</td>
                            </tr>
                            <tr>
                                <th>Slide-way head thickness</th>
                                <td>9 mm</td>
                                <td>16 mm</td>
                            </tr>
                            <tr>
                                <th>Type of slide-ways</th>
                                <td>70x65x9</td>
                                <td>70x65x9</td>
                            </tr>
                            <tr>
                                <th>Cariying capacity-min.max</th>
                                <td>1500-3150</td>
                                <td>1500-3150</td>
                            </tr>
                            <tr>
                                <th>Max. tripping speed</th>
                                <td>2.5m/s</td>
                                <td>2.5m/s</td>
                            </tr>
                            <tr>
                                <th>Side-way surface quality</th>
                                <td>Cold-drawn/Machined</td>
                                <td>Cold-drawn/Machined</td>
                            </tr>
                        </table>
                    </div> -->
                    <div><img src="" alt=""></div>
                </div>
                <div class="equipement" id="equipement">
                    <TitleSection>Equipements</TitleSection>
                    <div class="equipements contain">
                        <Securite :securite="securite" v-if="securite"></Securite>
                        <Frein :frein="frein" v-if="frein"></Frein>
                    </div>
                </div>
                <Levages id="tompon-levage" :levages="levages" v-if="levages"></Levages>
                
                <Hydraux id="tompon-hydrau" :hydraux="hydraux" v-if="hydraux"></Hydraux>
                
                <Regulateur id="regulateur" :regulateur="regulateur" v-if="regulateur[0]"></Regulateur>
                
                <Panneaux id="panneaux" :panneaux="panneaux" v-if="panneaux"></Panneaux>
                
            <!-- </div>
            
        </div> -->
    </Content>
    </div>
</template>

<script>
    
    import TitleSection from '@/Components/TitleSection.vue';
    import Portes from './dugusan/porte/Portes.vue';
    import Cabines from './dugusan/cabine/Cabines.vue';
    import Compares from './globalComponents/dugusan/compares.vue';
    import Contact from './globalComponents/shared/Contact.vue';
    import Presentation from './dugusan/presentation/Presentation.vue';
    import Panneaux from './dugusan/panneau/Panneaux.vue';
    import Regulateur from './dugusan/regulateur/Regulateur.vue';
    import Levages from './dugusan/levage/Levages.vue';
    import HeadPic from './globalComponents/dugusan/HeadPic.vue'
    import Content from './globalComponents/shared/Content.vue';
    import Frein from './dugusan/frein/Frein.vue';
    import Securite from './dugusan/securite/securite.vue';
    import Hydraux from './dugusan/hydrau/Hydraux.vue';

    export default {
        components:{
            TitleSection,
            Portes,
            Cabines,
            Compares,
            Contact,
            Presentation,
            Panneaux,
            Regulateur,
            Levages,
            HeadPic,
            Content,
            Frein,
            Securite,
            Hydraux
        },
        props:[
            'cabines',
            'frein',
            'hydraux',
            'levages',
            'panneaux',
            'portes',
            'presentation',
            'regulateur',
            'securite'
        ],
        methods:{
            test(){
                console.log(this.$page.props.user);
            }
        }
        /* 
        } */
    }
</script>

<style lang="scss">
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
        text-align: center;
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
    
    .product{
        color: var(--main-color-alt);
    }
    th , td{
        padding-left: 5px;
        padding-right: 5px;
    }
    table{
        tr{
            padding: 10px;
            th{
                position: relative;
                text-align: start;
                top: 0;
                div{
                    position: absolute;
                    top: 0;
                }
            }
        }
        
    }
    /* .compare{
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        table{
            width: 80%;
            td, th{
                width: 30%;
                border: 1px solid;
                border-collapse: collapse;
                border-left: 0px;
                border-right: 0px;
            }
            td{
                text-align: center;
            }
            
            tr:nth-of-type(1){
                td,th{
                    border-top: 0;
                    
                }
            }
            tr:nth-last-of-type(1){
                td,th{
                    border-bottom: 0;
                }
            }
            tr:nth-of-type(odd){
                background-color: var(--main-color);
                color: white;
            }
            tr:nth-of-type(even){
                background-color: var(--back-color-alt);
            }
            tr:nth-of-type(odd):hover{
                background-color: var(--main-color-alt);
            }
            tr:nth-of-type(even):hover{
                background-color: rgb(226, 237, 250);
            }
        }
        
        .head{
            font-weight: bold;
            font-size: large;
        }
    } */
    .sections{
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
        .section{
            width: 45%;
            background-color: var(--back-color-alt);
            border-radius: 5px;
            padding: 20px;
        }
        
    }
    .section{
        display: flex;
        justify-content: space-between;
        
        
        .desc{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        /* div:nth-of-type(2){
            display: flex;
            flex-direction: column;
            align-items: center;
        
        } */
        img{
            width: 30%;
        }
    }
    .equipements{
        display: flex;
        justify-content: center;
        padding: 5px;
    }
    .securite{
        background-color: var(--main-color);
        transform: skewX(10deg);
        color: white;
    }
    .frein{
        background-color: var(--back-color-alt);
        transform: skewX(10deg);
        
        h2{
            border-color: var(--main-color);
        }
    }
    .frein > h2:nth-of-type(1){
            color: var(--main-color);
        }
    .frein , .securite{
        padding: 20px;
    }
    
    
</style>