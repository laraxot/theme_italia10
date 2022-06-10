//var path = require("path");


//var extra = '../../../../Modules/Theme/Resources/js/components';

import { createApp } from 'vue';

//il componente vue va messo qui
import Map from '../../../../Modules/Geo/Resources/js/components/map/Map2.vue';

import VueExamples from '../../../../Modules/Geo/Resources/js/components/map/VueExamples.vue';

import Map6 from '../../../../Modules/Geo/Resources/js/components/map/Map6.vue';


const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});

//e va aggiunto il componente vue anche qui
app.component('v-map', Map);
app.component('v-examples', VueExamples);
app.component('v-map6', Map6);
app.mount('#app');