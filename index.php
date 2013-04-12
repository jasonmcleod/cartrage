<? session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CARTRAGE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/consoles.css">


        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body ng-app='cartrage'>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->



        <div class="container" ng-controller="StreamCtrl">
            <div class="row">
                <div class="span12 logo">
                    <img src="img/logo.png" /><br>
                    <div ng-show="streaming">
                        <object type="application/x-shockwave-flash" height="478" width="600" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=cartrage" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=cartrage&auto_play=true&start_volume=25" /></object>
                        <!-- <a href="http://www.twitch.tv/cartrage" class="trk" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline; text-align:center;">Watch live video from cartrage on www.twitch.tv</a> -->
                        <iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=cartrage&amp;popout_chat=true" height="478" width="564"></iframe>
                        <br><br>
                    </div>
                </div>
            </div>
            <!-- Main hero unit for a primary marketing message or call to action -->


            <div class="row">

                <div class="span12">

                    <div class="tab-content">

                        <div class="tab-pane active" id="CHALLENGES" ng-controller='ChallengesCtrl'>
                            <div class="row">
                                <div class="span12">
                                    <div class="well">
                                        <form class="navbar-search pull-right">
                                            <input type="text" class="search-query" placeholder="Search" ng-model='filter' ng-model-instant>
                                        </form>

                                        <h2>CHALLENGES</h2>

                                        <table cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-condensed">
                                            <tr>
                                                <th width="20%">Game</td>
                                                <th width="55%">Challenge</td>
                                                <th width="5%">Console</td>
                                                <th width="20%" class='meh'>Submitted by</td>
                                            </tr>
                                            <tr ng-repeat='item in challenges' ng-show='visible(item)'>
                                                <td width="20%">{{item.game}}</td>
                                                <td width="55%"><a href='javascript:;' ng-click='select(item)'>{{item.text}}</a></td>
                                                <td width="5%"><i class='console {{item.console | lowercase}}'></td>
                                                <td width="20%" class='meh'><a href='http://twitter.com/{{item.submitted}}' target='_blank'>{{item.submitted}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->


        <div id='challenge' class="modal hide fade" ng-controller='ChallengeCtrl'>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>{{selected.game}}</h3>
          </div>
          <div class="modal-body">
            <p>{{selected.text}}</p>
          </div>
              <? if( isset($_SESSION['user']) && $_SESSION['user']) { ?>
                  <div class="modal-footer">
                      <a ng-click='activate()' class="btn btn-primary" ng-hide="active">Set Active</a>
                   </div>
             <? } ?>
        </div>

        <div class="space" id="space-front"></div>
        <div class="space" id="space-mid"></div>
        <div class="space" id="space-back"></div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>


        <script src="/js/vendor/csv2json.js"></script>
        <script src="/js/vendor/angular.js"></script>
        <script src="/js/application.js"></script>
        <script src="/js/application/controllers/ChallengesCtrl.js"></script>
        <script src="/js/application/controllers/ChallengeCtrl.js"></script>
        <script src="/js/application/controllers/StreamCtrl.js"></script>
        <script src="/js/application/directives/filter.js"></script>
        <script src="/js/application/models/Challenge.js"></script>


        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-40075651-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

    </body>
</html>
