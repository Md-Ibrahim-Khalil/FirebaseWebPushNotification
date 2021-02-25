importScripts('https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.9/firebase-messaging.js');

var firebaseConfig = {
    apiKey: "AIzaSyAG6I4_G5ZQBNDpab4RthQlZlv6UGR0wtQ",
    authDomain: "inspiring-a529b.firebaseapp.com",
    projectId: "inspiring-a529b",
    storageBucket: "inspiring-a529b.appspot.com",
    messagingSenderId: "972226450495",
    appId: "1:972226450495:web:e0fc7e975fd1bd48f7548a",
    measurementId: "G-ZYHKE94RNL"
};

firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log(payload)
});