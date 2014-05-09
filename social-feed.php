    <!-- Social-feed css -->
    <link href="stylesheets/jquery.socialfeed.css" rel="stylesheet" type="text/css">
    <!-- font-awesome for social network icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <div class="container">
        <div class="social-feed-container">
        </div>
    </div>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- doT.js for rendering templates and moment.js for showing time ago -->
    <script src="javascripts/doT.min.js"></script>
    <script src="javascripts/moment.min.js"></script>

    <!-- Social-feed js -->
    <script src="javascripts/jquery.socialfeed.js"></script>

    <script>
    $(document).ready(function(){
        $('.social-feed-container').socialfeed({
                    //FACEBOOK--------------------
                    facebook:{
                        accounts:['teslamotors'], //usernames or id
                        limit:2,
                        token:'240696342763428|FgHgjfn7wWMNT15ONHP0tVdWm_k' //you can also create an app and put  here your 'APP ID|APP SECRET' - it is easier but not safe
                    },
                    //VK--------------------
                    vk:{
                        accounts:[125936523], //id for users and -id (with minus) for groups
                        limit:2,
                        source:'all'
                    },
                    //GOOGLEPLUS-------------------
                    google:{
                         access_token: 'AIzaSyA_lDYGTnTiEjhzjvkxX1KZnouhbVQ0QUU', //AIzaSyA_lDYGTnTiEjhzjvkxX1KZnouhbVQ0QUU
                         accounts: ['111435337725041517235','114461178896543099856','+TeslaMotors'],
                         limit: 2
                     },
                    //INSTAGRAM---------------------
                    instagram:{
                        accounts:[297604134], //userid
                        client_id:'2c6d2173ae9d41de905236e6301e5a43', //2c6d2173ae9d41de905236e6301e5a43
                        limit:2
                    },
                    //GENERAL SETTINGS--------------
                    length:130,
                    show_media:true,
                    callback: function(){
                        console.log('all posts are collected');
                    }
                });
});
</script>

