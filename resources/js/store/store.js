import Vuex from 'vuex'
import Vue from 'vue'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        locations: []
    },

    mutations: {
        MUTATE_LOCATIONS: (state, locations) => {
            Vue.set(state, 'locations', locations);
            // or, better yet create a copy of the array
            //     Vue.set(state, 'locations', [...locations]);
        }
    },

    actions: {
        loadLocations: (context, locations) => {
            context.commit('MUTATE_LOCATIONS', locations);
        }
    }
});
