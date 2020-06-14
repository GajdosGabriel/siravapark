<template>
    <p v-if="! form" class="cursor-pointer text-green-700 hover:text-green-500" @click="toggle">New order</p>
    <p v-else class="cursor-pointer text-green-700 hover:text-green-500" @click="toggle">Back</p>
</template>

<script>
    import {bus} from '../app';
    export default {
        data:function () {
            return {
                form: false
            }
        },

        methods: {
            toggle: function(){
                bus.$emit('form', this.form =! this.form);
            }

        }
    }
</script>
