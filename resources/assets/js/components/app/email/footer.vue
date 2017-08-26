<template>
    <div class="container text-center">
        <div class="col-lg-12" v-model="currentYear" v-bind="currentYear">
            &copy; Copyright 2008 - {{currentYear}} Premise Software Solutions, Incorporated. All rights reserved.
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                currentYear: 0
            }
        },
        mounted() {
            console.log('enter -- footer.vue component');

            this.currentYear = this.getCurrentYear();

            console.log('exit -- footer.vue component');
        },
        methods: {
            getCurrentYear: function() {
                return psNS.ps.utils.getCurrentYear();
            }
        },
        computed: {
        }
    }
</script>
