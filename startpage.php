<?php
/*
Template Name: Startpage
*/

get_header(); ?>

<div class="row">
  <div class="span12">
  <h1> </h1>
    </div>
</div>


<div class="row">
  <div class="span4">
    <img src="./wp-content/uploads/2013/03/lodum-logo.png" alt="lodum-logo" width="300" class="alignnone size-full wp-image-228" />
  </div>

  <div class="span8">
    <p class="lead"><strong>LODUM</strong> is the <a href="http://www.uni-muenster.de">University of Münster</a>'s Open Data initiative. We make any public information about the university available in <a href="http://www.w3.org/DesignIssues/LinkedData.html">machine-readable formats</a> for easy access and reuse. By opening and cross-referencing data from different information systems, LODUM provides a one-stop shop for any data about the University of Münster.</p> 

    <p>LODUM is hosted at the <a href="http://ifgi.uni-muenster.de">Institute for Geoinformatics</a>' Semantic Interoperability Lab (<a href="http://musil.uni-muenster.de">MUSIL</a>) and carried out in collaboration with a wide range of <a href="./partners" title="LODUM Partners">partners</a> across the university. The initiative was started on internal funding from the university's innovation funds and is now continued on <a href="./life-project/">external funding</a>.</p> 

    <p>The <a href="./team/">LODUM team</a> has co-initiated both <a href="http://linkeduniversities.org/">LinkedUniversities.org</a> and <a href="http://linkedscience.org">LinkedScience.org</a>.</p>
  </div> 

</div>

<div class="row" style="margin-top: 40px">
  
  <div class="span4">
    <h3>Explore the Data</h3>
    <div id="startmap">
    </div>
  </div>

  


  <div class="span4">
    <h3>News from the <a href="./blog">Blog</a></h3>
  
    <?php
      if (is_page()) {
        $posts = get_posts ("showposts=7");
        if ($posts) { ?>
        <table>
          <?php foreach ($posts as $post):
            setup_postdata($post); ?>
            <tr>
              <td style="width:30%"><small class="muted"><?php the_time('M j, Y') ?></small></td>
              <td><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?></a></td>
            </tr>
          <?php endforeach; ?>
          </table>
        <?php
        }
      }
  ?>
  
  </div>


  <div class="span4">
    <h3>Campusplan App</h3>
    <a href="http://app.uni-muenster.de"><img src="./wp-content/uploads/2013/03/campusplan-iphone.jpg" alt="WWU App" width="100" align="right" style="margin-left: 10px" /></a> The LODUM data also feed the university's Campusplan app with administrative data, navigation instructions, and cafeteria menues. The app is available for <a href="http://itunes.apple.com/de/app/wwu-campus-plan/id474030032?mt=8">iOS</a> and <a href="https://market.android.com/details?id=ifgi.android&amp;feature=search_resu">Android</a>, and as a universal <a href="http://app.uni-muenster.de">webapp</a>. The source code is avilable on <a href="http://github.com/lodum/Campusplan">GitHub</a>.<br />
     <br />

    <a href="http://itunes.apple.com/de/app/wwu-campus-plan/id474030032?mt=8" target="_blank" title="Zum iTunes-App Store"><img src="http://www.uni-muenster.de/imperia/md/images/allgemein/icons/app-store_116x40px.jpg" border="0" alt="iTunes-App Store" width="116" height="40"></a> <a href="https://market.android.com/details?id=ifgi.android&amp;feature=search_resu" target="_blank" title="Zum Android-Marketplace"><img src="http://www.uni-muenster.de/imperia/md/images/allgemein/icons/android_35px.jpg" border="0" alt="Android-Marketplace" width="35" height="40" style="margin-left: 10px"></a>
  </div>
  
</div>

<script>

  var map = L.map('startmap').setView([51.965, 7.613], 15);

  var toner = new L.StamenTileLayer("toner-lite");

  console.log(toner['options']['attribution']);

  toner['options']['attribution'] = 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> | Data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a></a>';

  console.log(toner['options']['attribution']);  

  map.addLayer(toner);

  var polygon = L.polygon([[51.963176,7.6129578],[51.9635396,7.6129822],[51.9635412,7.6129212],[51.9637553,7.6129355],[51.9637537,7.6129995],[51.9641042,7.613023],[51.964094,7.6134247],[51.9641493,7.6134284],[51.9641431,7.6136717],[51.9639081,7.6136559],[51.9639178,7.6132752],[51.963334,7.6132361],[51.9633247,7.6136009],[51.9631337,7.6135881],[51.963138,7.6134199],[51.9631642,7.6134216],[51.963176,7.6129578]],
    {
      color: 'red',
      fillColor: '#f03',
      opacity: 1,
      fillOpacity: 1,
      weight: 1 })
  .addTo(map)
  .bindPopup('The <a href="http://data.uni-muenster.de/context/infrastructure/building/351">Schloss</a> is just one of the resources<br />in our steadily growing dataset. <a href="./data">Learn<br />about our offerings</a> or dive straight into<br />the <a href="./sparql">SPARQL endpoint</a>. ')
  .openPopup();


</script>

<?php get_footer(); ?>