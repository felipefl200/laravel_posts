export default {
    state: {
        items: []
    },
    mutations: {
        LOAD_NOTIFICATIONS(state, notifications) {
            state.items = notifications
        }
    },
    actions: {
        loadNotifications(context) {
            axios.get('/notifications')
                .then(response => context.commit('LOAD_NOTIFICATIONS', response.data.notifications))
                .catch(e => console.log(e))
        },
        markAsRead(context, params) {
            axios.put('/notification-read', params)
        }
    }
}