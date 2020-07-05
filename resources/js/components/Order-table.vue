<template>
    <div>

        <div v-if="formOpen" class="text-white">
            <h3 class="text-lg pb-4">Mew order</h3>
            <div class="w-full flex">
                <input type="text" class="w-1/2 px-4 py-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.full_name" placeholder="Full name"
                       required>

                <span class="text-red-500" v-text="errors.get('full_name')"></span>

                <input type="email" class="w-1/2 px-4 py-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.email" placeholder="email" required>
                <span class="text-red-500" v-text="errors.get('email')"></span>
            </div>

            <div class="w-full flex">
                <input type="text" class="w-1/2 px-4 py-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.phone" placeholder="phone" required>
                <span class="text-red-500" v-text="errors.get('phone')"></span>

                <input type="number" class="w-1/2 px-4 py-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.adult"
                       placeholder="6+ people">
            </div>

            <div class="w-full flex">
                <input type="number" class="w-1/2 px-4 py-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.child"
                       placeholder="6- people">

                <input type="number" class="w-1/2 py-2 pl-3 pr-2 text-sm bg-gray-700 text-white border-2 border-gray-500 rounded-sm" v-model="form.days" placeholder="Days ..."
                       required>
            </div>
            <div class="flex w-full flex">
                <input type="datetime-local" v-model="form.start_at" class="w-1/2 py-2 px-4 bg-gray-700 text-white border-2 border-gray-500 rounded-sm">

                <input type="datetime-local" v-model="form.end_at" class="w-1/2 py-2 px-4 bg-gray-700 text-white border-2 border-gray-500 rounded-sm">
            </div>

            <div class=" text-right">
                <button class="rounded-md text-white bg-blue-600 my-3 px-5 py-2" @click="store">Save</button>
            </div>
        </div>


        <div class="my-5 text-center">
            <input class="w-1/3 px-4 py-2 text-sm text-gray-700 rounded-md" placeholder="Search name, email, phone"
                   v-model="search">
            <!--            <button @click="clearForm" class="px-2 py-1 border-2 border-gray-300 rounded-sm ">Clear</button>-->
        </div>
        <table class="border-2 border-gray-500 table-auto">
            <thead class="bg-gray-600">
            <tr>
                <th class="w-full px-4 py-2 whitespace-no-wrap">Full name</th>
                <th class="w-full px-4 py-2">Email</th>
                <th class="w-full px-4 py-2">Phone</th>
                <th class="w-full px-4 py-2 whitespace-no-wrap">People 6+</th>
                <th class="w-full px-4 py-2 whitespace-no-wrap">People 6-</th>
                <th class="w-24 w-full px-4 py-2">Days</th>
                <th class="w-24 w-full px-4 py-2">Income</th>
                <th class="w-24 w-full px-4 py-2">Outcome</th>
                <th class="w-full px-4 py-2 cursor-pointer">
                <span v-if="! formOpen" @click="toggle">Add</span>
                <span v-else @click="toggle">Hide</span>
                </th>
            </tr>
            </thead>
            <tbody>

            <tr class="hover:bg-gray-800" v-for="(order,index) in orders">
                <td class="px-4 py-2 whitespace-no-wrap border">{{ order.full_name }}</td>
                <td class="px-4 py-2 whitespace-no-wrap border">{{ order.email }}</td>
                <td class="px-4 py-2 border">{{ order.phone }}</td>
                <td class="px-4 py-2 border">{{ order.adult }}</td>
                <td class="px-4 py-2 border">{{ order.child }}</td>
                <td class="px-4 py-2 border">{{ order.days }}</td>
                <td class="px-2 py-2 border">{{ moment( order.start_at).format('DD-MM-YYYY') }}</td>
                <td class="px-2 py-2 border">{{ moment( order.end_at).format('DD-MM-YYYY') }}</td>
                <td class="px-4 py-2 border">...</td>
            </tr>

            </tbody>

        </table>

        <div class="flex justify-center my-10 space-x-3">
            <button @click="fetchPaginate(pagination.prev_page_url)"
                    class="flex items-center justify-center h-8 p-3 font-semibold bg-gray-600 border-2 border-black rounded-sm cursor-pointer"
                    :disabled="! pagination.prev_page_url"> <<
            </button>
            <div
                class="flex items-center justify-center h-8 p-3 font-semibold bg-gray-600 border-2 border-gray-700 rounded-sm">
                {{ pagination.current_page}} / {{ pagination.last_page}}
            </div>
            <button @click="fetchPaginate(pagination.next_page_url)"
                    class="flex items-center justify-center h-8 p-3 font-semibold bg-gray-600 border-2 border-black rounded-sm cursor-pointer"
                    :disabled="! pagination.next_page_url"> >>
            </button>
        </div>

    </div>


</template>

<script>
    import moment from 'moment';
    import { Errors } from '../errors';
    export default {
        data: function () {
            return {
                moment: moment,
                orders: [],
                pagination: [],
                formOpen: true,
                search: '',
                searching: false,
                form: {
                    full_name: '',
                    email: '',
                    phone: '',
                    adult: '',
                    child: '',
                    days: '',
                    start_at: '',
                    end_at: '',
                    },
                url: '/order/index',
                urlSearch: '/order/search/',
                errors: new Errors()
            }
        },

        created() {
            this.getOrder();
        },
        watch: {
            search: function (val) {
                this.tableSearch();
            }
        },
        methods: {
            toggle: function(){
                this.formOpen =! this.formOpen;
                this.resetForm();
            },
            tableSearch: function () {
                this.searching = true;
                if (!this.search.length > 0) {
                    this.getOrder()
                }

                axios.get(this.urlSearch + this.search)
                    .then(response => {
                        this.orders = response.data.data
                    })
            },
            getOrder: function () {
                let $this = this
                axios.get(this.url)
                    .then(response => {
                            this.orders = response.data.data
                            this.makePagination(response.data)
                        }
                    );
            },
            store: function () {
                axios.post('/order/store', {
                    full_name: this.form.full_name,
                    email: this.form.email,
                    phone: this.form.phone,
                    adult: this.form.adult,
                    child: this.form.child,
                    days: this.form.days,
                    start_at: this.form.start_at,
                    end_at: this.form.end_at,
                })
                    .then(response => (this.orders = response.data))
                .catch( error => this.errors.record(error.response.data.errors) );

                // this.formOpen = false;
                // this.resetForm();
                // this.getOrder();
            },
            resetForm() {
                console.log('Reseting the form');
                var self = this; //you need this because *this* will refer to Object.keys below`

                //Iterate through each object field, key is name of the object field`
                Object.keys(this.form).forEach(function(key,index) {
                    self.form[key] = '';
                });
            },
            makePagination: function (data) {
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                };
                this.pagination = pagination;
            },
            fetchPaginate: function (url) {
                this.url = url;
                this.getOrder()

            }
        }
    }
</script>
