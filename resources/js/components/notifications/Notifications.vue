<template>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Notificações ({{notificationsItems.length}}) <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="" v-for="notification in notificationsItems" :key="notification.id">
                {{notification.data.comment.title}}
            </a>
        </div>
    </li>
</template>

<script>
    export default {
        created() {
            this.loadNotifications()
        },

        data: function () {
            return {
                notificationsItems: []
            }
        },
        methods: {
            loadNotifications() {
                axios.get('/notifications')
                    .then(response => this.notificationsItems = response.data.notifications)
                    .catch(e => console.log(e))
            }
        }
    }
</script>

<style scoped>

</style>