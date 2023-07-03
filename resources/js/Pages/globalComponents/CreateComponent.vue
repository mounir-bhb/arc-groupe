<template>
    <div>
        
            <div class="langs">
                <div class=" lang">
                    <h3>english</h3>
                    <slot name="en"/>
                </div>
                <div class="lang">
                    <h3>french</h3>
                    <slot name="fr"/>
                </div>
                <div class=" lang">
                    <h3>turkish</h3>
                    <slot name="tr"/>
                </div>
            </div>
            <!-- <div class="grid place-items-center mt-8">
                <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing" type="submit"
                class="px-3 py-2 text-xl  rounded-xl ">
                    creer 
                </button>
            </div> -->
        
    </div>
</template>

<script>
    export default {
        props:['back_wall_en'],
        data(){
            return {
                form:this.$inertia.form({
                    'back_wall_en':null,
                    'ceiling_en':null,
                    'floor_en':null,
                    'accessories_en':null,
                    'handrail_en':null,
                    'side_walls_en':null,

                    'back_wall_fr':null,
                    'ceiling_fr':null,
                    'floor_fr':null,
                    'accessories_fr':null,
                    'handrail_fr':null,
                    'side_walls_fr':null,

                    'back_wall_tr':null,
                    'ceiling_tr':null,
                    'floor_tr':null,
                    'accessories_tr':null,
                    'handrail_tr':null,
                    'side_walls_tr':null,

                })
            }
        },
        methods:{
            /* submit() {
                console.log(this.form);
                this.form.post(route('cabine.store'),{
                    preserveScroll: true,                   
                })
            }, */
        }
    }
</script>

<style lang="scss" scoped>
    .langs{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        h3{
            text-align: center;
            font-size: larger;
            font-weight: bold;
            color: var(--main-color);
            padding-top: 10px;
            padding-bottom: 10px;
            
        }
        .lang{
            width: auto;
            margin: 15px;
            padding: 20px 10px;
            background-color: var(--back-color-alt);
        }
    }
    
</style>