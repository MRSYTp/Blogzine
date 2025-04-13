import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import './dark-theme.js';
import './functions.js';
import '../vendor/plyr/plyr.js'
import '../vendor/bootstrap/dist/js/bootstrap.bundle.min.js';