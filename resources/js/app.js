require('./bootstrap');
import $ from 'jquery';
window.$ = window.jQuery = $;
require('./bootstrap');
import * as bootstrap from 'bootstrap';
try {
     // window.$ = window.jQuery = require('jquery');
     // require('bootstrap');
     require('jquery-validation/dist/jquery.validate.js');
 } catch (e) {}
 

import { gsap, Power4 } from 'gsap';
import Scrolltrigger from 'gsap/ScrollTrigger';
import ScrollToPlugin from 'gsap/ScrollToPlugin';
import EasePack from 'gsap/EasePack';
import EaselPlugin from 'gsap/EasePack';

gsap.registerPlugin(Scrolltrigger);
gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(EasePack);
gsap.registerPlugin(EaselPlugin);

global.gsap = gsap
global.Power4 = Power4


import { createApp } from 'vue';

// Definimos los componentes que vamos a utiliza
import HeaderMain from './components/header/Header.vue';
import Header2Main from './components/header/Header2.vue';
import FooterMain from './components/footer/Footer.vue';
import HeaderNav from './components/header/Nav.vue';

import Home from './components/home/Index.vue';
import Banner from './components/home/Banner.vue';
import Intro from './components/home/Intro.vue';
import Mapa from './components/modal/Mapa.vue';

import Elefante from './components/animales/Elefante.vue';
import Jirafa from './components/animales/Jirafa.vue';
import Rex from './components/animales/Rex.vue';
import Canguro from './components/animales/Canguro.vue';
import Zorro from './components/animales/Zorro.vue';

import Mucho from './components/mucho/Index.vue';


const app = createApp({});

app.component('header-main',HeaderMain);
app.component('header2-main',Header2Main);
app.component('footer-main',FooterMain);
app.component('header-nav',HeaderNav);
app.component('home-main',Home);
app.component('home-banner',Banner);
app.component('home-intro',Intro);
app.component('modal',Mapa);

app.component('elefante',Elefante);
app.component('jirafa',Jirafa);
app.component('rex',Rex);
app.component('canguro',Canguro);
app.component('zorro',Zorro);

app.component('mucho-mejor',Mucho);


app.mount('#app');
