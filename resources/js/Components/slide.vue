<template>
    <div class="slide">
        <Transition appear mode="in-out"
        :css="false"
        @before-enter="beforeEnter"
        @enter="enter"
        @after-enter="afterEnter"
        @before-leave="beforeLeave"
        @leave="leave"
        @after-leave="afterLeave">
            <slot/>
        </Transition>
        
    </div>
</template>

<script>
    //import { Transition } from 'vue';
    export default {
        methods:{
            beforeEnter(el) {
                // Prepare the element for the transition
                //console.log(el);
                /* el.style.transition = 'all 0.7s ease';
                el.style.opacity=0
                el.style.transform = 'translateX(-50%)';
                console.log(el.style); */
            },
            enter(el, done) {
                //console.log(el)
                // Perform the transition
                /* el.style.transition = 'all 0.5s ease';
                el.style.transform = 'translateX(0)';
                el.style.opacity='1'; */
                
                // Call the done function when the transition is complete
                //el.addEventListener('transitionend', done);
                //done()
            },
            afterEnter(el) {
                // Clean up styles after the transition
                //el.style.opacity = '';
            },
            beforeLeave(el) {
                // Prepare the element for the transition
                el.style.transition = 'all 0.5s ease';
                //el.style.transform = 'translateX(0)';
                el.style.opacity='1';
            },
            leave(el, done) {
                // Perform the transition
                //el.style.transform = 'translateX(100%)';
                el.style.opacity='0.7'

                // Call the done function when the transition is complete
                el.addEventListener('transitionend', done);
                //done();
            },
            afterLeave(el) {
                // Clean up styles after the transition
                el.style.opacity = '';
            },
        }
    }
</script>

<style lang="scss" scoped>

</style>