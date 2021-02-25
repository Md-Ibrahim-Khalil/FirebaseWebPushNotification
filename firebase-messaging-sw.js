importScripts('https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.9/firebase-messaging.js');

firebase.initializeApp({
    "messagingSenderId": "972226450495"
});

const messaging = firebase.messaging();

messaging.setBackgroundMessagingHandler(function (payload) {
    console.log(payload)
});