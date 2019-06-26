<template>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Notificações ({{notifications.length}}) <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="" v-for="notification in notifications" :key="notification.id">

                {{notification.data.comment.user.name}} comentou {{notification.data.comment.title}}
                <span class="badge badge-pill badge-info" @click.prevent="markAsRead(notification.id)">Marcar como Lida</span>
            </a>
        </div>
    </li>
</template>

<script>
    export default {
        created() {
            // this.loadNotifications()
            this.$store.dispatch('loadNotifications')
        },
        computed: {
            notifications() {
                return this.$store.state.notifications.items
            }
        },
        methods: {
            markAsRead(idNotification) {
                this.$store.dispatch('markAsRead', {id: idNotification})
            }
        }
    }
</script>

<style scoped>

</style>