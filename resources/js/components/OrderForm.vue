<template>
    <div>
        <h1>Open form</h1>
        <div class="border">
            <input type="text" class="w-full px-4 py-2 text-sm" v-model="form.full_name" placeholder="Full name"
                   required>

            <span class="text-red-500" v-text="errors.get('full_name')"></span>
        </div>
        <div class="border">
            <input type="email" class="w-full px-4 py-2 text-sm" v-model="form.email" placeholder="email" required>
            <span class="text-red-500" v-text="errors.get('email')"></span>
        </div>
        <div class="border">
            <input type="text" class="w-full px-4 py-2 text-sm" v-model="form.phone" placeholder="phone" required>
        </div>
        <div class="border">
            <input type="number" class="w-full px-4 py-2 text-sm" v-model="form.adult"
                   placeholder="6+ people">
        </div>
        <div class="border">
            <input type="number" class="w-full px-4 py-2 text-sm" v-model="form.child"
                   placeholder="6- people">
        </div>
        <div class="border">
            <input type="number" class="w-full py-2 pl-3 pr-2 text-sm" v-model="form.days" placeholder="Days ..."
                   required>
        </div>
        <div class="border">
            <input type="datetime-local" v-model="form.start_at">
        </div>

        <div class="border">
            <input type="datetime-local" v-model="form.end_at">
        </div>

        <td class="px-4 py-2 text-sm text-white bg-blue-600">
            <button @click="store">Save</button>
        </td>
    </div>
</template>

<script>
    import {bus} from '../app';
    import { Errors } from '../errors';
    export default {
        data: function () {
            return {
                formOpen: true,
                form: {},
                errors: new Errors()
            }
        },
        created() {
            bus.$on('form', (data) => {
                this.isOpen = data
            })
        },
        methods: {
            store: function () {
                axios.post('/order/store', this.form)
                    // .then(response => (this.orders = response.data))
                    // .catch( error => this.errors.record(error.response.data.errors) );

                // this.formOpen = false;
                // this.resetForm();
                // this.getOrder();

            },
        }
    }
</script>

<style>
    .slide-enter-active {
        animation: bounce-in 1s;
    }
    .slide-leave-active {
        animation: bounce-in .8s reverse;
    }
    /*@keyframes bounce-in {*/
    /*    0% {*/
    /*        transform: scale(.2);*/
    /*    }*/
    /*    50% {*/
    /*            transform: scale(1.2);*/
    /*        }*/
    /*    100% {*/
    /*        transform: scale(1);*/
    /*    }*/
    /*}*/

    @keyframes bounce-in {
        from {
            margin-left:100%;
            width:300%
        }
        to {
            margin-left:0%;
            width:100%;
        }
    }

</style>
