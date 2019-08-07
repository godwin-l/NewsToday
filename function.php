<?php
error_reporting(0);


function topArticle() {
  $urlSources = file_get_contents("https://newsapi.org/v2/everything?domains=wsj.com,nytimes.com&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);
$i = 0;

$published = substr($articlesName['publishedAt'], 0, 10);
    $articlesName = $urlSourcesArray['articles'][$i];

echo' <div class="flag flag-trending">Top Stories</div>          
 <div style="background-image:url(images/logo.png);" class="fh5co_suceefh5co_height"><img src="'.$articlesName['urlToImage'].'"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                    <div class=""><a target="_blank" href="'.$articlesName['url'].'" class="fh5co_good_font">'.$articlesName['title'].'</a></div>
                </div>';
  }


function topArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/everything?domains=wsj.com,nytimes.com&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=2; $i < 4 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="col-md-12 col-12 paddding animate-box" data-animate-effect="fadeIn">              
  <div class="col-md-12 col-12 paddding animate-box" data-animate-effect="fadeIn">
                    <div style="background-image:url(images/logo.png);" class="fh5co_suceefh5co_height_2"><img src="'.$articlesName['urlToImage'].'"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><i class="fa fa-clock-o"></i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                            <div class=""><a target="_blank" href="'.$articlesName['url'].'" class="fh5co_good_font_2">'.$articlesName['title'].'</a></div>
                        </div>
                    </div>
                    </div>
                    </div>';

    }

} 

function trendingArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

$articlesName = $urlSourcesArray['articles'];

for ($i=0; $i < sizeof($articlesName); $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="item px-2">
                <div style="background-image:url(images/logo.png);" class="fh5co_latest_trading_img_position_relative">
                <div class="flag flag-trending">Trending</div>
                    <div class="fh5co_latest_trading_img"><img src="'.$articlesName['urlToImage'].'"
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                    <div style="color:white";><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                        <a target="_blank" href="'.$articlesName['url'].'" class="text-white">'.$articlesName['title'].'</a>
                        <div class="fh5co_latest_trading_date_and_name_color">'.$articlesName['source']['name'].'</div>
                    </div>
                </div>
            </div>';

    }

} 


function localArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

$articlesName = $urlSourcesArray['articles'];

for ($i=0; $i < sizeof($articlesName); $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                <div class="flag flag-trending">Local News</div>
                    <div class="fh5co_latest_trading_img"><img style="background-image:url(images/logo.png);" src="'.$articlesName['urlToImage'].'"
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                    <div style="color:white";><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                        <a target="_blank" href="'.$articlesName['url'].'" class="text-white">'.$articlesName['title'].'</a>
                        <div class="fh5co_latest_trading_date_and_name_color">'.$articlesName['source']['name'].'</div>
                    </div>
                </div>
            </div>';

    }

} 


function bitcoinArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/everything?q=bitcoin&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

$articlesName = $urlSourcesArray['articles'];

for ($i=0; $i < 4; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Bitcoin News</div>
                            <div style="background-image:url(images/logo.png);" class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'"/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a><br>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div> 
                        <div  class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 



function popularArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?sources=al-jazeera-english&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

$articlesName = $urlSourcesArray['articles'];

for ($i=0; $i < 7; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '<div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img  style="background-image:url(images/logo.png);" src="'.$articlesName['urlToImage'].'" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"><a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a></div>
                        </div>
                </div>';

    }

} 


/*
function businessArticles() {
   $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$perPage = $start + $perPage;

  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=business&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

$articlesName = $urlSourcesArray['articles'];
$pages = 4;

for ($i = $start ; $i < $perPage ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Business</div>
                            <div class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div> 
                        <div class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 




function entertainmentArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=entertainment&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 4 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Entertainment</div>
                            <div class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                         <div class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 


function scienceArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);
         

for ($i=0; $i < 4 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Science</div>
                            <div class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                         <div class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 


function healthArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=health&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 4 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Health</div>
                            <div class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                         <div class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 



function sportsArticles() {
  $urlSources = file_get_contents("https://newsapi.org/v2/top-headlines?country=ng&category=sports&apiKey=ec4254fcd71d439c90a0db05d98c4121");

    $urlSourcesArray = json_decode($urlSources,true);

for ($i=0; $i < 4 ; $i++) { 
      $articlesName = $urlSourcesArray['articles'][$i];


                  $published = substr($articlesName['publishedAt'], 0, 10);

echo '                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                        <div class="flag flag-trending">Sports</div>
                            <div class="fh5co_news_img"><img src="'.$articlesName['urlToImage'].'" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a target="_blank" href="'.$articlesName['url'].'" class="fh5co_magna py-2">'.$articlesName['title'].'</a>
                        <div><i class="fa fa-clock-o"> </i>&nbsp;&nbsp;'.substr($articlesName['publishedAt'], 0, 10).'</div>
                        <div class="fh5co_mini_time py-3">'.$articlesName['source']['name'].'</div>
                        <div class="fh5co_consectetur">'.$articlesName['description'].'</div>
                    </div>
                </div>';

    }

} 
*/
?>
