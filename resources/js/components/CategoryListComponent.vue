<template>
    <div>
        <h4>List Of Categories</h4>
        <b-list-group>
            <div v-for="(item, index) in categories">
                <b-list-group-item v-b-toggle="'category-' + item.id" button @click="getVenues(item.id)" :key="index">
                    {{item.name}}
                </b-list-group-item>

                <b-collapse  :id="'category-'+item.id">
                    <div v-if="item.categories.length > 0">

                        <b-list-group-item button v-for="(subcategory, i) in item.categories"
                                           @click="getVenues(subcategory.id)"
                                           :key="i">
                            <span class="ml-5"> {{subcategory.name}} </span>
                        </b-list-group-item>
                    </div>
                </b-collapse>
            </div>

        </b-list-group>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                categories: []
            }
        },
        created() {
            this.$http.get('api/categories')
                .then(response => {

                    this.categories = response.data.categories.response.categories;
                })
        },
        methods: {
            getVenues(categoryId) {

                this.$http.get(`api/get-venues?categoryId=${categoryId}`)
                    .then(response => {

                        const venues = response.data.venues;

                        this.$store.dispatch('loadLocations', {venues})

                    })
            }
        }
    }
</script>
