<template>
    <div>
        <h4>List Of Venues Near Valleta</h4>
        <b-list-group>
            <b-list-group-item button v-for="(item, index) in locations.venues" :key="index">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{item.name}}</h5>
                    <small class="text-primary">{{item.categories[0].name}}</small>
                </div>

                <p class="mb-1">
                    {{item.location.country}} {{item.location.city}} {{item.location.address}}
                </p>

            </b-list-group-item>

        </b-list-group>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {}
        }, computed: {
            locations() {
                console.log(this.$store.state.locations);
                return this.$store.state.locations
            }
        },
        created() {

        },
        methods: {}
    }
</script>
