require('jsdom-global')();

global.$ = global.jquery = require('jquery')(window);
global.expect = require('expect');
global.axios = require('axios');
global.Vue = require('vue');
global.bus = new Vue();
