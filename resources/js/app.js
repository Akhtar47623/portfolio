/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css'; 
import '../css/home.css'
import { createApp } from 'vue';

const app = createApp({});

import HomeComponent from './components/Home.vue';

app.component('home-component', HomeComponent);

app.mount('#app');
