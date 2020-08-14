import VueRouter from 'vue-router';

import Experts from './components/Experts';

export default new VueRouter({


    routes : [
        {
            path : '/experts',
            component : Experts
        }
    ],
    mode: 'history',
});