import Vue from 'vue';
import VueRouter from 'vue-router';
import VueBlu from 'vue-blu';
import { Slide } from 'vue-burger-menu'
import 'vue-blu/dist/css/vue-blu.min.css';
import $ from 'jquery'

Vue.use(VueRouter);
Vue.use(VueBlu);
Vue.use(Slide);

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: []
});
new Vue({
    router,
    beforeMount() {
        const endpoint = "https://vaimotest.osc-fr1.scalingo.io/cart/get"

        const key = "cartData";

        // First check if there's data in SessionStorage
        let data = sessionStorage.getItem(key);

        if(data){
            // If there's somethin in the sessionStorage with our key, return that data:
            const finishTime = localStorage.getItem('cartTime');
            const timeLeft = (finishTime - new Date());
            if ((timeLeft/1000) < 0) {
                data = fetch(endpoint).then(r => r.json());
                data.then((result) => {
                    console.log(result);
                    $("#cartNum").text(result.totalItems);
                    if(result.totalItems == 1) {
                        $("#itemsText").text("item");
                    } else {
                        $("#itemsText").text("items");
                    }
                    $("#cartTotal").text(result.totalPrice);
                    sessionStorage.setItem(key, JSON.stringify(result));
                    localStorage.setItem('cartTime', ((new Date()).getTime() + 60 * 1000));
                });
            } else {
                const res = JSON.parse(data);
                $("#cartNum").text(res.totalItems);
                if(res.totalItems == 1) {
                    $("#itemsText").text("item");
                } else {
                    $("#itemsText").text("items");
                }
                $("#cartTotal").text(res.totalPrice);
                return JSON.parse(data);
            }
        }

        //If there's nothing in the storage, make the AJAX request:
        data = fetch(endpoint).then(r => r.json());
        data.then((result) => {
            console.log(result);
            $("#cartNum").text(result.totalItems);
            if(result.totalItems == 1) {
                $("#itemsText").text("item");
            } else {
                $("#itemsText").text("items");
            }
            $("#cartTotal").text(result.totalPrice);
            sessionStorage.setItem(key, JSON.stringify(result));
            localStorage.setItem('cartTime', ((new Date()).getTime() + 60 * 1000));
        });
    },
    methods: {
        checkEmail: function() {
            $("#status").empty();
            $("#status").append('<div class="circle-border m-t-20"><div class="circle-core"></div></div></div><p class="verify loading"> Subscribing to news letter...</p>')
            let params = "?email=" + $('#email').val();;
            let request = new XMLHttpRequest();
            request.open("GET", "https://vaimotest.osc-fr1.scalingo.io/newsletter/subscribe" + params);
            request.send();
            request.onload = () => {
                console.log(JSON.parse(request.response));
                $("#status").empty();
                if(JSON.parse(request.response) == true) {
                    $("#status").append('<p class="verify green m-t-20"><i class="fa fa-check" style="font-size:19px; margin-right: 5px;"></i> Subscription successful.</p>');
                } else {
                    $("#status").append('<p class="verify red m-t-20"><i class="fa fa-exclamation-triangle" style="font-size:19px; margin-right: 5px;"></i> Email verification failed...</p>');
                }
            }
        },
    },
    components: {
        Slide // Register your component
    }
}).$mount('#app');