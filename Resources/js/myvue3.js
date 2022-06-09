//var path = require("path");


//var extra = '../../../../Modules/Theme/Resources/js/components';

import { createApp } from 'vue';

//il componente vue va messo qui
import Map from '../../../../Modules/Geo/Resources/js/components/map/Map2.vue';
<<<<<<< Updated upstream
import VueExamples from '../../../../Modules/Geo/Resources/js/components/map/VueExamples.vue';
=======
import Davide from '../../../../Modules/Geo/Resources/js/components/map/Davide.vue';
>>>>>>> Stashed changes

const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});

//e va aggiunto il componente vue anche qui
app.component('v-map', Map);
<<<<<<< Updated upstream
app.component('v-examples', VueExamples);
=======
app.component('v-davide', Davide);
>>>>>>> Stashed changes
app.mount('#app');