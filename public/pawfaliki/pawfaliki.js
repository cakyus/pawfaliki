
var Pawfaliki = {};

Pawfaliki.models = {};

Pawfaliki.models.page = {
    name: null,
    get: function() {
        return true;
    },
    getCurrent: function() {
        if (this.name == null){
            this.name = 'Index';
            this.get();
        }
    },
    show: function() {
        Pawfaliki.views.page.show({
            title: this.name
        });
    }
};

Pawfaliki.models.changes = {
    show: function() {
        console.log('Pawfaliki.models.changes.show()');
    }
};

Pawfaliki.models.history = {
    name: null
};

Pawfaliki.models.response = {
    redirect: function(newLocation) {
        location.hash = '#'+encodeURIComponent(newLocation);
        console.log(location.href);
        Pawfaliki.load(location.href);
    }
};

Pawfaliki.load = function(href){

    if (href.indexOf('#') > 0){
        var name = href.substr(href.indexOf('#')+1);
    } else{
        // default page
        var name = 'Index';
    }

    if (name.substr(0,1) == '!'){

        // show special pages
        name = name.substr(1);

        if (name == 'RecentChanges'){

            var changes = Pawfaliki.models.changes;

            // @todo pageSize, pageNumber
            return changes.show();
        }

    } else{

        // show wiki page
        var page = Pawfaliki.models.page;

        page.name = name;

        if (page.get()){
            return page.show();
        }

        // @todo show error, ie. page not found
    }

};

Pawfaliki.views = {};

Pawfaliki.views.page = {
    show: function(page) {
        Pawfaliki.templates.show('page');
        $('.template-page h1').html(page.title);
    }
};

Pawfaliki.views.history = {
    show: function(history) {

    }
};

Pawfaliki.views.error = {
    message: '',
    show: function() {

    }
};

Pawfaliki.templates = {
    show: function(name) {
        $('.templates').css('display', 'none');
        $('.template-'+name).css('display', 'block');
    }
};

(function() {

    Pawfaliki.load(location.href);

    $('a').click(function(){
        Pawfaliki.load(this.href);
        return true;
    });
})();
