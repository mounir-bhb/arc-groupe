<template>
    <div>
        <form @submit.prevent="submit">
            <div class="border-2">
                <h3>english</h3>
                <div><label for="">back wall</label><input type="text" v-model="form.back_wall_en"></div>
                <div><label for="">ceiling</label><input type="text" v-model="form.ceiling_en"></div>
                <div><label for="">floor</label><input type="text" v-model="form.floor_en"></div>
                <div><label for="">accessories</label><input type="text" v-model="form.accessories_en"></div>
                <div><label for="">handrail</label><input type="text" v-model="form.handrail_en"></div>
                <div><label for="">side walls</label><input type="text" v-model="form.side_walls_en"></div>
            </div>
            <div class="border-2">
                <h3>french</h3>
                <div><label for="">back wall</label><input type="text" v-model="form.back_wall_fr"></div>
                <div><label for="">ceiling</label><input type="text" v-model="form.ceiling_fr"></div>
                <div><label for="">floor</label><input type="text" v-model="form.floor_fr"></div>
                <div><label for="">accessories</label><input type="text" v-model="form.accessories_fr"></div>
                <div><label for="">handrail</label><input type="text" v-model="form.handrail_fr"></div>
                <div><label for="">side walls</label><input type="text" v-model="form.side_walls_fr"></div>
            </div>
            <div class="border-2">
                <h3>turkish</h3>
                <div><label for="">back wall</label><input type="text" v-model="form.back_wall_turk"></div>
                <div><label for="">ceiling</label><input type="text" v-model="form.ceiling_turk"></div>
                <div><label for="">floor</label><input type="text" v-model="form.floor_turk"></div>
                <div><label for="">accessories</label><input type="text" v-model="form.accessories_turk"></div>
                <div><label for="">handrail</label><input type="text" v-model="form.handrail_turk"></div>
                <div><label for="">side walls</label><input type="text" v-model="form.side_walls_turk"></div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
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

                    'back_wall_turk':null,
                    'ceiling_turk':null,
                    'floor_turk':null,
                    'accessories_turk':null,
                    'handrail_turk':null,
                    'side_walls_turk':null,

                })
            }
        },
        methods:{
            submit() {
                console.log(this.form);
                this.form.post(route('cabine.store'),{
                    preserveScroll: true,                   
                })
            },
        }
    }
</script>

<style lang="scss" scoped>

</style>