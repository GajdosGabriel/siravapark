<template>
    <div>
        <div class="my-5 text-center">
            <input class="w-1/3 px-4 py-2 text-sm text-gray-700 rounded-md" placeholder="Search by name"
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
                <th class="w-full px-4 py-2 cursor-pointer" @click="formOpen =! formOpen">Add</th>
            </tr>
            </thead>
            <tbody>

            <tr v-if="formOpen" class="text-gray-900 hover:bg-gray-100">
                <td class="border">
                    <input type="text" class="w-full px-4 py-2 text-sm" v-model="full_name" placeholder="Full name"
                           required>
                </td>
                <td class="border">
                    <input type="email" class="w-full px-4 py-2 text-sm" v-model="email" placeholder="email" required>
                </td>
                <td class="border">
                    <input type="text" class="w-full px-4 py-2 text-sm" v-model="phone" placeholder="phone" required>
                </td>
                <td class="border">
                    <input type="number" class="w-full px-4 py-2 text-sm" v-model="adult"
                           placeholder="Number of people ...">
                </td>
                <td class="border">
                    <input type="number" class="w-full px-4 py-2 text-sm" v-model="child"
                           placeholder="Number of people ...">
                </td>
                <td class="border">
                    <input type="number" class="w-full py-2 pl-3 pr-2 text-sm" v-model="days" placeholder="Days ..."
                           required>
                </td>
                <td class="px-4 py-2 text-sm text-white bg-blue-600 cursor-pointer" @click="store">
                    Save
                </td>
            </tr>


            <tr class="hover:bg-gray-800" v-for="(order,index) in orders">
                <td class="px-4 py-2 whitespace-no-wrap border">{{ order.full_name }}</td>
                <td class="px-4 py-2 whitespace-no-wrap border">{{ order.email }}</td>
                <td class="px-4 py-2 border">{{ order.phone }}</td>
                <td class="px-4 py-2 border">{{ order.adult }}</td>
                <td class="px-4 py-2 border">{{ order.child }}</td>
                <td class="px-4 py-2 border">{{ order.days }}</td>
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

    export default {
        data: function () {
            return {
                orders: [],
                pagination: [],
                formOpen: false,
                search: '',
                searching: false,
                full_name: '',
                email: '',
                phone: '',
                adult: '',
                child: '',
                days: '',
                url: '/order/index',
                urlSearch: '/order/search/',
                results: []
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
            // clearForm: function(){
            //     this.search = '';
            //     this.getOrder();
            // },
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
                    full_name: this.full_name,
                    email: this.email,
                    phone: this.phone,
                    adult: this.adult,
                    child: this.child,
                    days: this.days,
                })
                    .then(response => (this.orders = response.data));

                this.formOpen = false;
                this.getOrder();

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
