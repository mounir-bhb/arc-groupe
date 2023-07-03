<template>

    <div class="language">
        <div class="lang-link">Language</div>
        <div class="sub-links">
            <div v-for="(language, key) in locales" 
            :key="key" :value="language" @click="changeLanguage(language) "
            class="sub-link">{{ key }}</div>
        </div>
    </div>

    <!-- <select v-model="selectedLanguage" @change="changeLanguage" @click="test">
      <option v-for="(language, key) in locales" 
      :key="key" :value="language">{{ key }}</option>
    </select> -->
</template>

<script>
    export default {
        data() {
            return {
                locales: [],
                selectedLanguage: '',
                currentLanguage: '',
            };
        },
        mounted() {
            axios.get('/api/locales')
            .then(response => {
                this.locales = response.data.locales;
                this.currentLanguage=response.data.locale;
            })
            .catch(error => {
                console.log(error);
            });
            this.selectedLanguage = this.currentLanguage;
        },
        methods: {
            changeLanguage(language) {
                /* const route = this.$route;
                const params = { ...route.params };
                params.lang = this.selectedLanguage;
                this.$inertia.visit({ method: 'get', url: route.path, params }); */
                /* const url = new URL(window.location.href);
                const searchParams = new URLSearchParams(url.search); */
                this.selectedLanguage=language;
                const route= window.location.href;
                const newUrl = route.replace(/\/[a-z]{2}\//, `/${this.selectedLanguage}/`);
                this.$inertia.visit(newUrl);
               /*  console.log(this.selectedLanguage); */
            },
            /* test(){
                console.log(this.currentLanguage)
            } */
        },
    }
</script>

<style lang="scss" scoped>
    .language{
        font-size: large;
        
        position: relative;
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-right: 5px;
        /* overflow: hidden; */
        height: 100%;
        text-align: center;
        transition-duration: 0.7s;
        .lang-link{
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family:  'EB Garamond', serif;
        }
        
    }
    .language:hover{
        color: var(--main-color-alt);
    }
    .sub-links{
        display: none;
        position: absolute;
        /* bottom: 100%; */
        color: var(--main-color);
        background-color: var(--back-color-alt);
        opacity: 0;
        width: 100%;
        transition-duration: 0.7s;
    }
    .language:hover > .sub-links{
        display: flex;
        flex-direction: column;
        /* top: 100%;
        bottom: initial; */
        
        opacity: 1;
    }
    .sub-link{
        position: relative;
        padding-top: 2px;
        padding-bottom: 2px;
        cursor: pointer;
        font-family:  'EB Garamond', serif;
    }
    .sub-link::after{
        position: absolute;
        content: "";
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 50%;
        
        /* transform: translateY(-50%); */
        border-radius: 2px;
        background-color: var(--main-color);
        transition-duration: 0.7s;
        /* z-index: -1; */
    }
    .sub-link:hover::after{
        width: 100%;
        left: 0;
    }
</style>