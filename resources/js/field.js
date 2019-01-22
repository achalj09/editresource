Nova.booting((Vue, router) => {
    Vue.component('index-editresource', require('./components/IndexField'));
    Vue.component('detail-editresource', require('./components/DetailField'));
    Vue.component('form-editresource', require('./components/FormField'));
})
