<template>
    <div class="container my-5 my-5">
        <div class="row">
            <div class="col-2">
                <h3 class="pb-2">Диалоги</h3>

            </div>
            <div class="col-8">
                <h3 class="pb-2">Тестовый чат</h3>
                <div class="form-group">
                    <textarea class="form-control" cols="30" rows="10" readonly="">{{ messages.join('\n') }}</textarea>
                </div>
                <div class="form-group d-flex">
                    <input type="text" class="form-control" v-model="textMessage" @keyup.enter="sendMessage">
                    <button class="btn btn-info" @click="sendMessage">Отправить</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Chat",

        data() {
            return {
                messages: [],
                textMessage: '',
            }
        },

        mounted() {
            window.Echo.channel('chat')
                .listen('Message', ({message}) => {
                    console.log(message);
                    this.messages.push(message)
                });
        },

        methods: {
            sendMessage() {
                axios.post('/messages', { body: this.textMessage }).then( res => {
                    this.messages.push(this.textMessage);
                    this.textMessage = ''
                })
            }
        },
    }
</script>

<style scoped>

</style>
