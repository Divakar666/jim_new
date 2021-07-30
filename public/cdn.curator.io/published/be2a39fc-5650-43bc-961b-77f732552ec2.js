/**
* Great Lakes Institute of Management
* Default Layout
* 2019-06-20 08:18:51
*/

(function () {
    // Loader
    var loader = new function(){this.rC=-1;this.r=[];this.add=function(src){this.r.push(src);};this.addTag=function(src,callback){var head=document.getElementsByTagName('head')[0],tag=src.indexOf('.js')>0?'script':'link',s=document.createElement(tag);head.appendChild(s);s.onload=callback;if(tag==='script'){s.type='text/javascript';s.src=src;}else if(tag==='link'){s.rel='stylesheet';s.href=src;}};this.loadNext=function(){this.rC++;if(this.rC>=this.r.length){this.done();}else{var r=this.r[this.rC];this.addTag(r,this.loadNext.bind(this));}};this.done=function(){this.onResourcesLoaded(window.Curator);};this.load=function(cb){this.onResourcesLoaded=cb;this.loadNext();};};

    // Config
    var config = {"lang":"en","debug":0,"hidePoweredBy":false,"forceHttps":false,"feed":{"id":"be2a39fc-5650-43bc-961b-77f732552ec2","apiEndpoint":"https:\/\/api.curator.io\/v1.1","postsPerPage":12,"params":{},"limit":25,"showAds":false},"widget":{"autoLoadNew":false,"template":"widget-carousel","autoPlay":true,"autoLoad":true,"infinite":false,"controlsOver":false,"controlsShowOnHover":false,"speed":5000,"duration":700,"panesVisible":null,"useCss":true,"moveAmount":0,"easing":null},"post":{"template":"post-general","showShare":true,"showComments":false,"showLikes":false,"autoPlayVideos":false,"clickAction":"open-popup","clickReadMoreAction":"open-popup","matchHeights":false,"maxHeight":0,"minWidth":320},"popup":{"template":"popup","templateWrapper":"popup-wrapper","autoPlayVideos":false,"deepLink":false},"filter":{"template":"filter","showNetworks":false,"showSources":false},"container":"#curator-feed","type":"Carousel","theme":"sydney"};
    var colours = {"widgetBgColor":"transparent","bgColor":"#ffffff","borderColor":"#cccccc","iconColor":"#222222","textColor":"#222222","linkColor":"#999999"};
    var styles = {};

    // Bootstrap
    function loadWidget (Curator) {
        Curator.loadWidget(config, colours, styles);
    }

    // Run Loader
    loader.add('https://cdn.curator.io/4.0/css/curator.css');
    loader.add('https://cdn.curator.io/published-css/be2a39fc-5650-43bc-961b-77f732552ec2.css');
    
    var loaderCallback = loadWidget;

    if (window.define) {
        // Require detected, use Loader for CSS & Require for JS
        loaderCallback = function() {
            require.config({paths: {
                'curator': 'https://cdn.curator.io/4.0/js/curator.min'
            }});

            require(['curator'], loadWidget);
        };
    } else {
        // Use Loader for all
        loader.add('https://cdn.curator.io/4.0/js/curator.min.js');
    }
    
    
    
    loader.load(loaderCallback);
})();
