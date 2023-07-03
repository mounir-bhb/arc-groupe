<template>
    <div class="menu">
        <div class="side-bar">
            <div class="side-logo">
                <img src="/images/logo_DUGUSAN.png" alt="">
            </div>
            <div class="main-side">
                <div><Link href="/service/#cabine"><div class="content-side">Nos cabine</div></Link></div>
                <div><Link href="/service/#porte"><div class="content-side">Porte de cabine</div></Link></div>
                <div><Link href="/service/#parachute"><div class="content-side">Parachute coulissant bidirectionnel</div></Link></div>
                <div><Link href="/service/#equipement"><div class="content-side">Equipement</div></Link></div>
                <div><Link href="/service/#tompon-levage"><div class="content-side">Tompon de levage en polyuréthane</div></Link></div>
                <div><Link href="/service/#tompon-hydrau"><div class="content-side">Tompon hydraulique</div></Link></div>
                <div><Link href="/service/#regulateur"><div class="content-side">Régulateur de survitesse</div></Link></div>
                <div><Link href="/service/#panneaux"><div class="content-side">panneaux de controle</div></Link></div>
            </div>
            <div class="retour">
                <Link href="/home">Home</Link>
            </div>
        </div>
        
    </div>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    export default {
        components:{
            Link
        }
    }
</script>

<style lang="scss" scoped>
    .menu{
        width: 200px;
        height: 100%;
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        
        
        .side-bar{
            border-width: 1px;
            height: 100%;
            position: relative;
            .side-logo{
                padding: 20px;
                background-color: #eee;
            }
            .main-side{
                background-color: var(--main-color);
                height: 100%;
                color: white;
                padding-top: 10px;
            }
            .content-side{
                position: relative;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 10px;
                font-size: large;
                font-family:  'EB Garamond', serif;
                cursor: pointer;
                transition-duration: 0.7s;
            }
            /* .content-side::after{
                content: "";
                display: none;
                position: absolute;
                width: 5px;
                top: 0;
                left: 0;
                height: 100%;
                background-color: var(--back-color-alt);
                transition: left 0.5s ease;
            } */
            .content-side:hover{
                padding-left: 20px;
                background-color: var(--main-color-alt);
            }
            /* .content-side:hover::after{
                content: "";
                display: block;
                left: 7px;
            } */
            .retour{
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 30px;
                background-color: var(--main-color-alt);
                color: white;
                text-align: center;
            } 
        }
    }
    @media (max-width: 767px){
        .menu{
            display: none;
        }
    }
</style>