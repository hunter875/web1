<?php
include '../../include/connect.php'; // Kết nối cơ sở dữ liệu
include '../../templates/layout/header.php'; // Phần đầu trang

// Truy vấn tin tức về phim từ bảng `news`
$query = "SELECT * FROM news ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

echo "<div class='container'>";
echo "<h1>Movie News</h1>";
echo "<div class='news-list'>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='news-item'>";
    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
    echo "<a href='" . htmlspecialchars($row['link']) . "' target='_blank'>Read more</a>";
    echo "</div>";
}

echo "</div>";
echo "</div>";

include '../../templates/layout/footer.php'; // Phần cuối trang
?>
<div class="body_main container">
    <div id="top_leaderboard_wrapper" class="leaderboard_wrapper">
        <div class="leaderboard_helper">
            <div id="leaderboard_top_ad"><div id="div-gpt-topbanner-53554376" class="mps-slot" data-mps-slot="topbanner" data-mps-loadset="0" data-google-query-id="CNKI-ufstYkDFUaH6QUdspUnBg"><script>mps._execAd("topbanner");</script><div id="google_ads_iframe_/2620/rottentomatoes/article/home_0__container__" style="border: 0pt none; width: 728px; height: 0px;"></div></div><div id="div-gpt-outofpage-53554376" data-mps-slot="_oop" class="mps-slot-oop" style="width:0;height:0;margin:0;padding:0;line-height:0;" data-google-query-id="CO6Iw-jstYkDFXCI6QUdwpY1NQ"><script>mps._execAd('_oop');</script><div id="google_ads_iframe_/2620/rottentomatoes/article/home_23__container__" style="border: 0pt none;"></div></div></div>
            <script>
                //--RESPONSIVE AD SWITCHING (DIFFERENT CONTAINERS)
                var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
                mps._queue.gptloaded.push(function() {
                    if (mps.getResponsiveSet() =='0') { //MOBILE
                        mps.cloneAd('#leaderboard_top_ad','mbanner');
                    } else { //DESKTOP or TABLET
                        mps.cloneAd('#leaderboard_top_ad','topbanner');
                    }
                });
            </script>
        </div>
    </div>

    <div class="header_main container">
        <div id="navbar" class="navbar navbar-rt" role="navigation">
            <div class="navbar-header pull-right hidden-xs">
                <div class="header_links">
                    <a id="header-whats-the-tomatometer" href="https://www.rottentomatoes.com/about/"><b>About Rotten Tomatoes®</b></a>
                    <a id="header-top-bar-critics" href="https://www.rottentomatoes.com/critics/"><b>Critics</b></a>
                </div>
            </div>
            <div id="header_brand_column" class="col-sm-13 col-full-xs">
                <div class="hidden-xs desktopNav">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a id="header-rt-logo" href="https://www.rottentomatoes.com/">
                            <img src="https://images.fandango.com/cms/assets/68ffa860-b30f-11ed-9d20-83ee649e98bd--rotten-logo-ko-322x100.png">
                        </a>
                    </div>
                    <div id="rt_logo_ad" style="display:none;"><div id="div-gpt-logorepeat-53554376" class="mps-slot mps-gpt-hidden" data-mps-slot="logorepeat" data-mps-loadset="0"><script>mps._execAd("logorepeat");</script></div></div>
                    <script>
                        var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
                        mps._queue.gptloaded.push(function() {
                            if (mps.getResponsiveSet() !='0') { //DESKTOP or TABLET
                                mps.rt.insertlogo('#rt_logo_ad', 'ploc=rtlogo;');
                            }
                        });
                    </script>
                    <!-- Search box -->
                    <div id="desktop-search-root">
                        <form action="https://www.rottentomatoes.com/search" method="get">
                            <div class="navbar-searchbox main">
                                <div class="input-group">
                                    <input name="search" type="text" class="form-control" placeholder="Search movies, TV, actors, more..." id="search-term">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default searchBtn">
                                            <em class="glyphicon glyphicon-search"></em>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="mobile-nav" class="visible-xs mobileNav">
                    <div>
                        <a id="mobile-search-button" href="#">
                            <button class="pull-right navbar-button searchButton">
                                <em class="glyphicon glyphicon-search white"></em>
                            </button>
                        </a>
                    </div>

                    <div class="navbar-brand">
                        <a id="header-rt-logo" href="https://www.rottentomatoes.com/">
                            <img src="https://images.fandango.com/cms/assets/68ffa860-b30f-11ed-9d20-83ee649e98bd--rotten-logo-ko-322x100.png">
                        </a>
                    </div>

                    <mobile-search action="https://www.rottentomatoes.com/search" hidden=""></mobile-search>

                    <div class="mob-nav-bottom clearfix">
                        <ul id="nav-list" class="nav-list">
                            <li class="nav-item">
                                <a href="https://www.rottentomatoes.com"><i class=" fontelloIcon icon-home"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.rottentomatoes.com/browse/movies_in_theaters"><i class=" fontelloIcon icon-boxoffice"></i>Box Office</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.rottentomatoes.com/browse/tv_series_browse"><i class=" fontelloIcon icon-tv2"></i>TV</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.rottentomatoes.com/browse/movies_at_home"><i class=" fontelloIcon icon-redeem"></i>DVD</a>
                            </li>
                            <li class="nav-item">
                                <a id="menu-btn" class="menu-btn" href="#">
                                    <i class=" fontelloIcon icon-more"></i>MORE
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="mobile-nav-overlay" class="mobile-nav-overlay">
                        <!--mobile dropdown-->
                        <ul class="mobile-menu-panel">
                            <li class="nav-item"><a href="https://editorial.rottentomatoes.com">News</a></li>
                            <li class="nav-item clearfix d-block">
                                <div class="social-media-box pull-right">
                                    <a href="https://www.facebook.com/rottentomatoes" target="_blank" rel="noopener">
                                        <i class="fontelloIcon icon-facebook-squared" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://twitter.com/rottentomatoes" target="_blank" rel="noopener">
                                        <i class="fontelloIcon icon-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!--mobile dropdown end-->
                    </div>
                </div>
            <!--Mobile Nav END-->
            </div>
            <div id="menu" class="navbar-nav col-sm-11 hidden-xs">
                <div class="menu-container">
                    <div id="movieMenuTab" class="menuHeader center noSpacing">
                        <a id="movieMenu" class="h2" href="https://www.rottentomatoes.com/browse/movies_in_theaters">Movies</a>
                    <div><div class="dropdown-menu" role="menu" aria-labelledby="movieMenu">
  <div class="row-sameColumnHeight">
    <div class="col-xs-5 subnav">
      <div class="innerSubnav">
        <h2 class="title">Movies in Theaters</h2>
        <ul class="list-unstyled" id="header-movies-in-theaters">
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_in_theaters/sort:newest">Opening This Week</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_in_theaters/sort:top_box_office">Top Box Office</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_coming_soon/">Coming Soon to Theaters</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_in_theaters/critics:certified_fresh~sort:popular">Certified Fresh Movies</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-5 subnav">
      <div class="innerSubnav">
        <a class="unstyled articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home">
          <h2 class="title">Movies At Home</h2>
        </a>
        <ul class="list-unstyled" id="header-on-dvd-streaming">
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:fandango-at-home">Fandango At Home</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:peacock">Peacock</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:paramount-plus">Paramount+</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:netflix">Netflix</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:apple-tv-plus">Apple Tv+</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:prime-video">Prime Video</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/affiliates:max">Max</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/sort:newest">New Releases</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home/critics:certified_fresh">Certified Fresh Movies</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/movies_at_home">Browse All</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-3 subnav">
      <div class="innerSubnav">
        <h2 class="title">More</h2>
        <ul class="list-unstyled" id="header-movies-more">
          <li>
            <a class="articleLink" style="white-space: nowrap;" href="/what-to-watch/ ">What to Watch</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-11 subnav">
      <h2 class="title">Certified Fresh Picks</h2>
      <div class="freshPicks inDropdown" id="header-certified-fresh-picks">
        
          <div class="cfpItem">
            <a href="https://www.rottentomatoes.com/m/smile_2" class="articleLink cfpLinks">
              <div class="imgContainer">
                <img src="https://resizing.flixster.com/qsagj7PZiJ_iQoyFd5dWDuIBWDk=/fit-in/180x240/v2/https://resizing.flixster.com/gZtomMQp1wjKcCrcWSIBhY8EPBo=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzZlM2VjZGZjLWI3ZDEtNGFjYS05ODFjLTQwZGUyYmMwODcwYy5qcGc=">
              </div>
              <div class="movie_content_area">
                <span class="icon tiny certified"></span>
                <span class="tMeterScore">
                  84%
                </span>
              </div>
              <p class="title noSpacing">
                Smile 2
              </p>
            </a>
          </div>
          
          <div class="cfpItem">
            <a href="https://www.rottentomatoes.com/m/anora" class="articleLink cfpLinks">
              <div class="imgContainer">
                <img src="https://resizing.flixster.com/p9g96mU1onerJ4YgCSqJHrNnY8M=/fit-in/180x240/v2/https://resizing.flixster.com/FTHBGq9jCInQsKBj9dhfLIVIxrM=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzg2NWVmODUwLWIzMDAtNGVkMC1iODgwLWZmZDAyOTVkODkwYS5qcGc=">
              </div>
              <div class="movie_content_area">
                <span class="icon tiny certified"></span>
                <span class="tMeterScore">
                  99%
                </span>
              </div>
              <p class="title noSpacing">
                Anora
              </p>
            </a>
          </div>
          
          <div class="cfpItem">
            <a href="https://www.rottentomatoes.com/m/we_live_in_time" class="articleLink cfpLinks">
              <div class="imgContainer">
                <img src="https://resizing.flixster.com/DorugeIStda5kosjv3v54eQg-DU=/fit-in/180x240/v2/https://resizing.flixster.com/qRBAJoNjbiG99gJfB8bsWY4y8vg=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzYzM2M2NmJkLWQ3ODEtNDI3NS04NjdhLTMzYzYxNTQ4YzlmZS5qcGc=">
              </div>
              <div class="movie_content_area">
                <span class="icon tiny certified"></span>
                <span class="tMeterScore">
                  78%
                </span>
              </div>
              <p class="title noSpacing">
                We Live in Time
              </p>
            </a>
          </div>
          
      </div>
    </div>
  </div>
</div></div></div>
                    <div id="tvMenuTab" class="menuHeader center noSpacing">
                        <a id="tvMenu" class="h2" href="https://www.rottentomatoes.com/browse/tv_series_browse">TV Shows</a>
                    <div><div class="dropdown-menu" role="menu" aria-labelledby="tvMenu">
  <div class="row-sameColumnHeight">
    
      <div class="col-xs-7 subnav">
        <div class="innerSubnav" id="header-tv-col1">
          <h2 class="title">
            Most Popular TV on RT
          </h2>
          <table id="tv-list-1" class="movie_list tv_list">
            <tbody>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Certified&nbsp;Fresh" class="icon tiny certified"></span>
                        
                        <span class="tMeterScore">
                          94%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/the_penguin/s01" data-ga-event="">
                      The Penguin: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Certified&nbsp;Fresh" class="icon tiny certified"></span>
                        
                        <span class="tMeterScore">
                          82%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/agatha_all_along/s01" data-ga-event="">
                      Agatha All Along: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          80%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/territory/s01" data-ga-event="">
                      Territory: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Rotten" class="icon tiny rotten"></span>
                        
                        <span class="tMeterScore">
                          30%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/before/s01" data-ga-event="">
                      Before: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Certified&nbsp;Fresh" class="icon tiny certified"></span>
                        
                        <span class="tMeterScore">
                          77%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/disclaimer/s01" data-ga-event="">
                      Disclaimer: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          100%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/from/s03" data-ga-event="">
                      From: Season 3
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Certified&nbsp;Fresh" class="icon tiny certified"></span>
                        
                        <span class="tMeterScore">
                          93%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/rivals_2024/s01" data-ga-event="">
                      Rivals: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Certified&nbsp;Fresh" class="icon tiny certified"></span>
                        
                        <span class="tMeterScore">
                          88%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/escape_at_dannemora/s01" data-ga-event="">
                      Escape at Dannemora: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          100%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/lioness/s02" data-ga-event="">
                      Lioness: Season 2
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          86%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/hysteria_2024/s01" data-ga-event="">
                      Hysteria!: Season 1
                    </a>
                  </td>
                </tr>
              
            </tbody>
          </table>
          <div class="clickForMore">
            
              <a class="unstyled articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/sort:newest">View All <span class="glyphicon glyphicon-menu-right"></span></a>
            
          </div>
        </div>
      </div>
    
      <div class="col-xs-7 subnav">
        <div class="innerSubnav" id="header-tv-col1">
          <h2 class="title">
            New TV Tonight
          </h2>
          <table id="tv-list-2" class="movie_list tv_list">
            <tbody>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          100%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/somebody_somewhere/s03" data-ga-event="">
                      Somebody Somewhere: Season 3
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span class="tMeterIcon  tiny">
                        
                          <span title="Fresh" class="icon tiny fresh"></span>
                        
                        <span class="tMeterScore">
                          100%
                        </span>
                      </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/lioness/s02" data-ga-event="">
                      Lioness: Season 2
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/wizards_beyond_waverly_place/s01" data-ga-event="">
                      Wizards Beyond Waverly Place: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/the_diplomat/s02" data-ga-event="">
                      The Diplomat: Season 2
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/tu_tambien_lo_harias/s01" data-ga-event="">
                      Tú también lo harías: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/the_marlow_murder_club/s01" data-ga-event="">
                      The Marlow Murder Club: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/buy_it_now_2024/s01" data-ga-event="">
                      Buy It Now: Season 1
                    </a>
                  </td>
                </tr>
              
                <tr class="tv_show_tr tvTopListTitle">
                  <td class="left_col">
                    
                      <span title="No Score Yet" class="icon tiny empty"></span>
                      <span class="tMeterScore"> -- </span>
                    
                  </td>
                  <td class="middle_col">
                    <a href="https://www.rottentomatoes.com/tv/finding_mr_christmas/s01" data-ga-event="">
                      Finding Mr. Christmas: Season 1
                    </a>
                  </td>
                </tr>
              
            </tbody>
          </table>
          <div class="clickForMore">
            
              <a class="unstyled articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/sort:popular">View All <span class="glyphicon glyphicon-menu-right"></span></a>
            
          </div>
        </div>
      </div>
    
    <div class="col-xs-5 subnav">
      <div class="innerSubnav">
        <h2 class="title">More</h2>
        <ul class="list-unstyled" id="header-tv-more">
          <li>
            <a class="articleLink" href="/rt-hub/what-to-watch/ ">What to Watch</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/sort:popular">Best TV Shows</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/sort:popular">Most Popular TV</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:fandango-at-home">Fandango At Home</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:peacock">Peacock</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:paramount-plus">Paramount+</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:netflix">Netflix</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:prime-video">Prime Video</a>
          </li>
          <li>
            <a class="articleLink" href="https://www.rottentomatoes.com/browse/tv_series_browse/affiliates:apple-tv-plus">Apple TV+</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-xs-5 subnav freshPicks">
      <div class="innerSubnav">
        <h2 class="title">Certified Fresh Pick</h2>
        <ul class="list-unstyled" id="header-tv-certified-fresh">
          <li>
            <a href="https://www.rottentomatoes.com/tv/shrinking/s02" class="articleLink cfpLinks">
              <div style="height:200px;vertical-align:middle;margin-bottom:5px;">
                <img style="max-height: 200px;" src="https://resizing.flixster.com/Fc4pqfBt0kBT1o96QiTRtWQf-nk=/fit-in/180x240/v2/https://resizing.flixster.com/htIecVmHlycGI6e1xjkhHaZMp34=/ems.cHJkLWVtcy1hc3NldHMvdHZzZWFzb24vMDNmYzc0YzItNjcxMS00ZGQ5LTkyMDYtMDg4ODZmNDBmZGZhLnBuZw==">
              </div>
              <div class="movie_content_area">
                <span class="icon tiny certified"></span>
                <span class="tMeterScore">
                  96%
                </span>
              </div>
              <p class="title noSpacing">
                Shrinking: Season 2
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div></div></div>
                    <div id="newsMenuTab" class="menuHeader center noSpacing">
                        <a id="newsMenu" class="h2" href="https://editorial.rottentomatoes.com">News</a>
                    <div><div class="dropdown-menu" role="menu" aria-labelledby="newsMenu">
    <div class="row-sameColumnHeight noSpacing">
        <div class="col-xs-4 subnav">
            <div class="innerSubnav" id="header-news-columns">
                <h2 class="title">Columns</h2>
                <ul class="list-unstyled">
                    <li style="padding: 0"><a class="articleLink" href="/all-time-lists/" data-pageheader="All-Time Lists">All-Time Lists</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/binge-guide/" data-pageheader="Binge Guide">Binge Guide</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/comics-on-tv/" data-pageheader="Comics on TV">Comics on TV</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/countdown/" data-pageheader="Countdown">Countdown</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/five-favorite-films/" data-pageheader="Five Favorite Films">Five Favorite Films</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/video-interviews/" data-pageheader="Video Interviews">Video Interviews</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/weekend-box-office/" data-pageheader="Weekend Box Office">Weekend Box Office</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/weekly-ketchup/" data-pageheader="Weekly Ketchup">Weekly Ketchup</a></li>
                    <li style="padding: 0"><a class="articleLink" href="/what-to-watch/" data-pageheader="What to Watch">What to Watch</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6 subnav">
            <div class="innerSubnav" id="header-news-guides">
                <div class="clickForMore">
                    <a class="unstyled articleLink" data-pageheader="Guides - Show All" href="/countdown/">View All <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>

                <h2 class="title">Guides</h2>
                <div class="newsContainer"><div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/guide/saw-movies-ranked/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/05/12135416/600Saw3.jpg')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        All <em>Saw</em> Movies Ranked
    </div>
</a></div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/guide/best-space-horror-movies/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/08/15144306/600AlienRomulus4.jpg')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        37 Best Space Horror Movies, Ranked by Tomatometer
    </div>
</a></div></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 subnav">
            <div class="innerSubnav" id="header-news-best-worst">
                <div class="clickForMore">
                    <a class="unstyled articleLink" data-pageheader="Best and Worst - Show All" href="/rt-hubs/">View All <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
                <h2 class="title">Hubs</h2>
                <div class="newsContainer"><div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/rt-hub/what-to-watch/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/07/15120909/RT_WTW_Hub_Halloween_600x314_v2-1.png')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        What to Watch: In Theaters and On Streaming
    </div>
</a></div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/rt-hub/awards-tour/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/02/30160328/RT_AwardsTour_Thumbnail_600x314.jpg')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        Awards Tour
    </div>
</a></div></div></div>
            </div>
        </div>
        <div class="col-xs-6 subnav">
            <div class="innerSubnav" id="header-news-rtnews">
                <div class="clickForMore" style="margin-bottom: 0">
                    <a class="unstyled articleLink" data-pageheader="RT News - Show All" href="/news/">View All <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>

                <h2 class="title">RT News</h2>
                <div class="newsContainer"><div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/article/alex-wolff-breaks-down-his-career-from-the-line-to-the-naked-brothers-band/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/29122023/Alex_Wolff_Awards_Tour-600x314-1.jpg')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        Alex Wolff Breaks Down His Career, From <em>The Line</em> to <em>The Naked Brothers Band</em>
    </div>
</a></div><div class="newsContainerItem"><a href="https://editorial.rottentomatoes.com/article/awards-calendar/" class="articleLink unstyled">
    <div class="newsPhoto" style="background-image:url('https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2020/02/09140345/Oscar-Statue-Thumb.jpg')"></div>
    <div class="newsTitle" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
        2024-2025 Awards Calendar
    </div>
</a></div></div></div>
            </div>
        </div>
    </div>
</div>
</div></div>
                    <div class="menuHeader center noSpacing" style="border-radius: 5px" id="header-tickets-showtimes">
                        <a id="ticketingMenu" class="h2" href="https://www.fandango.com/movies-in-theaters?adid=nav_TS" target="_blank">Showtimes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="trendingBar hidden-xs">
            <ul class="list-inline trendingEl"><li class="header">Trending on RT</li>
 
    <li><a class="unstyled trendingLink" href="https://editorial.rottentomatoes.com/article/halloween-programming-guide-2024/">Halloween Programming Guide</a></li> 
 
    <li><a class="unstyled trendingLink" href="https://editorial.rottentomatoes.com/guide/new-verified-hot-movies/">Verified Hot Movies</a></li> 
 
    <li><a class="unstyled trendingLink" href="https://editorial.rottentomatoes.com/article/tv-premiere-dates-2024/">TV Premiere Dates</a></li> 
 
    <li><a class="unstyled trendingLink" href="https://editorial.rottentomatoes.com/article/gladiator-ii-first-reactions-ridley-scott-has-done-it-again/">Gladiator II First Reactions</a></li> 
    



</ul>
            <div class="list-inline fr">
                <div id="trending_bar_ad" class="trending-bar-ad" style="display: none;"><div id="div-gpt-trendinggraphic-53554376" class="mps-slot" data-mps-slot="trendinggraphic" data-mps-loadset="0" data-google-query-id="CLnRxOjstYkDFR2K6QUdKXgRow"><script>mps._execAd("trendinggraphic");</script><div id="google_ads_iframe_/2620/rottentomatoes/article/home_10__container__" style="border: 0pt none; width: 400px; height: 0px;"></div></div></div>
                <div id="trending_bar_social" class="trending-bar_social" data-qa="trending-bar-social-list">
                    <a id="header-facebook-social-link" class="trending-bar__social-link" href="https://www.facebook.com/rottentomatoes" target="_blank" rel="noopener" aria-label="Facebook" data-qa="trending-bar-social-facebook">
                        <rt-icon icon="facebook-official"></rt-icon>
                    </a>
                    <a id="header-twitter-social-link" class="trending-bar__social-link" href="https://twitter.com/rottentomatoes" target="_blank" rel="noopener" aria-label="Twitter" data-qa="trending-bar-social-twitter">
                        <rt-icon icon="twitter-x"></rt-icon>
                    </a>
                    <a id="header-instagram-social-link" class="trending-bar__social-link" href="https://www.instagram.com/rottentomatoes/" target="_blank" rel="noopener" aria-label="Instagram" data-qa="trending-bar-social-instagram">
                        <rt-icon icon="instagram"></rt-icon>
                    </a>
                    <a id="header-tiktok-social-link" class="trending-bar__social-link" href="https://www.tiktok.com/@rottentomatoes" target="_blank" rel="noopener" aria-label="TikTok" data-qa="trending-bar-social-tiktok">
                        <rt-icon icon="tiktok"></rt-icon>
                    </a>
                    <a id="header-youtube-social-link" class="trending-bar__social-link" href="https://www.youtube.com/user/rottentomatoes" target="_blank" rel="noopener" aria-label="Youtube" data-qa="trending-bar-social-youtube">
                        <rt-icon icon="youtube-play"></rt-icon>
                    </a>
                </div>
            </div>
            <script>
                var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
                mps._queue.gptloaded.push(function() {
                    if (mps.getResponsiveSet() !='0') { //DESKTOP or TABLET
                        mps.cloneAd('#trending_bar_ad','trendinggraphic');
                    }
                });
            </script>
        </div>
        
                <!-- start content container -->
        <div style="min-height: 528px; background: white;" class="container  body_main container">
            <div class="col col-left-center col-full-xs">
                                    <div class="editorial-panel-heading"> 
	<h1>News &amp; Interviews</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-9675" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-9675" data-viewnumber="9675" data-pagination="{&quot;id&quot;:&quot;9675&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;1&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=9675&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=9675">

	
	
	
		
		<div class="row ">
			 <div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/alex-wolff-breaks-down-his-career-from-the-line-to-the-naked-brothers-band/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/29122023/Alex_Wolff_Awards_Tour-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Alex Wolff Breaks Down His Career, From <em>The Line</em> to <em>The Naked Brothers Band</em></p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			 <div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/saw-movies-ranked/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/05/12135416/600Saw3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> All <em>Saw</em> Movies Ranked</p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>	
		
		
			 <div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/awards-calendar/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2020/02/09140345/Oscar-Statue-Thumb.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 2024-2025 Awards Calendar</p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>


        <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/news">More News &amp; Interviews &gt;</a></div>
	</div>
</div>
<div>
	<form autocomplete="off" name="wpv-filter-9675" action="/?wpv_view_count=9675" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-9675 js-wpv-form-full" data-viewnumber="9675" data-viewid="9675" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZSBOZXdzIFBhZ2UiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;9675&quot;,&quot;view_id&quot;:&quot;9675&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;9675&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=9675&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=9675" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-9675" type="hidden" name="wpv_view_count" value="9675">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>All-Time Lists</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" data-viewnumber="1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR5661c5bcff3a8eea8e878b1fed30797f&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR5661c5bcff3a8eea8e878b1fed30797f">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/essential-slasher-movies/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2020/10/01114543/slasherfeatured.png" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 100 Best Slasher Movies Ranked by Tomatometer</p> 
        <p class="noSpacing publication-date">October 14, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-horror-movies-of-all-time/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/10/18164803/600Horror1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 200 Best Horror Movies of All Time</p> 
        <p class="noSpacing publication-date">October 1, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/worst-sequels-of-all-time/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/09/19095044/600Robocop3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 56 Worst Sequels of All Time</p> 
        <p class="noSpacing publication-date">August 19, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/all-time-lists">More All-Time Lists &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" action="/?wpv_view_count=1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR5661c5bcff3a8eea8e878b1fed30797f js-wpv-form-full" data-viewnumber="1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJjb2x1bW5pZCI6IjQwIiwiY29sdW1uIjoiQWxsLVRpbWUgTGlzdHMiLCJzbHVnIjoiYWxsLXRpbWUtbGlzdHMiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR5661c5bcff3a8eea8e878b1fed30797f&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR5661c5bcff3a8eea8e878b1fed30797f&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;columnid&quot;:&quot;40&quot;,&quot;column&quot;:&quot;All-Time Lists&quot;,&quot;slug&quot;:&quot;all-time-lists&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;columnid&quot;:&quot;40&quot;,&quot;column&quot;:&quot;All-Time Lists&quot;,&quot;slug&quot;:&quot;all-time-lists&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR5661c5bcff3a8eea8e878b1fed30797f" type="hidden" name="wpv_view_count" value="1773-CATTR5661c5bcff3a8eea8e878b1fed30797f">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Countdown Guides</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRc34436d824e77bde008777e641313b24" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRc34436d824e77bde008777e641313b24" data-viewnumber="1773-CATTRc34436d824e77bde008777e641313b24" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRc34436d824e77bde008777e641313b24&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRc34436d824e77bde008777e641313b24">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/saw-movies-ranked/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/05/12135416/600Saw3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> All <em>Saw</em> Movies Ranked</p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-space-horror-movies/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/08/15144306/600AlienRomulus4.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 37 Best Space Horror Movies, Ranked by Tomatometer</p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/popular-tv-shows/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/28131327/Agatha_All_Along-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 25 Most Popular TV Shows Right Now: What to Watch on Streaming</p> 
        <p class="noSpacing publication-date">October 28, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/countdown">More Countdown Guides &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRc34436d824e77bde008777e641313b24" action="/?wpv_view_count=1773-CATTRc34436d824e77bde008777e641313b24" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRc34436d824e77bde008777e641313b24 js-wpv-form-full" data-viewnumber="1773-CATTRc34436d824e77bde008777e641313b24" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJjb2x1bW5pZCI6IjE4IiwiY29sdW1uIjoiQ291bnRkb3duIEd1aWRlcyIsInNsdWciOiJjb3VudGRvd24iLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRc34436d824e77bde008777e641313b24&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRc34436d824e77bde008777e641313b24&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;columnid&quot;:&quot;18&quot;,&quot;column&quot;:&quot;Countdown Guides&quot;,&quot;slug&quot;:&quot;countdown&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;columnid&quot;:&quot;18&quot;,&quot;column&quot;:&quot;Countdown Guides&quot;,&quot;slug&quot;:&quot;countdown&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRc34436d824e77bde008777e641313b24" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRc34436d824e77bde008777e641313b24" type="hidden" name="wpv_view_count" value="1773-CATTRc34436d824e77bde008777e641313b24">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Scorecards</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR9e2530d3250e39580b36ed9e243176f3" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR9e2530d3250e39580b36ed9e243176f3" data-viewnumber="1773-CATTR9e2530d3250e39580b36ed9e243176f3" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR9e2530d3250e39580b36ed9e243176f3&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR9e2530d3250e39580b36ed9e243176f3">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/marvel-tv-by-tomatometer/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/03/20125617/600AgathaAllAlong.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Marvel TV Ranked by Tomatometer</p> 
        <p class="noSpacing publication-date">October 28, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/dc-comics-tv-scorecard/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/02/20142413/600ThePenguin.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> DC Comics TV Ranked by Tomatometer</p> 
        <p class="noSpacing publication-date">September 20, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/100-percent-certified-fresh-tv-seasons/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/07/02171604/reservation-dogs-s3-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> The Best TV Seasons Certified Fresh at 100%</p> 
        <p class="noSpacing publication-date">April 22, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/movie-tv-scorecards">More Scorecards &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR9e2530d3250e39580b36ed9e243176f3" action="/?wpv_view_count=1773-CATTR9e2530d3250e39580b36ed9e243176f3" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR9e2530d3250e39580b36ed9e243176f3 js-wpv-form-full" data-viewnumber="1773-CATTR9e2530d3250e39580b36ed9e243176f3" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJjb2x1bW5pZCI6IjQxIiwiY29sdW1uIjoiU2NvcmVjYXJkcyIsInNsdWciOiJtb3ZpZS10di1zY29yZWNhcmRzIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR9e2530d3250e39580b36ed9e243176f3&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR9e2530d3250e39580b36ed9e243176f3&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;columnid&quot;:&quot;41&quot;,&quot;column&quot;:&quot;Scorecards&quot;,&quot;slug&quot;:&quot;movie-tv-scorecards&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;columnid&quot;:&quot;41&quot;,&quot;column&quot;:&quot;Scorecards&quot;,&quot;slug&quot;:&quot;movie-tv-scorecards&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR9e2530d3250e39580b36ed9e243176f3" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR9e2530d3250e39580b36ed9e243176f3" type="hidden" name="wpv_view_count" value="1773-CATTR9e2530d3250e39580b36ed9e243176f3">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>24 Frames</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRf42f0b9b067d97fcc37298d76d498f45" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRf42f0b9b067d97fcc37298d76d498f45" data-viewnumber="1773-CATTRf42f0b9b067d97fcc37298d76d498f45" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRf42f0b9b067d97fcc37298d76d498f45&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRf42f0b9b067d97fcc37298d76d498f45">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/what-to-expect-from-2019-according-to-the-movies/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/12/31092031/6002019.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 24 Predictions For 2019 (According To The Movies)</p> 
        <p class="noSpacing publication-date">December 31, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/2018-movie-posters/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/12/27140140/600Posters2018.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 24 Best Movie Posters of 2018</p> 
        <p class="noSpacing publication-date">December 27, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/24-great-monster-movie-posters/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/08/07155826/600Monster.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 24 Great Monster Movie Posters</p> 
        <p class="noSpacing publication-date">August 7, 2018</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/24-frames">More 24 Frames &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRf42f0b9b067d97fcc37298d76d498f45" action="/?wpv_view_count=1773-CATTRf42f0b9b067d97fcc37298d76d498f45" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRf42f0b9b067d97fcc37298d76d498f45 js-wpv-form-full" data-viewnumber="1773-CATTRf42f0b9b067d97fcc37298d76d498f45" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJjb2x1bW5pZCI6IjIiLCJjb2x1bW4iOiIyNCBGcmFtZXMiLCJzbHVnIjoiMjQtZnJhbWVzIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRf42f0b9b067d97fcc37298d76d498f45&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRf42f0b9b067d97fcc37298d76d498f45&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;columnid&quot;:&quot;2&quot;,&quot;column&quot;:&quot;24 Frames&quot;,&quot;slug&quot;:&quot;24-frames&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;columnid&quot;:&quot;2&quot;,&quot;column&quot;:&quot;24 Frames&quot;,&quot;slug&quot;:&quot;24-frames&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRf42f0b9b067d97fcc37298d76d498f45" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRf42f0b9b067d97fcc37298d76d498f45" type="hidden" name="wpv_view_count" value="1773-CATTRf42f0b9b067d97fcc37298d76d498f45">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Binge Guides</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" data-viewnumber="1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-netflix-movies-to-watch-right-now/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/21123147/Womn_of_the_Hour-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Netflix’s 100 Best Movies Right Now (October 2024)</p> 
        <p class="noSpacing publication-date">October 21, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-disney-plus-shows/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/10/08150439/wandavision-agatha-108-600x314.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Best TV Series on Disney Plus (October 2024)</p> 
        <p class="noSpacing publication-date">October 9, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-hulu-shows/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/09/07144915/The_Penguin_Featured_Image-600x314-1-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Best Hulu Series To Watch Right Now (October 2024)</p> 
        <p class="noSpacing publication-date">October 7, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/binge-guide">More Binge Guides &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" action="/?wpv_view_count=1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e js-wpv-form-full" data-viewnumber="1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJjb2x1bW5pZCI6IjcxIiwiY29sdW1uIjoiQmluZ2UgR3VpZGVzIiwic2x1ZyI6ImJpbmdlLWd1aWRlIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;columnid&quot;:&quot;71&quot;,&quot;column&quot;:&quot;Binge Guides&quot;,&quot;slug&quot;:&quot;binge-guide&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;columnid&quot;:&quot;71&quot;,&quot;column&quot;:&quot;Binge Guides&quot;,&quot;slug&quot;:&quot;binge-guide&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e" type="hidden" name="wpv_view_count" value="1773-CATTR31e4e3e4d1aa5ce1fb1054f861e17e7e">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Comics On TV</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" data-viewnumber="1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR61d4da3a89c0730f3a8e5019a374fb99&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR61d4da3a89c0730f3a8e5019a374fb99">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/whats-next-for-marvels-merry-mutants-in-x-men-97/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/05/17172015/X-Men_97_Future-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> What’s Next For Marvel’s Merry Mutants In <em>X-Men ’97</em>?</p> 
        <p class="noSpacing publication-date">May 17, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/after-echo-what-can-marvel-learn-from-its-first-spotlight-series/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/01/10145920/Echo_Analysis-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> After <em>Echo</em>: What Can Marvel Learn from Its First “Spotlight” Series?</p> 
        <p class="noSpacing publication-date">January 11, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/loki-season-2-at-the-half/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/10/20103816/loki_203_600x314.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Loki</em> Season 2 at the Half: Loki as TVA Agent Muddles Expectations for the Kang–Timely–He Who Remains Future</p> 
        <p class="noSpacing publication-date">October 20, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/comics-on-tv">More Comics On TV &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" action="/?wpv_view_count=1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR61d4da3a89c0730f3a8e5019a374fb99 js-wpv-form-full" data-viewnumber="1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiY29taWNzLW9uLXR2IiwiY29sdW1uIjoiQ29taWNzIE9uIFRWIiwiY29sdW1uaWQiOiIzMSIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR61d4da3a89c0730f3a8e5019a374fb99&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR61d4da3a89c0730f3a8e5019a374fb99&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;comics-on-tv&quot;,&quot;column&quot;:&quot;Comics On TV&quot;,&quot;columnid&quot;:&quot;31&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;comics-on-tv&quot;,&quot;column&quot;:&quot;Comics On TV&quot;,&quot;columnid&quot;:&quot;31&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR61d4da3a89c0730f3a8e5019a374fb99" type="hidden" name="wpv_view_count" value="1773-CATTR61d4da3a89c0730f3a8e5019a374fb99">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Critics Consensus</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRffe0b406655adbf820fc3bec41fbb510" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRffe0b406655adbf820fc3bec41fbb510" data-viewnumber="1773-CATTRffe0b406655adbf820fc3bec41fbb510" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRffe0b406655adbf820fc3bec41fbb510&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRffe0b406655adbf820fc3bec41fbb510">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/eternals-is-underpowered/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/11/04174335/Eternals_CC-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Eternals</em> Is Underpowered</p> 
        <p class="noSpacing publication-date">November 4, 2021</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/venom-let-there-be-carnage-leans-hard-into-the-ridiculous/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/09/30163626/Venom_Carnage_CC-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Venom: Let There Be Carnage</em> Leans Hard Into the Ridiculous</p> 
        <p class="noSpacing publication-date">September 30, 2021</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/dear-evan-hansen-misses-the-high-note/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/09/23153052/Dear_Evan_Hansen-CC_Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Dear Evan Hansen</em> Misses the High Note</p> 
        <p class="noSpacing publication-date">September 23, 2021</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/critics-consensus">More Critics Consensus &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRffe0b406655adbf820fc3bec41fbb510" action="/?wpv_view_count=1773-CATTRffe0b406655adbf820fc3bec41fbb510" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRffe0b406655adbf820fc3bec41fbb510 js-wpv-form-full" data-viewnumber="1773-CATTRffe0b406655adbf820fc3bec41fbb510" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiY3JpdGljcy1jb25zZW5zdXMiLCJjb2x1bW4iOiJDcml0aWNzIENvbnNlbnN1cyIsImNvbHVtbmlkIjoiMzQiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRffe0b406655adbf820fc3bec41fbb510&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRffe0b406655adbf820fc3bec41fbb510&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;critics-consensus&quot;,&quot;column&quot;:&quot;Critics Consensus&quot;,&quot;columnid&quot;:&quot;34&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;critics-consensus&quot;,&quot;column&quot;:&quot;Critics Consensus&quot;,&quot;columnid&quot;:&quot;34&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRffe0b406655adbf820fc3bec41fbb510" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRffe0b406655adbf820fc3bec41fbb510" type="hidden" name="wpv_view_count" value="1773-CATTRffe0b406655adbf820fc3bec41fbb510">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Everything We Know</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR39e51c0341325a0eb969b2b440d69a7f" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR39e51c0341325a0eb969b2b440d69a7f" data-viewnumber="1773-CATTR39e51c0341325a0eb969b2b440d69a7f" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR39e51c0341325a0eb969b2b440d69a7f&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR39e51c0341325a0eb969b2b440d69a7f">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/dune-prophecy-premiere-date-trailer-cast-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/25124756/EWKA_Dune_Prophecy-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Dune: Prophecy</em>: Premiere Date, Trailer, Cast &amp; More</p> 
        <p class="noSpacing publication-date">October 25, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/interview-with-the-vampire-season-3-premiere-date-trailer-cast-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/09/27144827/EWKA_Interview_Vampire_S3-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Interview with the Vampire</em>: Season 3: Premiere Date, Trailer, Cast &amp; More</p> 
        <p class="noSpacing publication-date">September 30, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/james-wans-teacup-premiere-date-trailer-cast-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/08/16142758/EWKA_Teacup-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> James Wan’s <em>Teacup</em>: Premiere Date, Trailer, Cast &amp; More</p> 
        <p class="noSpacing publication-date">August 16, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/everything-we-know">More Everything We Know &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR39e51c0341325a0eb969b2b440d69a7f" action="/?wpv_view_count=1773-CATTR39e51c0341325a0eb969b2b440d69a7f" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR39e51c0341325a0eb969b2b440d69a7f js-wpv-form-full" data-viewnumber="1773-CATTR39e51c0341325a0eb969b2b440d69a7f" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiZXZlcnl0aGluZy13ZS1rbm93IiwiY29sdW1uIjoiRXZlcnl0aGluZyBXZSBLbm93IiwiY29sdW1uaWQiOiI4MyIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR39e51c0341325a0eb969b2b440d69a7f&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR39e51c0341325a0eb969b2b440d69a7f&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;everything-we-know&quot;,&quot;column&quot;:&quot;Everything We Know&quot;,&quot;columnid&quot;:&quot;83&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;everything-we-know&quot;,&quot;column&quot;:&quot;Everything We Know&quot;,&quot;columnid&quot;:&quot;83&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR39e51c0341325a0eb969b2b440d69a7f" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR39e51c0341325a0eb969b2b440d69a7f" type="hidden" name="wpv_view_count" value="1773-CATTR39e51c0341325a0eb969b2b440d69a7f">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Five Favorite Films</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRdcb269de5899a4b307741876f8120243" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRdcb269de5899a4b307741876f8120243" data-viewnumber="1773-CATTRdcb269de5899a4b307741876f8120243" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRdcb269de5899a4b307741876f8120243&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRdcb269de5899a4b307741876f8120243">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/immaculate-director-michael-mohans-five-favorite-horror-films/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/04/16180221/FFF.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Immaculate</em> Director Michael Mohan’s Five Favorite Horror Films</p> 
        <p class="noSpacing publication-date">April 16, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/morgan-freemans-five-favorite-films/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/04/12183008/Morgan_Freeman_FFF_2023-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Morgan Freeman’s Five Favorite Films</p> 
        <p class="noSpacing publication-date">April 12, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/praise-this-director-tina-gordons-five-favorite-films/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/04/06155547/Tina_Gordon_FFF-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Praise This</em> Director Tina Gordon’s Five Favorite Films</p> 
        <p class="noSpacing publication-date">April 6, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/five-favorite-films">More Five Favorite Films &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRdcb269de5899a4b307741876f8120243" action="/?wpv_view_count=1773-CATTRdcb269de5899a4b307741876f8120243" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRdcb269de5899a4b307741876f8120243 js-wpv-form-full" data-viewnumber="1773-CATTRdcb269de5899a4b307741876f8120243" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiZml2ZS1mYXZvcml0ZS1maWxtcyIsImNvbHVtbiI6IkZpdmUgRmF2b3JpdGUgRmlsbXMiLCJjb2x1bW5pZCI6IjYyIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRdcb269de5899a4b307741876f8120243&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRdcb269de5899a4b307741876f8120243&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;five-favorite-films&quot;,&quot;column&quot;:&quot;Five Favorite Films&quot;,&quot;columnid&quot;:&quot;62&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;five-favorite-films&quot;,&quot;column&quot;:&quot;Five Favorite Films&quot;,&quot;columnid&quot;:&quot;62&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRdcb269de5899a4b307741876f8120243" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRdcb269de5899a4b307741876f8120243" type="hidden" name="wpv_view_count" value="1773-CATTRdcb269de5899a4b307741876f8120243">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Hear Us Out</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRec1c2a226b8742547d2acbff01fe0737" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRec1c2a226b8742547d2acbff01fe0737" data-viewnumber="1773-CATTRec1c2a226b8742547d2acbff01fe0737" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRec1c2a226b8742547d2acbff01fe0737&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRec1c2a226b8742547d2acbff01fe0737">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/hear-us-out-ron-howards-how-the-grinch-stole-christmas-is-a-modern-holiday-classic/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2020/11/16172753/HUO-How_Grinch_Stole_Christmas-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Hear Us Out: Ron Howard’s <em>How the Grinch Stole Christmas</em> Is A Modern Holiday Classic</p> 
        <p class="noSpacing publication-date">November 17, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/4-ways-house-of-the-dragon-honors-game-of-thrones-legacy-and-4-ways-it-doesnt/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/08/23132409/house-of-the-dragon-h4-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 4 Ways <em>House of the Dragon</em> Honors <em>Game of Thrones</em>’ Legacy (and 4 Ways It Doesn’t)</p> 
        <p class="noSpacing publication-date">August 23, 2022</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/hear-us-out-better-call-saul-is-a-better-show-than-breaking-bad/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/08/16150131/bb-bcs-split-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Hear Us Out: <em>Better Call Saul</em> Is a Better Show Than <em>Breaking Bad</em></p> 
        <p class="noSpacing publication-date">August 16, 2022</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/hear-us-out">More Hear Us Out &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRec1c2a226b8742547d2acbff01fe0737" action="/?wpv_view_count=1773-CATTRec1c2a226b8742547d2acbff01fe0737" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRec1c2a226b8742547d2acbff01fe0737 js-wpv-form-full" data-viewnumber="1773-CATTRec1c2a226b8742547d2acbff01fe0737" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiaGVhci11cy1vdXQiLCJjb2x1bW4iOiJIZWFyIFVzIE91dCIsImNvbHVtbmlkIjoiMzciLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRec1c2a226b8742547d2acbff01fe0737&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRec1c2a226b8742547d2acbff01fe0737&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;hear-us-out&quot;,&quot;column&quot;:&quot;Hear Us Out&quot;,&quot;columnid&quot;:&quot;37&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;hear-us-out&quot;,&quot;column&quot;:&quot;Hear Us Out&quot;,&quot;columnid&quot;:&quot;37&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRec1c2a226b8742547d2acbff01fe0737" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRec1c2a226b8742547d2acbff01fe0737" type="hidden" name="wpv_view_count" value="1773-CATTRec1c2a226b8742547d2acbff01fe0737">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Indie Fresh List</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" data-viewnumber="1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRdd74f4894377f8e0b527fe8e98a275d3&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRdd74f4894377f8e0b527fe8e98a275d3">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/indie-fresh-list-tar-triangle-of-sadness-decision-to-leave-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/10/14104842/TAR.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Indie Fresh List: <em>Decision to Leave</em>, <em>TÁR</em>, <em>Triangle of Sadness</em>, and More</p> 
        <p class="noSpacing publication-date">October 14, 2022</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/indie-fresh-list-not-okay-resurrection-vengeance-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/07/29123254/Indie_Fresh-7-29-22-Not_Okay.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Indie Fresh List: <em>Not Okay</em>, <em>Resurrection</em>, <em>Vengeance</em>, and More</p> 
        <p class="noSpacing publication-date">July 28, 2022</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/indie-fresh-list-cmon-cmon-tick-tick-boom-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/11/19132906/Indie_Fresh-11-19-21.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Indie Fresh List: <em>C’mon C’mon</em>, <em>tick, tick… BOOM!</em>, and More</p> 
        <p class="noSpacing publication-date">November 19, 2021</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/indie-fresh-list">More Indie Fresh List &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" action="/?wpv_view_count=1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRdd74f4894377f8e0b527fe8e98a275d3 js-wpv-form-full" data-viewnumber="1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoiaW5kaWUtZnJlc2gtbGlzdCIsImNvbHVtbiI6IkluZGllIEZyZXNoIExpc3QiLCJjb2x1bW5pZCI6IjExIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRdd74f4894377f8e0b527fe8e98a275d3&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRdd74f4894377f8e0b527fe8e98a275d3&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;indie-fresh-list&quot;,&quot;column&quot;:&quot;Indie Fresh List&quot;,&quot;columnid&quot;:&quot;11&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;indie-fresh-list&quot;,&quot;column&quot;:&quot;Indie Fresh List&quot;,&quot;columnid&quot;:&quot;11&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRdd74f4894377f8e0b527fe8e98a275d3" type="hidden" name="wpv_view_count" value="1773-CATTRdd74f4894377f8e0b527fe8e98a275d3">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Now Streaming</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" data-viewnumber="1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-movies-tv-shows-streaming-in-april-2024-what-to-watch-on-netflix-prime-video-disney-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/03/03165730/New_TV_Streaming_April_2024-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New Movies &amp; TV Shows Streaming in April 2024: What To Watch on Netflix, Prime Video, Disney+, and More</p> 
        <p class="noSpacing publication-date">April 4, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-on-streaming-in-march-2024/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/02/04153940/New_Streaming_March_2024-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New Movies &amp; TV Shows Streaming in March 2024: What To Watch on Netflix, Prime Video, Disney+, and More</p> 
        <p class="noSpacing publication-date">March 4, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-on-streaming-in-february-2024/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/01/06120546/New_Streaming_February_2024.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New Movies &amp; TV Shows Streaming in February 2024: What To Watch on Netflix, Prime Video, Disney+, and More</p> 
        <p class="noSpacing publication-date">February 6, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/now-streaming">More Now Streaming &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" action="/?wpv_view_count=1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3 js-wpv-form-full" data-viewnumber="1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoibm93LXN0cmVhbWluZyIsImNvbHVtbiI6Ik5vdyBTdHJlYW1pbmciLCJjb2x1bW5pZCI6IjcwIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;now-streaming&quot;,&quot;column&quot;:&quot;Now Streaming&quot;,&quot;columnid&quot;:&quot;70&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;now-streaming&quot;,&quot;column&quot;:&quot;Now Streaming&quot;,&quot;columnid&quot;:&quot;70&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3" type="hidden" name="wpv_view_count" value="1773-CATTR0a03dcc41468efdbfedfe058c34cd6c3">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Oral Histories</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" data-viewnumber="1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTReb248743d620158f1c5aa2e4fdc1c22d&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTReb248743d620158f1c5aa2e4fdc1c22d">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/an-oral-history-of-guardians-of-the-galaxy-by-chris-pratt-and-james-gunn/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/05/08112847/GotG_Oral_History-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> An Oral History of <em>Guardians of the Galaxy</em> by Chris Pratt and James Gunn</p> 
        <p class="noSpacing publication-date">May 5, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/keanu-reeves-and-chad-stahelskis-oral-history-of-john-wick-chapter-2-and-3/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2019/05/19174856/JohnWickOralHistory21.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How Keanu Reeves and Chad Stahelski Expanded the <em>John Wick</em> Universe with <em>Chapter 2</em> and <em>3</em></p> 
        <p class="noSpacing publication-date">March 23, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/an-oral-history-of-jackass/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/01/03131850/Jackass_Forever_Oral_History.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> An Oral History of <em>Jackass</em></p> 
        <p class="noSpacing publication-date">February 3, 2022</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/oral-histories">More Oral Histories &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" action="/?wpv_view_count=1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTReb248743d620158f1c5aa2e4fdc1c22d js-wpv-form-full" data-viewnumber="1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoib3JhbC1oaXN0b3JpZXMiLCJjb2x1bW4iOiJPcmFsIEhpc3RvcmllcyIsImNvbHVtbmlkIjoiODIiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTReb248743d620158f1c5aa2e4fdc1c22d&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTReb248743d620158f1c5aa2e4fdc1c22d&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;oral-histories&quot;,&quot;column&quot;:&quot;Oral Histories&quot;,&quot;columnid&quot;:&quot;82&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;oral-histories&quot;,&quot;column&quot;:&quot;Oral Histories&quot;,&quot;columnid&quot;:&quot;82&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTReb248743d620158f1c5aa2e4fdc1c22d" type="hidden" name="wpv_view_count" value="1773-CATTReb248743d620158f1c5aa2e4fdc1c22d">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Parental Guidance</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" data-viewnumber="1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/how-family-friendly-is-captain-marvel/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2019/03/08110357/Captain_Marvel_Parental_Guidance_Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How Family-Friendly Is <em>Captain Marvel</em>?</p> 
        <p class="noSpacing publication-date">March 8, 2019</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/how-family-friendly-is-alita-battle-angel/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2019/02/15125917/Alita_Battle_Angel_PG_Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How Family-Friendly Is <em>Alita: Battle Angel</em>?</p> 
        <p class="noSpacing publication-date">February 15, 2019</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/how-family-friendly-are-aquaman-and-bumblebee/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/12/21121231/AquaBumble1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How Family-Friendly Are <em>Aquaman</em> and <em>Bumblebee</em>?</p> 
        <p class="noSpacing publication-date">December 21, 2018</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/parental-guidance">More Parental Guidance &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" action="/?wpv_view_count=1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c js-wpv-form-full" data-viewnumber="1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoicGFyZW50YWwtZ3VpZGFuY2UiLCJjb2x1bW4iOiJQYXJlbnRhbCBHdWlkYW5jZSIsImNvbHVtbmlkIjoiNjUiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;parental-guidance&quot;,&quot;column&quot;:&quot;Parental Guidance&quot;,&quot;columnid&quot;:&quot;65&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;parental-guidance&quot;,&quot;column&quot;:&quot;Parental Guidance&quot;,&quot;columnid&quot;:&quot;65&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c" type="hidden" name="wpv_view_count" value="1773-CATTR5af4f9b797a35f5a72d13d6a5b37ce6c">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Photo Galleries</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR6c9420af8c4f2c910659f22d3c696976" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR6c9420af8c4f2c910659f22d3c696976" data-viewnumber="1773-CATTR6c9420af8c4f2c910659f22d3c696976" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR6c9420af8c4f2c910659f22d3c696976&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR6c9420af8c4f2c910659f22d3c696976">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/emmys-2024-red-carpet-arrivals/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/09/15174821/Emmys3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Emmys 2024 Red Carpet Arrival Photos</p> 
        <p class="noSpacing publication-date">September 15, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/2023-san-diego-comic-con-cosplay-gallery/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/07/21122850/deadpool-joker-cosplay-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> 2023 San Diego Comic-Con Cosplay Gallery</p> 
        <p class="noSpacing publication-date">July 21, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/emmys-2022-red-carpet-arrivals/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/09/12164630/emmys-2022-RED_CARPET_ROUNDUP_600X314.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Emmys 2022 Red Carpet Arrivals</p> 
        <p class="noSpacing publication-date">September 12, 2022</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/photo-galleries">More Photo Galleries &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR6c9420af8c4f2c910659f22d3c696976" action="/?wpv_view_count=1773-CATTR6c9420af8c4f2c910659f22d3c696976" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR6c9420af8c4f2c910659f22d3c696976 js-wpv-form-full" data-viewnumber="1773-CATTR6c9420af8c4f2c910659f22d3c696976" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoicGhvdG8tZ2FsbGVyaWVzIiwiY29sdW1uIjoiUGhvdG8gR2FsbGVyaWVzIiwiY29sdW1uaWQiOiIxOSIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR6c9420af8c4f2c910659f22d3c696976&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR6c9420af8c4f2c910659f22d3c696976&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;photo-galleries&quot;,&quot;column&quot;:&quot;Photo Galleries&quot;,&quot;columnid&quot;:&quot;19&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;photo-galleries&quot;,&quot;column&quot;:&quot;Photo Galleries&quot;,&quot;columnid&quot;:&quot;19&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR6c9420af8c4f2c910659f22d3c696976" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR6c9420af8c4f2c910659f22d3c696976" type="hidden" name="wpv_view_count" value="1773-CATTR6c9420af8c4f2c910659f22d3c696976">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Red Carpet Roundup</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" data-viewnumber="1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR5700a2f8107fbfa8268e6486f3c424f8&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR5700a2f8107fbfa8268e6486f3c424f8">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/gallery-grammys-red-carpet-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/02/06181052/RED_CARPET_ROUNDUP-grammys_600X314.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Gallery: Grammys Red Carpet &amp; More</p> 
        <p class="noSpacing publication-date">February 6, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/emmys-2021-red-carpet-arrivals/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/09/19170149/600EmmysRedCarpet1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Emmys 2021 Red Carpet Arrivals</p> 
        <p class="noSpacing publication-date">September 19, 2021</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/gallery/oscars-2020-red-carpet-arrivals/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2020/02/09163536/600OscarsR3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Oscars 2020 Red Carpet Arrivals</p> 
        <p class="noSpacing publication-date">February 9, 2020</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/red-carpet-roundup">More Red Carpet Roundup &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" action="/?wpv_view_count=1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR5700a2f8107fbfa8268e6486f3c424f8 js-wpv-form-full" data-viewnumber="1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoicmVkLWNhcnBldC1yb3VuZHVwIiwiY29sdW1uIjoiUmVkIENhcnBldCBSb3VuZHVwIiwiY29sdW1uaWQiOiI2OSIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR5700a2f8107fbfa8268e6486f3c424f8&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR5700a2f8107fbfa8268e6486f3c424f8&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;red-carpet-roundup&quot;,&quot;column&quot;:&quot;Red Carpet Roundup&quot;,&quot;columnid&quot;:&quot;69&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;red-carpet-roundup&quot;,&quot;column&quot;:&quot;Red Carpet Roundup&quot;,&quot;columnid&quot;:&quot;69&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR5700a2f8107fbfa8268e6486f3c424f8" type="hidden" name="wpv_view_count" value="1773-CATTR5700a2f8107fbfa8268e6486f3c424f8">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>RT on DVD</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR7e226f5b9dec4f450fe4659be670c72f" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR7e226f5b9dec4f450fe4659be670c72f" data-viewnumber="1773-CATTR7e226f5b9dec4f450fe4659be670c72f" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR7e226f5b9dec4f450fe4659be670c72f&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR7e226f5b9dec4f450fe4659be670c72f">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-on-dvd-in-april-paddington-2-phantom-thread-the-post-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/04/09102426/April2018-DVD-Phantom-Thread.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New On DVD in April: <em>Paddington 2</em>, <em>Phantom Thread</em>, <em>The Post</em> and More</p> 
        <p class="noSpacing publication-date">April 2, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-on-dvd-in-march-thor-ragnarok-lady-bird-jumanji-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/02/26103817/March2018-DVD-Last-Jedi.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New On DVD in March: <em>Thor: Ragnarok</em>, <em>Lady Bird</em>, <em>Jumanji</em> and More</p> 
        <p class="noSpacing publication-date">February 27, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/new-on-dvd-in-february-coco-three-billboards-only-the-brave-and-more/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/01/26101408/Three-Billboards-Feb-DVD.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> New On DVD in February: <em>Coco</em>, <em>Three Billboards</em>, <em>Only the Brave</em> and More</p> 
        <p class="noSpacing publication-date">January 30, 2018</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/rt-on-dvd">More RT on DVD &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR7e226f5b9dec4f450fe4659be670c72f" action="/?wpv_view_count=1773-CATTR7e226f5b9dec4f450fe4659be670c72f" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR7e226f5b9dec4f450fe4659be670c72f js-wpv-form-full" data-viewnumber="1773-CATTR7e226f5b9dec4f450fe4659be670c72f" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoicnQtb24tZHZkIiwiY29sdW1uIjoiUlQgb24gRFZEIiwiY29sdW1uaWQiOiIxIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR7e226f5b9dec4f450fe4659be670c72f&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR7e226f5b9dec4f450fe4659be670c72f&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;rt-on-dvd&quot;,&quot;column&quot;:&quot;RT on DVD&quot;,&quot;columnid&quot;:&quot;1&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;rt-on-dvd&quot;,&quot;column&quot;:&quot;RT on DVD&quot;,&quot;columnid&quot;:&quot;1&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR7e226f5b9dec4f450fe4659be670c72f" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR7e226f5b9dec4f450fe4659be670c72f" type="hidden" name="wpv_view_count" value="1773-CATTR7e226f5b9dec4f450fe4659be670c72f">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Showdowns</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" data-viewnumber="1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRf98ea611cdfa02b4e70d59e481d1d675&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRf98ea611cdfa02b4e70d59e481d1d675">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/best-1994-movies-showdown/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/21123500/1994_Movies_Showdown_Winner-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> RT Fans Crown <em>The Shawshank Redemption</em> the Best Movie of 1994</p> 
        <p class="noSpacing publication-date">October 21, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/best-1999-movies-showdown/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/06/21095136/1999_Movies_Showdown_Winner-Rep_1x1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> RT Users Crown <em>The Matrix</em> The Best Movie of 1999!</p> 
        <p class="noSpacing publication-date">June 21, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/best-directors-of-the-last-25-years/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/08/30024823/Best_Directors_Showdown_Winner-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> RT Fans Crown Christopher Nolan the Best Director of the Last 25 Years</p> 
        <p class="noSpacing publication-date">August 30, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/showdowns">More Showdowns &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" action="/?wpv_view_count=1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRf98ea611cdfa02b4e70d59e481d1d675 js-wpv-form-full" data-viewnumber="1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoic2hvd2Rvd25zIiwiY29sdW1uIjoiU2hvd2Rvd25zIiwiY29sdW1uaWQiOiI0OSIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRf98ea611cdfa02b4e70d59e481d1d675&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRf98ea611cdfa02b4e70d59e481d1d675&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;showdowns&quot;,&quot;column&quot;:&quot;Showdowns&quot;,&quot;columnid&quot;:&quot;49&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;showdowns&quot;,&quot;column&quot;:&quot;Showdowns&quot;,&quot;columnid&quot;:&quot;49&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRf98ea611cdfa02b4e70d59e481d1d675" type="hidden" name="wpv_view_count" value="1773-CATTRf98ea611cdfa02b4e70d59e481d1d675">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Sub-Cult</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRa47a30e6fd155c0415a2556158c694f8" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRa47a30e6fd155c0415a2556158c694f8" data-viewnumber="1773-CATTRa47a30e6fd155c0415a2556158c694f8" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRa47a30e6fd155c0415a2556158c694f8&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRa47a30e6fd155c0415a2556158c694f8">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/how-role-models-made-paul-rudd-a-bankable-leading-man/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/07/24171640/Role-Models-Sub-Cult.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How <em>Role Models</em> Made Paul Rudd a Bankable Leading Man</p> 
        <p class="noSpacing publication-date">July 24, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/limitless-is-preposterous-but-enjoyable-if-you-turn-off-your-brain/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/06/27143806/Limitless-Sub-Cult.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Limitless</em> Is Preposterous but Enjoyable If You Turn Off Your Brain</p> 
        <p class="noSpacing publication-date">June 27, 2018</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/how-mystery-team-revealed-donald-glover-was-a-star-in-the-making/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/05/23171925/Mystery-Team-Sub-Cult.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> How <em>Mystery Team</em> Revealed Donald Glover Was a Star in the Making</p> 
        <p class="noSpacing publication-date">May 23, 2018</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/sub-cult">More Sub-Cult &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRa47a30e6fd155c0415a2556158c694f8" action="/?wpv_view_count=1773-CATTRa47a30e6fd155c0415a2556158c694f8" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRa47a30e6fd155c0415a2556158c694f8 js-wpv-form-full" data-viewnumber="1773-CATTRa47a30e6fd155c0415a2556158c694f8" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoic3ViLWN1bHQiLCJjb2x1bW4iOiJTdWItQ3VsdCIsImNvbHVtbmlkIjoiMjAiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRa47a30e6fd155c0415a2556158c694f8&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRa47a30e6fd155c0415a2556158c694f8&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;sub-cult&quot;,&quot;column&quot;:&quot;Sub-Cult&quot;,&quot;columnid&quot;:&quot;20&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;sub-cult&quot;,&quot;column&quot;:&quot;Sub-Cult&quot;,&quot;columnid&quot;:&quot;20&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRa47a30e6fd155c0415a2556158c694f8" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRa47a30e6fd155c0415a2556158c694f8" type="hidden" name="wpv_view_count" value="1773-CATTRa47a30e6fd155c0415a2556158c694f8">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Total Recall</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" data-viewnumber="1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR6f1f90ba902ef4db75f65c363ddceaba&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR6f1f90ba902ef4db75f65c363ddceaba">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/worst-horror-movies/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/09/19083227/600Winnie2.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> The Worst Horror Movies of All Time</p> 
        <p class="noSpacing publication-date">October 2, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/all-marvel-cinematic-universe-movies-ranked/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2018/02/14193805/Marvel-Movies-Recall2.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Marvel Movies Ranked Worst to Best by Tomatometer</p> 
        <p class="noSpacing publication-date">November 23, 2022</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/jurassic-park-world-movies/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2015/06/19171851/Jurassic-Park-Franchise-Recall.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>Jurassic Park</em> Movies Ranked By Tomatometer</p> 
        <p class="noSpacing publication-date">November 23, 2022</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/total-recall">More Total Recall &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" action="/?wpv_view_count=1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR6f1f90ba902ef4db75f65c363ddceaba js-wpv-form-full" data-viewnumber="1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoidG90YWwtcmVjYWxsIiwiY29sdW1uIjoiVG90YWwgUmVjYWxsIiwiY29sdW1uaWQiOiIzOSIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR6f1f90ba902ef4db75f65c363ddceaba&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR6f1f90ba902ef4db75f65c363ddceaba&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;total-recall&quot;,&quot;column&quot;:&quot;Total Recall&quot;,&quot;columnid&quot;:&quot;39&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;total-recall&quot;,&quot;column&quot;:&quot;Total Recall&quot;,&quot;columnid&quot;:&quot;39&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR6f1f90ba902ef4db75f65c363ddceaba" type="hidden" name="wpv_view_count" value="1773-CATTR6f1f90ba902ef4db75f65c363ddceaba">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Trophy Talk</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR756394166b9cbf31e72a5af54335414e" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR756394166b9cbf31e72a5af54335414e" data-viewnumber="1773-CATTR756394166b9cbf31e72a5af54335414e" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR756394166b9cbf31e72a5af54335414e&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR756394166b9cbf31e72a5af54335414e">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/alex-wolff-breaks-down-his-career-from-the-line-to-the-naked-brothers-band/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/29122023/Alex_Wolff_Awards_Tour-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Alex Wolff Breaks Down His Career, From <em>The Line</em> to <em>The Naked Brothers Band</em></p> 
        <p class="noSpacing publication-date">October 29, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/kingsley-ben-adir-talks-extensive-prep-to-play-as-bob-marley-on-the-awards-tour-podcast/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/22192521/RT_FiveFavoriteFilms_Title_600X314.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Kingsley Ben-Adir Talks Extensive Prep to Play Bob Marley on the Awards Tour Podcast</p> 
        <p class="noSpacing publication-date">October 23, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/june-squibb-recounts-baring-it-all-for-her-craft-and-popping-wheelies-in-thelma-for-the-awards-tour-podcast/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/14130847/THELMA-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> June Squibb Recounts Baring it All for Her Craft and Popping Wheelies in <em>Thelma</em> for the Awards Tour Podcast</p> 
        <p class="noSpacing publication-date">October 11, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/trophy-talk">More Trophy Talk &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR756394166b9cbf31e72a5af54335414e" action="/?wpv_view_count=1773-CATTR756394166b9cbf31e72a5af54335414e" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR756394166b9cbf31e72a5af54335414e js-wpv-form-full" data-viewnumber="1773-CATTR756394166b9cbf31e72a5af54335414e" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoidHJvcGh5LXRhbGsiLCJjb2x1bW4iOiJUcm9waHkgVGFsayIsImNvbHVtbmlkIjoiMzgiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR756394166b9cbf31e72a5af54335414e&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR756394166b9cbf31e72a5af54335414e&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;trophy-talk&quot;,&quot;column&quot;:&quot;Trophy Talk&quot;,&quot;columnid&quot;:&quot;38&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;trophy-talk&quot;,&quot;column&quot;:&quot;Trophy Talk&quot;,&quot;columnid&quot;:&quot;38&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR756394166b9cbf31e72a5af54335414e" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR756394166b9cbf31e72a5af54335414e" type="hidden" name="wpv_view_count" value="1773-CATTR756394166b9cbf31e72a5af54335414e">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>TV Talk</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR13b1305fa0322268820154c51cdc3b97" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR13b1305fa0322268820154c51cdc3b97" data-viewnumber="1773-CATTR13b1305fa0322268820154c51cdc3b97" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR13b1305fa0322268820154c51cdc3b97&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR13b1305fa0322268820154c51cdc3b97">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/kaley-cuoco-comedy-based-on-a-true-story-reactions-more-tv-streaming-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/06/09173522/based-on-a-true-story-keyart-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Kaley Cuoco’s Latest Comedy Is ‘Fresh’ Out of the Gate: Critics Call <em>Based on a True Story</em> ‘Pleasingly Perverse’</p> 
        <p class="noSpacing publication-date">June 9, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/succession-barry-more-series-finales-ranked-and-more-tv-streaming-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/05/02153137/succession-series-finale-toast-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Critics Weigh In on <em>Succession</em>, <em>Barry</em> &amp; More of the Biggest Series Finales of the Year</p> 
        <p class="noSpacing publication-date">June 2, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/cannes-critics-batter-the-idol-and-more-tv-streaming-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/05/25194258/the-idol-key-art-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> The Wrath of Cannes: Critics Batter <em>The Idol</em>, Starring Lily-Rose Depp and Abel ‘The Weeknd’ Tesfaye</p> 
        <p class="noSpacing publication-date">May 25, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/tv-talk">More TV Talk &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR13b1305fa0322268820154c51cdc3b97" action="/?wpv_view_count=1773-CATTR13b1305fa0322268820154c51cdc3b97" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR13b1305fa0322268820154c51cdc3b97 js-wpv-form-full" data-viewnumber="1773-CATTR13b1305fa0322268820154c51cdc3b97" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoidHYtdGFsayIsImNvbHVtbiI6IlRWIFRhbGsiLCJjb2x1bW5pZCI6IjczIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR13b1305fa0322268820154c51cdc3b97&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR13b1305fa0322268820154c51cdc3b97&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;tv-talk&quot;,&quot;column&quot;:&quot;TV Talk&quot;,&quot;columnid&quot;:&quot;73&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;tv-talk&quot;,&quot;column&quot;:&quot;TV Talk&quot;,&quot;columnid&quot;:&quot;73&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR13b1305fa0322268820154c51cdc3b97" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR13b1305fa0322268820154c51cdc3b97" type="hidden" name="wpv_view_count" value="1773-CATTR13b1305fa0322268820154c51cdc3b97">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Video Interviews</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR17a69a31170bc8bbfd2a2943223fa233" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR17a69a31170bc8bbfd2a2943223fa233" data-viewnumber="1773-CATTR17a69a31170bc8bbfd2a2943223fa233" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR17a69a31170bc8bbfd2a2943223fa233&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR17a69a31170bc8bbfd2a2943223fa233">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/hugh-grant-breaks-down-a-scene-from-heretic/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/17163305/Heretic_Scene_Breakdown-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Hugh Grant Breaks Down a Scene from <em>Heretic</em></p> 
        <p class="noSpacing publication-date">October 18, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/watch-the-moment-ariana-grande-and-cynthia-erivo-got-the-call-to-star-in-wicked/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/08160340/Wicked_Pulls-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Watch: The Moment Ariana Grande and Cynthia Erivo Got the Call to Star in <em>Wicked</em></p> 
        <p class="noSpacing publication-date">October 9, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/lupita-nyongo-explains-how-variety-has-guided-her-career-decisions-on-the-awards-tour-podcast/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/09/25144809/The_Wild_Robot-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Lupita Nyong’o Explains How Variety Has Guided Her Career Decisions on The Awards Tour Podcast</p> 
        <p class="noSpacing publication-date">September 24, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/video-interviews">More Video Interviews &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR17a69a31170bc8bbfd2a2943223fa233" action="/?wpv_view_count=1773-CATTR17a69a31170bc8bbfd2a2943223fa233" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR17a69a31170bc8bbfd2a2943223fa233 js-wpv-form-full" data-viewnumber="1773-CATTR17a69a31170bc8bbfd2a2943223fa233" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoidmlkZW8taW50ZXJ2aWV3cyIsImNvbHVtbiI6IlZpZGVvIEludGVydmlld3MiLCJjb2x1bW5pZCI6IjY3IiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR17a69a31170bc8bbfd2a2943223fa233&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR17a69a31170bc8bbfd2a2943223fa233&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;video-interviews&quot;,&quot;column&quot;:&quot;Video Interviews&quot;,&quot;columnid&quot;:&quot;67&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;video-interviews&quot;,&quot;column&quot;:&quot;Video Interviews&quot;,&quot;columnid&quot;:&quot;67&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR17a69a31170bc8bbfd2a2943223fa233" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR17a69a31170bc8bbfd2a2943223fa233" type="hidden" name="wpv_view_count" value="1773-CATTR17a69a31170bc8bbfd2a2943223fa233">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Weekend Box Office</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" data-viewnumber="1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/weekend-box-office-venom-the-last-dance-bromances-its-way-to-51-million-debut/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/28132918/Venom_the_Last_Dance_BO1-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Weekend Box Office: <em>Venom: The Last Dance</em> Bromances Its Way to $51 Million Debut</p> 
        <p class="noSpacing publication-date">October 28, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/weekend-box-office-smile-2-notches-respectable-debut/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/21135942/Smile_2_BO1-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Weekend Box Office: <em>Smile 2</em> Notches Respectable Debut</p> 
        <p class="noSpacing publication-date">October 21, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/box-office-top-10-movies-of-the-year/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2022/10/26152214/600DeadpoolWolverine5.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Box Office 2024: Top 10 Movies of the Year</p> 
        <p class="noSpacing publication-date">October 21, 2024</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/weekend-box-office">More Weekend Box Office &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" action="/?wpv_view_count=1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0 js-wpv-form-full" data-viewnumber="1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoid2Vla2VuZC1ib3gtb2ZmaWNlIiwiY29sdW1uIjoiV2Vla2VuZCBCb3ggT2ZmaWNlIiwiY29sdW1uaWQiOiIyNyIsImxpbWl0IjoiMyJ9" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;weekend-box-office&quot;,&quot;column&quot;:&quot;Weekend Box Office&quot;,&quot;columnid&quot;:&quot;27&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;weekend-box-office&quot;,&quot;column&quot;:&quot;Weekend Box Office&quot;,&quot;columnid&quot;:&quot;27&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0" type="hidden" name="wpv_view_count" value="1773-CATTRfc3bfa10e7909bbc44d9a65615da2ea0">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>Weekly Ketchup</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTR431dee3e48942ccb20fe37570027900a" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTR431dee3e48942ccb20fe37570027900a" data-viewnumber="1773-CATTR431dee3e48942ccb20fe37570027900a" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTR431dee3e48942ccb20fe37570027900a&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTR431dee3e48942ccb20fe37570027900a">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/disney-is-conjuring-up-hocus-pocus-3-and-more-movie-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/06/09152153/Hocus_Pocus_2_Ketchup-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Disney Is Conjuring Up <em>Hocus Pocus 3</em>, and More Movie News</p> 
        <p class="noSpacing publication-date">June 9, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/dwayne-johnson-to-return-to-fast-and-furious-franchise-for-another-spin-off-and-more-movie-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/06/02160116/Dwayne_Johnson_Fast_Furious_6_Ketchup-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> Dwayne Johnson to Return to <em>Fast and Furious</em> Franchise for Another Spin-Off, and More Movie News</p> 
        <p class="noSpacing publication-date">June 2, 2023</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/john-wick-universe-will-expand-with-a-5th-film-and-spin-offs-and-more-movie-news/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/05/26172636/john-wick-4-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> <em>John Wick</em> Universe Will Expand with a 5th Film and Spin-offs, and More Movie News</p> 
        <p class="noSpacing publication-date">May 26, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/weekly-ketchup">More Weekly Ketchup &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTR431dee3e48942ccb20fe37570027900a" action="/?wpv_view_count=1773-CATTR431dee3e48942ccb20fe37570027900a" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTR431dee3e48942ccb20fe37570027900a js-wpv-form-full" data-viewnumber="1773-CATTR431dee3e48942ccb20fe37570027900a" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoid2Vla2x5LWtldGNodXAiLCJjb2x1bW4iOiJXZWVrbHkgS2V0Y2h1cCIsImNvbHVtbmlkIjoiMzMiLCJsaW1pdCI6IjMifQ==" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTR431dee3e48942ccb20fe37570027900a&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTR431dee3e48942ccb20fe37570027900a&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;weekly-ketchup&quot;,&quot;column&quot;:&quot;Weekly Ketchup&quot;,&quot;columnid&quot;:&quot;33&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;weekly-ketchup&quot;,&quot;column&quot;:&quot;Weekly Ketchup&quot;,&quot;columnid&quot;:&quot;33&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTR431dee3e48942ccb20fe37570027900a" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTR431dee3e48942ccb20fe37570027900a" type="hidden" name="wpv_view_count" value="1773-CATTR431dee3e48942ccb20fe37570027900a">


</form>
</div>

<div class="editorial-panel-heading"> 
	<h1>What to Watch</h1>
    <p> </p>
</div>
<div class="panel panel-rt panel-box article_body">
  	<div class="panel-body">
  		<div id="wpv-view-layout-1773-CATTRe4c4729040211b4966c23debcdacbd94" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-1773-CATTRe4c4729040211b4966c23debcdacbd94" data-viewnumber="1773-CATTRe4c4729040211b4966c23debcdacbd94" data-pagination="{&quot;id&quot;:&quot;1773&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;paged&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:&quot;500&quot;,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;disabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:&quot;2&quot;,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/embedded/res/img/ajax-loader3.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;enabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=1773-CATTRe4c4729040211b4966c23debcdacbd94&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=1773-CATTRe4c4729040211b4966c23debcdacbd94">

	
	
	
		
		<div class="row ">
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/what-to-watch-most-anticipated-black-led-shows-and-movies-of-2024/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/02/02121601/What_to_Watch_Black-Led_Films-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> What to Watch: Most Anticipated Black-Led Shows and Movies of 2024</p> 
        <p class="noSpacing publication-date">February 2, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/what-to-watch-this-week-2023-golden-tomato-award-winners/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/01/11163035/What_to_Watch_GTA-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> What to Watch This Week: 2023 Golden Tomato Award Winners</p> 
        <p class="noSpacing publication-date">January 11, 2024</p>
      </div>
    </div> 
  </a>
</div>
		
		
			<div class="col-sm-8 newsItem col-full-xs">
  <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/what-to-watch-this-week-jury-duty-shin-kamen-rider-and-more-staff-picks/" target="">
    <div class="editorialColumnPic">
      <img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2023/12/28135911/What_to_Watch_Staff_Picks_2023-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    </div>
    <div class="panel bannerCaption">
      <div class="panel-body">
        <p class="noSpacing title"> What to Watch This Week: <em>Jury Duty</em>, <em>Shin Kamen Rider</em>, and More Staff Picks</p> 
        <p class="noSpacing publication-date">December 28, 2023</p>
      </div>
    </div> 
  </a>
</div>
         </div>
		
	
	
	
</div>

      <div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/what-to-watch">More What to Watch &gt;</a></div>
	</div>
   
</div>
<div>
	<form autocomplete="off" name="wpv-filter-1773-CATTRe4c4729040211b4966c23debcdacbd94" action="/?wpv_view_count=1773-CATTRe4c4729040211b4966c23debcdacbd94" method="get" class="wpv-filter-form js-wpv-filter-form js-wpv-filter-form-1773-CATTRe4c4729040211b4966c23debcdacbd94 js-wpv-form-full" data-viewnumber="1773-CATTRe4c4729040211b4966c23debcdacbd94" data-viewid="1773" data-viewhash="eyJuYW1lIjoiQXJ0aWNsZXMiLCJzbHVnIjoid2hhdC10by13YXRjaCIsImNvbHVtbiI6IldoYXQgdG8gV2F0Y2giLCJjb2x1bW5pZCI6IjQyIiwibGltaXQiOiIzIn0=" data-viewwidgetid="0" data-orderby="" data-order="" data-orderbyas="" data-orderbysecond="" data-ordersecond="" data-parametric="{&quot;query&quot;:&quot;normal&quot;,&quot;id&quot;:&quot;1773&quot;,&quot;view_id&quot;:&quot;1773&quot;,&quot;widget_id&quot;:0,&quot;view_hash&quot;:&quot;1773-CATTRe4c4729040211b4966c23debcdacbd94&quot;,&quot;action&quot;:&quot;\/?wpv_view_count=1773-CATTRe4c4729040211b4966c23debcdacbd94&quot;,&quot;sort&quot;:{&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;},&quot;orderby&quot;:&quot;&quot;,&quot;order&quot;:&quot;&quot;,&quot;orderby_as&quot;:&quot;&quot;,&quot;orderby_second&quot;:&quot;&quot;,&quot;order_second&quot;:&quot;&quot;,&quot;ajax_form&quot;:&quot;&quot;,&quot;ajax_results&quot;:&quot;&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;prebefore&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;after&quot;:&quot;&quot;,&quot;attributes&quot;:{&quot;slug&quot;:&quot;what-to-watch&quot;,&quot;column&quot;:&quot;What to Watch&quot;,&quot;columnid&quot;:&quot;42&quot;,&quot;limit&quot;:&quot;3&quot;},&quot;environment&quot;:{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}},&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-attributes="{&quot;slug&quot;:&quot;what-to-watch&quot;,&quot;column&quot;:&quot;What to Watch&quot;,&quot;columnid&quot;:&quot;42&quot;,&quot;limit&quot;:&quot;3&quot;}" data-environment="{&quot;current_post_id&quot;:8282,&quot;parent_post_id&quot;:8282,&quot;parent_term_id&quot;:0,&quot;parent_user_id&quot;:0,&quot;archive&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[]}}"><input type="hidden" class="js-wpv-dps-filter-data js-wpv-filter-data-for-this-form" data-action="/?wpv_view_count=1773-CATTRe4c4729040211b4966c23debcdacbd94" data-page="1" data-ajax="disable" data-effect="fade" data-maxpages="1" data-ajaxprebefore="" data-ajaxbefore="" data-ajaxafter=""><input class="wpv_view_count wpv_view_count-1773-CATTRe4c4729040211b4966c23debcdacbd94" type="hidden" name="wpv_view_count" value="1773-CATTRe4c4729040211b4966c23debcdacbd94">


</form>
</div>

                                            </div>
            <div class="col col-right col-full-xs">
    <div style="padding-bottom:5px;">
        <div id="medrec_top_ad" class="medrec_ad center"><div id="div-gpt-topmulti-53554376" class="mps-slot" data-mps-slot="topmulti" data-mps-loadset="0" data-google-query-id="COL7xejstYkDFaOG6QUdCCwtfw"><script>mps._execAd("topmulti");</script><div id="google_ads_iframe_/2620/rottentomatoes/article/home_1__container__" style="border: 0pt none; width: 300px; height: 0px;"></div></div></div>
         <script>
            var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
            mps._queue.gptloaded.push(function() {
                if (mps.getResponsiveSet() =='0') { //MOBILE
                   mps.cloneAd('#medrec_top_ad','mboxadone');
                } else { //Desktop and Tablet
                    mps.cloneAd('#medrec_top_ad','topmulti');
                }
            });
        </script>
        <div style="margin-top:10px;" class="panel panel-rt panel-box otherNews">
            <h2 class="panel-heading">Movie &amp; TV News</h2>
            <div class="panel-body content_body">
                


<div id="wpv-view-layout-54857" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-54857" data-viewnumber="54857" data-pagination="{&quot;id&quot;:&quot;54857&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;disabled&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/res/img/ajax-loader.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=54857&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=54857">

	
	
<h2>Featured on RT</h2>
		
          <div class="newsItem">
          	 <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/alex-wolff-breaks-down-his-career-from-the-line-to-the-naked-brothers-band/" target="">
    			<div class="editorialColumnPic">
      				<img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/29122023/Alex_Wolff_Awards_Tour-600x314-1.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    			</div>
    			<div class="panel bannerCaption">
      				<div class="panel-body">
        				<p class="noSpacing title"> Alex Wolff Breaks Down His Career, From <em>The Line</em> to <em>The Naked Brothers Band</em></p> 
        				<p class="noSpacing publication-date">October 29, 2024</p>
      				</div>
    			</div> 
  			</a>
          </div>
		
          <div class="newsItem">
          	 <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/saw-movies-ranked/" target="">
    			<div class="editorialColumnPic">
      				<img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2021/05/12135416/600Saw3.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    			</div>
    			<div class="panel bannerCaption">
      				<div class="panel-body">
        				<p class="noSpacing title"> All <em>Saw</em> Movies Ranked</p> 
        				<p class="noSpacing publication-date">October 29, 2024</p>
      				</div>
    			</div> 
  			</a>
          </div>
		
          <div class="newsItem">
          	 <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/guide/best-space-horror-movies/" target="">
    			<div class="editorialColumnPic">
      				<img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/08/15144306/600AlienRomulus4.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    			</div>
    			<div class="panel bannerCaption">
      				<div class="panel-body">
        				<p class="noSpacing title"> 37 Best Space Horror Movies, Ranked by Tomatometer</p> 
        				<p class="noSpacing publication-date">October 29, 2024</p>
      				</div>
    			</div> 
  			</a>
          </div>
		
          <div class="newsItem">
          	 <a class="unstyled articleLink" href="https://editorial.rottentomatoes.com/article/the-5-most-anticipated-movies-of-november-2024/" target="">
    			<div class="editorialColumnPic">
      				<img src="https://prd-rteditorial.s3.us-west-2.amazonaws.com/wp-content/uploads/2024/10/28170010/Most_Anticipated_Movies_Nov2024-Rep.jpg" class="attachment-full wp-post-image" alt="rteditorial_default">
    			</div>
    			<div class="panel bannerCaption">
      				<div class="panel-body">
        				<p class="noSpacing title"> Vote for Your Most Anticipated Movie of November</p> 
        				<p class="noSpacing publication-date">October 28, 2024</p>
      				</div>
    			</div> 
  			</a>
          </div>
		
<div style="text-align: right;" class="panel-link"><a href="https://editorial.rottentomatoes.com/news/">More Featured on RT &gt;</a></div>

 	
	
	
</div>
                


<div id="wpv-view-layout-54858" class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-54858" data-viewnumber="54858" data-pagination="{&quot;id&quot;:&quot;54858&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;disabled&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://editorialstaging.rottentomatoes.com/wp-content/plugins/wp-views/res/img/ajax-loader.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=54858&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}" data-permalink="/?wpv_view_count=54858">

	
	
<h2>Top Headlines</h2>
<ul class="redDot">
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/saw-movies-ranked/">All <em>Saw</em> Movies Ranked</a><br>
      <span class="subtle">– </span>
    </li>
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/best-space-horror-movies/">37 Best Space Horror Movies, Ranked by Tomatometer</a><br>
      <span class="subtle">– </span>
    </li>
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/popular-tv-shows/">25 Most Popular TV Shows Right Now: What to Watch on Streaming</a><br>
      <span class="subtle">– </span>
    </li>
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/popular-movies/">30 Most Popular Movies Right Now: What to Watch In Theaters and Streaming</a><br>
      <span class="subtle">– </span>
    </li>
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/all-joaquin-phoenix-movies-ranked-by-tomatometer/">All Joaquin Phoenix Movies Ranked by Tomatometer</a><br>
      <span class="subtle">– </span>
    </li>
  
    <li class="newslink"> <a href="https://editorial.rottentomatoes.com/guide/best-tv-shows-of-2024/">Best TV Shows of 2024: Best New Series to Watch Now</a><br>
      <span class="subtle">– </span>
    </li>
  
</ul>
<div class="pull-right panel-link"><a href="https://editorial.rottentomatoes.com/publications/">More Top Headlines &gt;</a></div>
	
	
	
</div>
            </div>
        </div>
        <div id="medrec_bottom_ad" class="medrec_ad center"><div id="mps-getad-boxadone" class="mps-wrapper" data-mps-fill-slot="mps-getad-boxadone"></div></div>
        <script>
            var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
            mps._queue.gptloaded.push(function() {
                if (mps.getResponsiveSet() =='0') { //MOBILE
                   mps.cloneAd('#medrec_bottom_ad','mboxadtwo');
                } else { //Desktop and Tablet
                    mps.cloneAd('#medrec_bottom_ad','boxadone');
                }
            });
        </script>
    </div>
</div>
        </div>
        <!-- end content container -->
        <div class="sleaderboard_wrapper hidden-xs">
    <div id="leaderboard_bottom_ad" style="display:block"><div id="div-gpt-bottombanner-53554376" class="mps-slot" data-mps-slot="bottombanner" data-mps-loadset="0"><script>mps._execAd("bottombanner");</script></div></div>
    <script>
      var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
      mps._queue.gptloaded.push(function() {
          if (mps.getResponsiveSet() !='0') { //DESKTOP or TABLET
              mps.cloneAd('#leaderboard_bottom_ad','bottombanner');
          }
      });
    </script>
</div>

<style>#skin_ad { height:0px !important; }</style>
<div id="skin_ad"></div>

<div id="interstitial_ad" style="height:0px;"></div>

<div id="pixel_ad" style="display: none;"><div id="div-gpt-pixel-53554376" class="mps-slot" data-mps-slot="pixel" data-mps-loadset="0" data-google-query-id="COj4x-jstYkDFcWG6QUdPiEmcA"><script>mps._execAd("pixel");</script><div id="google_ads_iframe_/2620/rottentomatoes/article/home_12__container__" style="border: 0pt none;"></div></div></div>
<script>
  var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
  mps._queue.gptloaded.push(function() {
    mps.cloneAd('#pixel_ad','pixel');
  });
</script>

<footer class="footer container">
    <div id="foot" class="hidden-xs footer__content-desktop-block" data-qa="footer:section">
        <div class="footer__content-group">
            <ul class="unstyled footer__links-list">
                <li class="footer__links-list-item"><a id="footer-help" class="unstyled trendingLink" data-qa="footer:link-helpdesk" href="https://www.rottentomatoes.com/help_desk/">Help</a></li>
                <li class="footer__links-list-item"><a id="footer-about" class="unstyled trendingLink" href="https://www.rottentomatoes.com/about/">About Rotten Tomatoes®</a></li>
            </ul>
        </div>
        <div class="footer__content-group">
            <ul class="footer__links-list">
                <li class="footer__links-list-item">
                    <a id="footer-critics" class="unstyled trendingLink" href="https://www.rottentomatoes.com/critics/criteria">Critic Submission</a>
                </li>
                <li class="footer__links-list-item">
                    <a id="footer-licensing" class="unstyled trendingLink" href="https://www.rottentomatoes.com/help_desk/licensing">Licensing</a>
                </li>
                <li class="footer__links-list-item">
                    <a id="footer-advertise" class="unstyled trendingLink" href="https://together.nbcuni.com/advertise/?utm_source=rotten_tomatoes&amp;utm_medium=referral&amp;utm_campaign=property_ad_pages" target="_blank" rel="noopener">
                        Advertise
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="//www.fandango.com/careers" target="_blank" rel="noopener" data-qa="footer:link-careers">Careers</a>
                </li>
            </ul>
        </div>
        <div class="footer__content-group footer__social-block" data-qa="footer:social">
            <p class="h3 footer__content-group-title h3-footer">Follow Us</p>
            <ul class="footer__links-list list-inline">
                <li class="footer__links-list-item">
                    <a href="https://www.facebook.com/rottentomatoes" aria-label="Facebook" target="_blank" rel="noopener" data-qa="footer:social-fb">
                        <rt-icon icon="facebook-official"></rt-icon>
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="https://twitter.com/rottentomatoes" aria-label="Twitter" target="_blank" rel="noopener" data-qa="footer:social-twitter">
                        <rt-icon icon="twitter-x"></rt-icon>
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="https://www.instagram.com/rottentomatoes/" aria-label="Instagram" target="_blank" rel="noopener" data-qa="footer:social-instagram">
                        <rt-icon icon="instagram"></rt-icon>
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="https://www.tiktok.com/@rottentomatoes" aria-label="TikTok" target="_blank" rel="noopener" data-qa="footer:social-tiktok">
                        <rt-icon icon="tiktok"></rt-icon>
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="https://www.youtube.com/user/rottentomatoes" aria-label="YouTube" target="_blank" rel="noopener" data-qa="footer:social-yt">
                        <rt-icon icon="youtube-play"></rt-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__copyright">
        <p class="footer__copyright-legal" data-qa="footer:copyright">Copyright © Fandango. A Division of <a href="https://www.nbcuniversal.com/" target="_blank" rel="noopener" data-qa="footer:link-nbcuniversal">NBCUniversal</a>. All rights reserved. <span class="version" data-qa="footer:version">V3.1</span></p>
        <ul class="footer__links-list list-inline list-inline--separator" data-qa="footer:links-list-privacy">
            <li class="footer__links-list-item">
                <a href="//www.nbcuniversal.com/fandango-privacy-policy" target="_blank" rel="noopener" data-qa="footer:link-privacy-policy">Privacy Policy</a>
            </li>
            <li class="footer__links-list-item">
                <a href="//www.rottentomatoes.com/policies/terms-and-policies" target="_blank" rel="noopener" data-qa="footer:link-terms-policies">Terms and Policies</a>
            </li>
            <li class="footer__links-list-item">
                <img src="https://images.fandango.com/cms/assets/266533e0-7afb-11ed-83f2-4f600722b564--privacyoptions.svg" class="footer__ccpa-icon" loading="lazy" alt="CCPA icon">
                <!-- OneTrust Cookies Settings button start -->
                <a href="#" id="ot-sdk-btn" class="ot-sdk-show-settings footerLinks">Cookie Notice</a>
                <!-- OneTrust Cookies Settings button end -->
            </li>
            <li class="footer__links-list-item">
                <a href="//www.nbcuniversal.com/privacy/california-consumer-privacy-act" target="_blank" rel="noopener" data-qa="footer:california-notice">California Notice</a>
            </li>
            <li class="footer__links-list-item">
                <a href="//www.nbcuniversal.com/privacy/cookies#accordionheader2" rel="noopener" target="_blank" data-qa="footer:link-adChoices">Ad Choices</a>
            </li>
            <li class="footer__links-list-item">
                <a href="https://www.rottentomatoes.com/faq#accessibility" data-qa="footer:link-accessibility">Accessibility</a>
            </li>
        </ul>
        <div id="mobileFoot" class="visible-xs-block">
            <div id="footer_text">
                <div class="white">Copyright © Fandango. A Division of <a href="https://www.nbcuniversal.com/" target="_blank" rel="noopener" data-qa="footer:link-nbcuniversal">NBCUniversal</a>. All rights reserved. </div>
                <div>
                    <a class="footerLinks" href="http://www.fandango.com/terms" rel="noopener" target="_blank">Terms of Service</a>
                    <a class="footerLinks" href="http://www.fandango.com/privacy" rel="noopener" target="_blank">Privacy Policy</a>
                    <a class="footerLinks" href="https://www.fandango.com/donotsellmyinfo" rel="noopener" target="_blank">Do Not Sell My Info</a>
                    <a class="footerLinks" href="https://www.rottentomatoes.com/faq#accessibility">Accessibility</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__content-mobile-block" data-qa="mfooter:section">
        <div class="footer__content-group">
            <p class="footer__copyright-legal" data-qa="mfooter:copyright">Copyright © Fandango. A Division of <a href="https://www.nbcuniversal.com/" target="_blank" rel="noopener" data-qa="footer:link-nbcuniversal">NBCUniversal</a>. All rights reserved. </p>
            <button class="js-cognito-join-newsletter button footer__newsletter-btn" data-qa="mfooter:newsletter-btn">Join Newsletter</button>
            <a href="https://optout.services.fandango.com/rottentomatoes" class="button footer__newsletter-btn hide" data-qa="mfooter:newsletter-btn-signed-in">Join Newsletter</a>
            <ul class="footer__links-list list-inline">
                <li class="footer__links-list-item">
                    <a href="//www.nbcuniversal.com/fandango-privacy-policy" target="_blank" rel="noopener" data-qa="mfooter:link-privacy-policy">
                        Privacy Policy
                    </a>
                </li>
                <li class="footer__links-list-item">
                    <a href="//www.rottentomatoes.com/policies/terms-and-policies" target="_blank" rel="noopener" data-qa="mfooter:link-terms-policies">Terms and Policies</a>
                </li>
                <li class="footer__links-list-item">
                    <img src="https://images.fandango.com/cms/assets/266533e0-7afb-11ed-83f2-4f600722b564--privacyoptions.svg" class="footer__ccpa-icon" loading="lazy" alt="CCPA icon">
                    <!-- OneTrust Cookies Settings button start -->
                    <a href="#" id="ot-sdk-btn" class="ot-sdk-show-settings footerLinks" data-qa="mfooter:link-ccpa">Cookie Notice</a>
                    <!-- OneTrust Cookies Settings button end -->
                </li>
                <li class="footer__links-list-item">
                    <a href="//www.nbcuniversal.com/privacy/california-consumer-privacy-act" target="_blank" rel="noopener" data-qa="mfooter:california-notice">California Notice</a>
                </li>
                <li class="footer__links-list-item">
                    <a href="//www.nbcuniversal.com/privacy/cookies#accordionheader2" target="_blank" rel="noopener" data-qa="mfooter:link-adChoices">Ad Choices</a>
                </li>
                <li class="footer__links-list-item">
                    <a href="https://www.rottentomatoes.com/faq#accessibility" data-qa="mfooter:link-accessibility">Accessibility</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script>
    const elsOneTrustLink = document.querySelectorAll('#ot-sdk-btn');
    [...elsOneTrustLink].forEach(el => el.addEventListener('click', (e) => e.preventDefault()));
</script>


<script type="text/javascript">
const wpvViewHead = document.getElementsByTagName( "head" )[ 0 ];
const wpvViewExtraCss = document.createElement( "style" );
wpvViewExtraCss.textContent = '<!--[if IE 7]><style>.wpv-pagination { *zoom: 1; }</style><![endif]-->';
wpvViewHead.appendChild( wpvViewExtraCss );
</script>
<script type="text/javascript" id="disqus_count-js-extra">
/* <![CDATA[ */
var countVars = {"disqusShortname":"rottentomatoes"};
/* ]]> */
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-content/plugins/disqus-comment-system/public/js/comment_count.js?ver=3.0.22" id="disqus_count-js"></script>
<script type="text/javascript" id="disqus_embed-js-extra">
/* <![CDATA[ */
var embedVars = {"disqusConfig":{"integration":"wordpress 3.0.22"},"disqusIdentifier":"8282 http:\/\/editorial.rottentomatoes.com\/?page_id=8282","disqusShortname":"rottentomatoes","disqusTitle":"Columns","disqusUrl":"https:\/\/editorial.rottentomatoes.com\/","postId":"8282"};
/* ]]> */
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-content/plugins/disqus-comment-system/public/js/comment_embed.js?ver=3.0.22" id="disqus_embed-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/js/bootstrap.js" id="theme-js-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-content/plugins/page-links-to/dist/new-tab.js?ver=3.3.5" id="page-links-to-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/wp-embed.min.js?ver=5.8.1" id="wp-embed-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.12.1" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/jquery/jquery.ui.touch-punch.js?ver=0.2.2" id="jquery-touch-punch-js"></script>
<script type="text/javascript" id="mediaelement-core-js-before">
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.16" id="mediaelement-core-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.8.1" id="mediaelement-migrate-js"></script>
<script type="text/javascript" id="mediaelement-js-extra">
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.8.1" id="wp-mediaelement-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/underscore.min.js?ver=1.13.1" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/wp-util.min.js?ver=5.8.1" id="wp-util-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/backbone.min.js?ver=1.4.0" id="backbone-js"></script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-includes/js/mediaelement/wp-playlist.min.js?ver=5.8.1" id="wp-playlist-js"></script>
<script type="text/javascript" id="views-blocks-frontend-js-extra">
/* <![CDATA[ */
var wpv_pagination_local = {"front_ajaxurl":"https:\/\/editorial.rottentomatoes.com\/wp-admin\/admin-ajax.php","calendar_image":"https:\/\/editorial.rottentomatoes.com\/wp-content\/plugins\/toolset-blocks\/embedded\/res\/img\/calendar.gif","calendar_text":"Select date","datepicker_min_date":null,"datepicker_max_date":null,"datepicker_min_year":"1582","datepicker_max_year":"3000","resize_debounce_tolerance":"100","datepicker_style_url":"https:\/\/editorial.rottentomatoes.com\/wp-content\/plugins\/types\/vendor\/toolset\/toolset-common\/toolset-forms\/css\/wpt-jquery-ui\/jquery-ui-1.11.4.custom.css","wpmlLang":""};
/* ]]> */
</script>
<script type="text/javascript" src="https://editorial.rottentomatoes.com/wp-content/plugins/toolset-blocks/public/js/views-frontend.js?ver=3.6.1" id="views-blocks-frontend-js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.14/require.js" data-main="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/js/rtmain.js?b=c9997d1d"></script>

<script>
    function endsWith(str, suffix) {
      return str.indexOf(suffix, str.length - suffix.length) !== -1;
    }

    //--Ad Unit Loaded (called for each ad loaded)
    var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.adload=mps._queue.adload||[];
    mps._queue.adload.push(function(eo) {
      window.console && console.log('**** AD LOADED: '+eo._mps.adslot);
      if (!eo.isEmpty) {
          console.log('MPS Slot Rendered: ' + eo.slot.getAdUnitPath() + " - " + eo.size + ' Creative Id: ' + eo.creativeId + ' Line Item Id: ' + eo.lineItemId);
          if (eo._mps._slot == "topbanner") {
              var leaderboardHeight = eo.size[1];
              if (leaderboardHeight > 50){
                   jQuery("#top_leaderboard_wrapper").animate({height:(leaderboardHeight+10)},1000);
                    if (jQuery("#imageViewerModal").length > 0) {
                      jQuery(".modalDialog").css("top", leaderboardHeight+10);
                    }
              }
          }

          if (eo._mps._slot == "trendinggraphic") {
            //Hide Trending bar social section
            jQuery("#trending_bar_social").hide();
            //Removing padding for trending bar ad
            jQuery(".trendingBar>.trendingEl").css("padding","0px");
            jQuery("#trending_bar_ad").show();
          }
      }
    });

    var mps=mps||{}; mps._queue=mps._queue||{}; mps._queue.gptloaded=mps._queue.gptloaded||[];
    mps._queue.gptloaded.push(function() {
      mps._setPageTargeting('hub',"8282");
      mps._setPageTargeting('url',"/");
      mps._setPageTargeting('franchiseid',"");
    });
</script>

<script type="text/javascript">
  var _chartbeat_detail = _chartbeat_detail || {};
  /** CONFIGURATION START **/
  _chartbeat_detail.sections ="article";
  _chartbeat_detail.authors = "julio-deoliveira";
  /** CONFIGURATION END **/
</script>

<!--? /* BEGIN critical load order */ ?-->
<script src="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/csr_modules/@rt-components/component/Component.js?b=c9997d1d"></script>
<!--? /* END critical load order */ ?-->
<script src="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/components/MobileSearch/MobileSearch.js?b=c9997d1d"></script>
<script src="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/components/RtIcon/RtIcon.js?b=c9997d1d"></script>
<script src="https://editorial.rottentomatoes.com/wp-content/themes/RottenTomatoes/components/RtscMediaRank/RtscMediaRank.js?b=c9997d1d"></script>

<script>mps.writeFooter && mps.writeFooter();</script>
    

</div></div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: { el: ".swiper-pagination", clickable: true },
            autoplay: { delay: 5000, disableOnInteraction: false },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 20 },
                768: { slidesPerView: 2, spaceBetween: 30 },
                1024: { slidesPerView: 3, spaceBetween: 50 }
            }
        });

        // Modal handling
        document.getElementById("login-btn").addEventListener("click", function() {
            openModal('loginModal');
        });
        
        document.getElementById("sign-up-btn").addEventListener("click", function() {
            openModal('signupModal');
        });

        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target.classList.contains("modal")) {
                event.target.style.display = "none";
            }
        }
    </script>