Nova.booting((Vue, router) => {
    Vue.component('index-text-with-icon', require('./components/IndexField'));
    Vue.component('detail-text-with-icon', require('./components/DetailField'));
    Vue.component('form-text-with-icon', require('./components/FormField'));
})
