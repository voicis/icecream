<?php

// DEFAULT OPTIONS ARRAY

$parabola_defaults = array(

"parabola_db" => "1.0",

"parabola_side" => "2cSr",
"parabola_sidewidth" => 800,
"parabola_sidebar" => 250,
"parabola_mobile" => "Enable",
"parabola_hcontain" => "",

"parabola_frontpage" => "Enable",
"parabola_frontposts" => "Enable",
"parabola_frontpostscount" => get_option('posts_per_page'),
"parabola_fpsliderwidth" => "1050",
"parabola_fpsliderheight" => "350",
"parabola_fpslideranim" => "fold",
"parabola_fpslidertime" => "750",
"parabola_fpsliderpause" => "5000",
"parabola_fpslidernav" => "Bullets",
"parabola_fpsliderarrows" => "Visible on Hover",

"parabola_slideType" => "Custom Slides",
"parabola_slideCateg" => "",
"parabola_slideNumber" => "5",
"parabola_slideSpecific" => "",

"parabola_sliderimg1" => get_template_directory_uri()."/images/slider/parabola-slide1.jpg",
"parabola_slidertitle1" => "This is your caption's title",
"parabola_slidertext1" => "And this is the text that could accompany it. It is all optional so if you delete it in the Parabola Settings there will be no more caption with the black background. Just like in the next slide.",
"parabola_sliderlink1" => "",
"parabola_sliderimg2" => get_template_directory_uri()."/images/slider/parabola-slide2.jpg",
"parabola_slidertitle2" => "",
"parabola_slidertext2" => "",
"parabola_sliderlink2" => "",
"parabola_sliderimg3" => get_template_directory_uri()."/images/slider/parabola-slide3.jpg",
"parabola_slidertitle3" => "This is yet another caption title",
"parabola_slidertext3" => "There is again content for the slide and you can use <a href='http://www.cryoutcreations.eu' >links</a> and other type of <b>HTML</b> <i>tags</i> to make this more interesting.",
"parabola_sliderlink3" => "",
"parabola_sliderimg4" => "",
"parabola_slidertitle4" => "",
"parabola_slidertext4" => "",
"parabola_sliderlink4" => "",
"parabola_sliderimg5" => "",
"parabola_slidertitle5" => "",
"parabola_slidertext5" => "",
"parabola_sliderlink5" => "",

"parabola_nrcolumns" => "3",
"parabola_colimageheight" => "201",
"parabola_columnreadmore" => "Read more",

"parabola_columnimg1" => get_template_directory_uri()."/images/columns/parabola-column1.jpg",
"parabola_columntitle1" => "Hi there I'm a title!",
"parabola_columntext1" => "You can also have some text here. Just like with the slider, everything is optional (including the title and the link inputs). ",
"parabola_columnlink1" => "http://www.cryoutcreations.eu",
"parabola_columnimg2" => get_template_directory_uri()."/images/columns/parabola-column2.jpg",
"parabola_columntitle2" => "You can use HTML tags",
"parabola_columntext2" => "You can also use <a href='http://www.cryoutcreations.eu'>links</a> as well as most <strong>other</strong> <u>HTML</u> <em>tags</em> and even [shortcodes] inside the columns.",
"parabola_columnlink2" => "http://www.cryoutcreations.eu",
"parabola_columnimg3" => get_template_directory_uri()."/images/columns/parabola-column3.jpg",
"parabola_columntitle3" => "Just another column title",
"parabola_columntext3" => "You can have up to four columns or choose to have no columns at all. It's all up to you and your needs.",
"parabola_columnlink3" => "http://www.cryoutcreations.eu",
"parabola_columnimg4" => "",
"parabola_columntitle4" => "",
"parabola_columntext4" => "",
"parabola_columnlink4" => "",

"parabola_fronttext1" => "",
"parabola_fronttext2" => "",
"parabola_fronttext3" => "And underneath the columns you can have 2 more text boxes that also support <em>HTML tags</em> and [shortcodes]. You can also choose to have just one text area or none. Deleting all
						text inside the appropriate input in the Parabola Settings will remove this whole text area.<br /> As you can see it's really all up to you. You are free to do whatever you like. <br>
						<strong>It's a multi-universe of options and you are only limited by your (and our) imagination! Have fun!</strong> ",
"parabola_fronttext4" => "",

"parabola_fronthideheader" => "",
"parabola_fronthidemenu" => "",
"parabola_fronthidewidget" => "",
"parabola_fronthidefooter" => "",
"parabola_fronthideback" => "",

"parabola_hheight" => "120",
"parabola_hcenter" => 0,
"parabola_hratio" => 0,

"parabola_logoupload" => "",
"parabola_favicon" => "",
"parabola_siteheader" => "Site Title and Description",
"parabola_headermargintop" => "40",
"parabola_headermarginleft" => "0",

"parabola_fontfamily" => 'Open Sans',
"parabola_googlefont" => '',
"parabola_fontsize" => "14px",
"parabola_fonttitle" => 'Bebas Neue',
"parabola_googlefonttitle" => '',
"parabola_headfontsize" => "34px",
"parabola_fontside" => 'Bebas Neue',
"parabola_googlefontside" => '',
"parabola_sidefontsize" => "18px",
"parabola_sitetitlefont" => 'Oswald Stencil',
"parabola_sitetitlegooglefont" => '',
"parabola_sitetitlesize" => "38px",
"parabola_menufont" => 'Open Sans',
"parabola_menugooglefont" => '',
"parabola_menufontsize" => "14px",
"parabola_headingsfont" => 'Yanone Kaffeesatz Regular',
"parabola_headingsgooglefont" => '',
"parabola_headingsfontsize" => '120%',

"parabola_textalign" => "Default",
"parabola_paragraphspace" => "1.0em",
"parabola_parindent" => "0px",
"parabola_headingsindent" => "Disable",
"parabola_lineheight" => "1.7em",
"parabola_wordspace" => "Default",
"parabola_letterspace" => "Default",
"parabola_uppercasetext" => 1,

"parabola_colorschemes" => "Parabola Light",

"parabola_backcolorheader" => "#FFFFFF",
"parabola_backcolormain" => "#F7F7F2",
"parabola_backcolorfooterw" => "#1A1917",
"parabola_backcolorfooter" => "#131211",

"parabola_contentcolortxt" => "#333333",
"parabola_contentcolortxtlight" => "#999999",
"parabola_footercolortxt" => "#AAAAAA",

"parabola_titlecolor" => "#BF4D28",
"parabola_descriptioncolor" => "#444444",
"parabola_descriptionbg" => " ",

"parabola_menucolorbgdefault" => "#333333",
"parabola_menucolorbghover" => "#444444",
"parabola_menucolorbgactive" => "#000000",
"parabola_menucolorshadow" => " ",
"parabola_menucolortxtdefault" => "#EEEEEE",
"parabola_menucolortxthover" => "#E6AC27",
"parabola_menucolortxtactive" => "#FFFFFF",

"parabola_topmenucolortxt" => "#666666",
"parabola_topmenucolortxthover" => "#666666",
"parabola_topmenucolorbg" => " ",
"parabola_topmenucolorbghover" => "#FFFFFF",

"parabola_contentcolorbg" => "#FFFFFF",
"parabola_contentcolortxttitle" => "#444444",
"parabola_contentcolortxttitlehover" => "#000000",
"parabola_contentcolortxtheadings" => "#444444",

"parabola_sidebg" => "#FFFFFF",
"parabola_sidetxt" => "#333333",
"parabola_sidetitlebg" => "#444444",
"parabola_sidetitletxt" => "#FFFFFF",

"parabola_widgetbg" => "#FFFFFF",
"parabola_widgettxt" => "#333333",
"parabola_widgettitlebg" => "#444444",
"parabola_widgettitletxt" => "#FFFFFF",

"parabola_linkcolortext" => "#BF4D28",
"parabola_linkcolorhover" => "#E6AC27",
"parabola_linkcolorside" => "#BF4D28",
"parabola_linkcolorsidehover" => "#E6AC27",
"parabola_linkcolorwooter" => "#BF4D28",
"parabola_linkcolorwooterhover" => "#E6AC27",
"parabola_linkcolorfooter" => "#BF4D28",
"parabola_linkcolorfooterhover" => "#E6AC27",

"parabola_accentcolora" => "#BF4D28",
"parabola_accentcolorb" => "#E6AC27",
"parabola_accentcolorc" => "#EEEEEE",
"parabola_accentcolord" => "#CCCCCC",
"parabola_accentcolore" => "#F7F7F7",

"parabola_fronttitlecolor" => "#412323",
"parabola_fpsliderbordercolor" => "#ffffff",
"parabola_fpslidercaptioncolor" => "#ffffff",
"parabola_fpslidercaptionbg" => "#000000",

"parabola_breadcrumbs" => "Disable",
"parabola_pagination" => "Enable",
"parabola_menualign" => "left",
"parabola_triangles" => 1, // 0,1
"parabola_caption" => "caption-light",
"parabola_image_style" => "parabola-image-five",
"parabola_metaback" => "meta-light",
"parabola_contentlist" => "Show",
"parabola_title" => "Show",
"parabola_pagetitle" => "Show",
"parabola_categtitle" => "Show",
"parabola_tables" => "Disable",
"parabola_backtop" => "Enable",
"parabola_comtext" => "Show",
"parabola_comclosed" => "Hide everywhere",
"parabola_comoff" => "Show",

"parabola_postcomlink" => "Show",
"parabola_postdatetime" => "date",
"parabola_postauthor" => "Show",
"parabola_postcateg" => "Show",
"parabola_posttag" => "Show",
"parabola_postbook" => "Show",
"parabola_postmetas" => "Show",

"parabola_excerpthome" => "Full Post",
"parabola_excerptsticky" => "Full Post",
"parabola_excerptarchive" => "Full Post",
"parabola_excerptwords" => "50",
"parabola_magazinelayout" => "Disable",
"parabola_excerptdots" => " &hellip;",
"parabola_excerptcont" => " Continue reading",
"parabola_excerpttags" => "Disable",

"parabola_fpost" => "Enable",
"parabola_fpostlink" => "1",
"parabola_fauto" => "Enable",
"parabola_falign" => "Left",
"parabola_fwidth" => "250",
"parabola_fheight" => "150",
"parabola_fcrop" => "",
"parabola_fheader" => "Disable",

"parabola_social1" => "YouTube",
"parabola_social2" => "#",
"parabola_social_title1" => "",
"parabola_social_target1" => "1",
"parabola_social3" => "Twitter",
"parabola_social4" => "#",
"parabola_social_title3" => "",
"parabola_social_target3" => "1",
"parabola_social5" => "RSS",
"parabola_social6" => "#",
"parabola_social_title5" => "",
"parabola_social_target5" => "1",
"parabola_social7" => "",
"parabola_social8" => "",
"parabola_social_title7" => "",
"parabola_social_target7" => "1",
"parabola_social9" => "",
"parabola_social10" => "",
"parabola_social_title9" => "",
"parabola_social_target9" => "1",

"parabola_socialsdisplay0" => "1",
"parabola_socialsdisplay1" => "",
"parabola_socialsdisplay2" => "",
"parabola_socialsdisplay3" => "1",
"parabola_socialsdisplay4" => "",
"parabola_socialsdisplay5" => "1",

"parabola_copyright" => "This text can be changed from the Miscellaneous section of the settings page. <br />
<b>Lorem ipsum</b> dolor sit amet, <a href='#'>consectetur adipiscing</a> elit, cras ut imperdiet augue. ",
"parabola_customcss" => "/* Parabola Custom CSS */  ",
"parabola_customjs" => "",
"parabola_iecompat" => 0);

?>