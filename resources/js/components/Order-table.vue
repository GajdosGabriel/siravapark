<template>
    <div>
        <div class="flex justify-between">
        <a class="cursor-pointer" @click="formOpen =! formOpen"><span class=" hover:text-green-400">Add</span></a>
        <a class="cursor-pointer" @click="store"><span class=" hover:text-green-400">Save</span></a>
        </div>

        <table class="border-2 border-gray-500 table-auto">
            <thead class="bg-gray-600">
            <tr>
                <th class="px-4 py-2 whitespace-no-wrap">Full name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Phone</th>
                <th class="px-4 py-2 whitespace-no-wrap">People 6+</th>
                <th class="px-4 py-2 whitespace-no-wrap">People 6-</th>
                <th class="px-4 py-2">Days</th>
                <!--            <th class="px-4 py-2 cursor-pointer">New</th>-->
                <th class="px-4 py-2 cursor-pointer" @click="formOpen =! formOpen">New</th>
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
                    <input type="number" class="w-full px-4 py-2 text-sm" v-model="days" placeholder="Days ..."
                           required>
                </td>
                <td class="w-full px-4 py-2 text-sm text-white bg-blue-600 cursor-pointer" @click="store">
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
                    class="flex items-center justify-center h-8 p-3 font-semibold bg-gray-600 border-2 border-black rounded-sm cursor-pointer "
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
                full_name: '',
                email: '',
                phone: '',
                adult: '',
                child: '',
                days: '',
                url: '/order/index'
            }
        },

        created() {
            this.getOrder();
        },

        methods: {
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
