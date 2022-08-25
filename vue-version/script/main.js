const app = new Vue({
    el: '#app',
    data: {
        albums : []
    },
    methods:{
        getAlbums(){
            axios.get('http://localhost/php-ajax-dischi/json/controller.php')
            .then(result => {
                this.albums = result.data;
                console.log(this.albums);
            })
        }
    },
    created: function(){
        this.getAlbums();
    }
})