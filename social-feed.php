
    <!-- Social-feed css -->
    <link href="css/jquery.socialfeed.css" rel="stylesheet" type="text/css">
    <!-- font-awesome for social network icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--<style>
    /*This style is needed only for the plugin demo page. Do not use it in your projects*/
    .credits{
        text-align:center;padding:20px;margin-top:10px;font-size:12px;
    }
    body{ 
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 20px;
        color: #333333;
        background-color: #ffffff;
        text-align:center;
    }
    a{color: #0088cc;text-decoration: none;}
    a:hover,a:focus {color: #005580;text-decoration: underline;}
    .muted {color: #999999;}
    .container {display:inline-block;width:600px;}
    </style>-->


    <div class="container">
        <h3 class="muted">social - feed</h3>
        <iframe src="http://ghbtns.com/github-btn.html?user=pavelk2&amp;repo=social-feed&amp;type=watch&amp;count=true&amp;size=large" allowtransparency="true" frameborder="0" scrolling="0" width="152px" height="30px"></iframe>
        <iframe src="http://ghbtns.com/github-btn.html?user=pavelk2&amp;repo=social-feed&amp;type=fork&amp;count=true&amp;size=large" allowtransparency="true" frameborder="0" scrolling="0" width="152px" height="30px"></iframe>
        
        <h4 class="muted">Tesla Motors</h4>
        <div class="social-feed-container">
        </div>
        <h6 class="credits muted"><a href="https://github.com/pavelk2/social-feed" target="_blank">Social-feed</a> jquery plugin, developed by <a target="_blank" href="http://kucherbaev.com">Pavel Kucherbaev</a></h6>
    </div>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- doT.js for rendering templates and moment.js for showing time ago -->
    <script src="dependencies/doT.min.js"></script>
    <script src="dependencies/moment.min.js"></script>

    <!-- Social-feed js -->
    <script src="js/jquery.socialfeed.js"></script>

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

