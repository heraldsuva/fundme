<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $this->fetch('title') ?> | <?= __('FundMe') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,200,300' rel='stylesheet' type='text/css'>
    
    <?php echo  $this->Html->css(array('style','bootstrap','jquery-ui','resp','colorbox')) ?>
  
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="img/touch-icon.png" />
    <link rel="image_src" href="img/touch-icon.png" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <style type="text/css">
        input[type="checkbox"], input[type="radio"] {
            display: inline;
        }
        input[type="checkbox"] + label, input[type="radio"] + label{
            display: inline;
            background: none;
            margin-bottom: 15px;
        }
        .zone {
            background-color: #727272;
            filter: alpha(Opacity=70);
        }
        .black {
            background-color: #727272;
            filter: alpha(Opacity=70);
        }
    </style>
    <![endif]-->
    
    <?php echo $this->Html->script('jquery') ?>
    <script>
        /* <![CDATA[ */
        $(window).scroll(function fade() {
            if ($(window).scrollTop() > 400) {
                $("#navtop").css("display", "block");
            }
            else {
                $("#navtop").css("display", "none");
            }
        });
        /* ]]> */

    </script>
  </head>
  <body>	    
  
  <?php echo $this->element('header') ?>
  <?php echo $this->fetch('content') ?>
  <?php echo $this->element('footer') ?>
    

  <script>
      /* <![CDATA[ */
      (function($) {
          $(function() {

              // $('select').selectbox();

              $('#add').click(function(e) {
                  $(this).parents('div.section').append('<br /><br /><select><option>-- Выберите --</option><option>Пункт 1</option><option>Пункт 2</option><option>Пункт 3</option><option>Пункт 4</option><option>Пункт 5</option></select>');
                  $('select').selectbox();
                  e.preventDefault();
              })

              $('#add2').click(function(e) {
                  var options = '';
                  for (i = 1; i <= 5; i++) {
                      options += '<option>Option ' + i + '</option>';
                  }
                  $(this).parents('div.section').find('select').each(function() {
                      $(this).append(options);
                  })
                  $('select').trigger('refresh');
                  e.preventDefault();
              })

              $('#che').click(function(e) {
                  $(this).parents('div.section').find('option:nth-child(5)').attr('selected', true);
                  $('select').trigger('refresh');
                  e.preventDefault();
              })

          })
      })(jQuery)
      /* ]]> */

  </script>
  <script>
      /* <![CDATA[ */
      $(document).ready(function(){
          $("#toggl").click(function(){
              $("#panel").slideToggle("slow");
              $("#home-page-featured").slideToggle("slow");
              $(this).toggleClass('latest_top');
          });
      });
      /* ]]> */
  </script>
  <script>
      /* <![CDATA[ */
      jQuery('#advanced-search').hide();
      jQuery('#advanced-search-button').click(function(event) {
          /* Preventing default link action */
          event.preventDefault();
          jQuery('#default-search').slideToggle('fast');
          jQuery('#advanced-search').slideToggle('fast');
          jQuery(this).toggleClass('expanded');
      });
      /* ]]> */

  </script>
  <script>
      /* <![CDATA[ */
      $(function() {

          var availableTags = [
              "ActionScript",
              "AppleScript",
              "Asp",
              "BASIC",
              "C",
              "C++",
              "Clojure",
              "COBOL",
              "ColdFusion",
              "Erlang",
              "Fortran",
              "Groovy",
              "Haskell",
              "Java",
              "JavaScript",
              "Lisp",
              "Perl",
              "PHP",
              "Python",
              "Ruby",
              "Scala",
              "Scheme"
          ];
          $( "#autocomplete" ).autocomplete({
              source: availableTags
          });

          // Hover states on the static widgets
          $( "#dialog-link, #icons li" ).hover(
                  function() {
                      $( this ).addClass( "ui-state-hover" );
                  },
                  function() {
                      $( this ).removeClass( "ui-state-hover" );
                  }
          );
      });
      /* ]]> */

  </script>
  <script>
      /* <![CDATA[ */
      function scrollToAnchor(aid){
          var aTag = $("a[name='"+ aid +"']");
          $('html,body').animate({scrollTop: aTag.offset().top},'slow');
      }
      $("#link").click(function() {
          scrollToAnchor('id3');
      });
      $("#link_about").click(function() {
          scrollToAnchor('id_about');
      });
      $("#link_reg").click(function() {
          scrollToAnchor('id_reg');
      });
      $("#link_contact").click(function() {
          scrollToAnchor('id_cont');
      });
      $("#link_home").click(function() {
          scrollToAnchor('id_home');
      });
      $("#link_partners").click(function() {
          scrollToAnchor('id_partn');
      });
      $("#link_b").click(function() {
          scrollToAnchor('id3');
      });
      $("#link_about_b").click(function() {
          scrollToAnchor('id_about');
      });
      $("#link_reg_b").click(function() {
          scrollToAnchor('id_reg');
      });
      $("#link_contact_b").click(function() {
          scrollToAnchor('id_cont');
      });
      $("#link_partners_b").click(function() {
          scrollToAnchor('id_partn');
      });
      /* ]]> */


  </script>
  <script>
      /* <![CDATA[ */
      function hexFromRGB(r, g, b) {
          var hex = [
              r.toString( 16 ),
              g.toString( 16 ),
              b.toString( 16 )
          ];
          $.each( hex, function( nr, val ) {
              if ( val.length === 1 ) {
                  hex[ nr ] = "0" + val;
              }
          });
          return hex.join( "" ).toUpperCase();
      }
      function refreshSwatch() {
          var red = $( "#project1" ).slider( "value" ),
                  green = $( "#project2" ).slider( "value" ),
                  blue = $( "#project3" ).slider( "value" ),
                  blues = $( "#project4" ).slider( "value" ),
                  hex = hexFromRGB( red, green, blue);
          $( "#swatch" ).css( "background-color", "#" + hex );

      }
      $(function() {
          $( "#project1, #project2, #project3, #project4, #project5, #project6, #project7, #project8, #project9, #project10, #project11, #project12" ).slider({
              orientation: "horizontal",
              range: "min",
              disabled: true,
              max: 100,
              slide: refreshSwatch,
              change: refreshSwatch
          });

          $.each($('.project_value'), function(k,v){
              var value = 100 * Number($(v).text())/Number($($(v).attr('href')).attr('value'));
              value = Math.floor(value);
              $($(v).attr('href')).slider("value", value);
              $($(v).attr('href')).find(".ui-slider-handle").text(value+'%');
          });

      });
      /* ]]> */
  </script>

  <?php echo $this->Html->script(array('jquery.selectbox.min','jquery.js','bootstrap','jquery-uii','contact','jquery.colorbox','jquery.placeholder','jquery.tweet','jflickrfeed.min','scripts'))?>

  <!--[if IE 8]>
  <script src="js/css3-mediaqueries.js"></script>
  <![endif]-->
  <script>
      /* <![CDATA[ */
      $(document).ready(function(){
          var slider = $(".slider").slider({
              change: function () {
  /*                var value = $(this).slider("option", "value");
                  $(this).find(".ui-slider-handle").text(value+'%');*/
              },
              slide: function () {
  /*                var value = $(this).slider("option", "value");
                  $(this).find(".ui-slider-handle").text(value+"%");*/
              }
          });
  /*        slider.each(function(index){
              var el = slider.get(index);
              var value = $(el).slider("value");
              $(el).slider("value", value);
          });*/
      });
      /* ]]> */
  </script>
  <script>
      /* <![CDATA[ */
      $(document).ready(function(){
          //Examples of how to assign the Colorbox event to elements
          $(".group1").colorbox({rel:'nofollow',scalePhotos:'false'});

      });
      /* ]]> */

  </script>
  <script>
      /* <![CDATA[ */
      $(function() {
          $('input, textarea').placeholder();
      });
      /* ]]> */

  </script>
  <script>
      /* <![CDATA[ */
      $(function(){
          // bind change event to select
          $('#dynamic_select').bind('change', function () {
              var url = $(this).val(); // get selected value
              if (url) { // require a URL
                  window.location = url; // redirect
              }
              return false;
          });
      });
      /* ]]> */
  </script>
</body>
</html>
