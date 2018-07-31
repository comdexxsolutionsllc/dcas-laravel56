<template>
    <div class="container p-8">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Notifier Component</div>

                    <div
                            v-for="(notification, index) in notificationData.data"
                            class="card-body">
                        {{ notification.id}} - {{ notification.type }}
                    </div>
                </div>
            </div>
        </div>

        <portal to="destination">
            <p>This slot content will be rendered wherever the with name 'destination'
                is  located.</p>
        </portal>
    </div>
</template>

<script>
    export default {
        props: {
            userid: {
                default: "0",
                type: String
            }
        },
        data() {
            return {
                notificationData: []
            };
        },
        mounted() {
            this.getNotificationData();
        },
        methods: {
            getNotificationData() {
                axios
                    .get('/api/notify/' + this.userid + '/count/')
                    .then(response => this.notificationData = response.data)
            }
        }
    }
</script>
