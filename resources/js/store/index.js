import { createStore } from 'vuex'

const store = createStore({

        state: {
            // variables
            token : localStorage.getItem('token') || 0
        },
        mutations: {
            // update variable value
        },
        actions: {
            // action to be perform
        },
        getters: {

        },
})

export default store;
