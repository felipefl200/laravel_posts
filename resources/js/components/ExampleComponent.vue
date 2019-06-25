<template>
    <div class="mt-4">


        <form @submit.prevent="criar">
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control " v-model="form.name" required autofocus>

                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control " v-model="form.email" value="" required autocomplete="email">

                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control " v-model="form.password" required autocomplete="password">

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: ''

                }
            }
        }
        ,
        methods: {
            criar() {
                axios.post('/api/create', this.form)
                    .then(response => {
                        Toast.fire({
                            type: 'success',
                            title: 'Cadastrado com sucesso'
                        })
                        this.form = ''
                        Echo.private(`order.${orderId}`)
                            .listen('ShippingStatusUpdated', (e) => {
                                console.log(e.update);
                            });
                    })
            }
        }
    }
</script>
