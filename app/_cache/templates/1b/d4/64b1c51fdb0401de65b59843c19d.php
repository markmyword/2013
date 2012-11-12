<?php

/* master.html */
class __TwigTemplate_1bd464b1c51fdb0401de65b59843c19d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'nav' => array($this, 'block_nav'),
            'page_content' => array($this, 'block_page_content'),
            'sponsor_list' => array($this, 'block_sponsor_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<!--[if lt IE 7]><html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class=\"no-js lt-ie9\" lang=\"en\"><![endif]-->
<!--[if gt IE 8]><html class=\"no-js\" lang=\"en\"><![endif]-->

<head>

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "\t
        
</head>
\t
<body>
    
        <div id=\"fb-root\"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=304695146304199\";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <header role=\"banner\" class=\"full_width clearfix\">

                <div id=\"inner-header\" class=\"wrap\">

                        <div class=\"col span_2_of_4\">
                                <a class=\"logo-container\" href=\"";
        // line 69
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\" rel=\"nofollow\">
                                    <img src=\"";
        // line 70
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/images/mmw-abs.png\" class=\"logo mmw-abs\" />
                                    <img src=\"";
        // line 71
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/images/mmw-full.png\" class=\"logo mmw-full\" />
                                </a>
                        </div>

                        <nav role=\"navigation\" class=\"col span_2_of_4\">
                            ";
        // line 76
        $this->displayBlock('nav', $context, $blocks);
        // line 83
        echo "                        </nav>

                </div> <!-- end #inner-header -->

        </header> <!-- end header -->

        <div id=\"content\" class=\"wrap clearfix\">
            
            ";
        // line 91
        $this->displayBlock('page_content', $context, $blocks);
        echo "            

            ";
        // line 93
        $this->env->loadTemplate("sidebar.html")->display($context);
        // line 94
        echo "            
            ";
        // line 95
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "title") != "Our Sponsors")) {
            // line 96
            echo "            ";
            $this->displayBlock('sponsor_list', $context, $blocks);
            // line 104
            echo "            ";
        }
        // line 105
        echo "
        </div> <!-- end #content -->

        <footer role=\"contentinfo\" class=\"full_width clearfix\">

                <div id=\"inner-footer\" class=\"wrap\">

                    <p id=\"footer\">&copy; Copyright ";
        // line 112
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo " ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "current_year");
        echo " | <a class=\"twitter\" href=\"http://twitter.com/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "hideout_twitter");
        echo "\">@";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "hideout_twitter");
        echo "</a> | <a class=\"atom-rss\" href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "feed\">RSS</a> | <a href=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "colophon\">Colophon</a></p>
                    <p><em>Content managed by <a href=\"http://www.staceyapp.com\">stacey</a></em></p>

                </div> <!-- end #inner-footer -->

        </footer> <!-- end footer -->
        
\t<!-- Grab Google CDN's jQuery, without a fallback (if Google fails, the world will implode) -->
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

        <!-- scripts are now optimized via Modernizr.load -->\t
        <script src=\"";
        // line 123
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/js/scripts.js\"></script>

        <script type=\"text/javascript\">

\t\t\t\t\tvar _gaq = _gaq || [];
\t\t\t\t\t_gaq.push(['_setAccount', 'UA-32312766-1']);
\t\t\t\t\t_gaq.push(['_trackPageview']);

\t\t\t\t\t(function() {
\t\t\t\t\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t\t\t\t\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t\t\t\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t\t\t\t\t})();

\t\t\t\t</script>
\t\t\t\t
\t\t\t\t<!-- start Mixpanel --><script type=\"text/javascript\">(function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement(\"script\");b.type=\"text/javascript\";b.async=!0;b.src=(\"https:\"===c.location.protocol?\"https:\":\"http:\")+'//cdn.mxpnl.com/libs/mixpanel-2.1.min.js';d=c.getElementsByTagName(\"script\")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(\".\");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;\"undefined\"!==typeof f?
g=a[f]=[]:f=\"mixpanel\";g.people=g.people||[];h=\"disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.identify people.set people.increment\".split(\" \");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1})(document,window.mixpanel||[]);
mixpanel.init(\"b71059a6cc72ada9c784d8a2d3ce5ea5\");</script><!-- end Mixpanel -->

        <!-- below prompts IE6 users to install Google Chrome Frame -->
        <!--[if lt IE 7 ]>
        <script src=\"//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js\"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->

</body>

</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "\t<!-- activate Google Chrome Frame if Installed -->
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

\t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo " &ndash; ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</title>

\t<!-- seo meta stuff -->
\t<meta name=\"description\" content=\"";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "description");
        echo "\">
\t<meta name=\"author\" content=\"Mark My Word\">
\t<meta name=”keywords” content=”";
        // line 19
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "”>

\t<!-- mobile meta -->
\t<meta name=\"HandheldFriendly\" content=\"True\">
\t<meta name=\"MobileOptimized\" content=\"320\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<!-- favicons & icons -->
\t<!-- For iPhone 4 -->
\t<!-- <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"lib/images/h/apple-touch-icon.png\"> -->
\t<!-- For iPad 1-->
\t<!-- <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"lib/images/m/apple-touch-icon.png\"> -->
\t<!-- For the new iPad -->
\t<!-- <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"lib/images/h/apple-touch-icon-144x144-precomposed.png\"> -->
\t<!-- For iPhone 3G, iPod Touch and Android -->
\t<!-- <link rel=\"apple-touch-icon-precomposed\" href=\"lib/images/l/apple-touch-icon-precomposed.png\"> -->
\t<!-- For Nokia -->
\t<!-- <link rel=\"shortcut icon\" href=\"lib/images/l/apple-touch-icon.png\"> -->
\t<!-- For everything else -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 38
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/images/favicon.ico\">
                
        <link rel=\"alternate\" type=\"application/atom+xml\" href=\"@root_path/feed/\">

        <!-- default stylesheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/css/grid.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 44
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/css/custom.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 45
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/fonts/league-gothic/stylesheet.css\">

\t<!-- custom modernizr minified -->
\t<script src=\"";
        // line 48
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "/public/library/js/libs/modernizr.custom.min.js\"></script>
\t";
    }

    // line 76
    public function block_nav($context, array $blocks = array())
    {
        // line 77
        echo "                            <ul id=\"navigation\" class=\"nav\">
                            ";
        // line 78
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 79
            echo "                              <li><a href=\"";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "url");
            echo "\">";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "title");
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
        echo "                            </ul>
                            ";
    }

    // line 91
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 96
    public function block_sponsor_list($context, array $blocks = array())
    {
        // line 97
        echo "            <div class=\"col span_3_of_3 sponsor-list\">

                    <h3 class=\"title\">Sponsor Us</h3>
                    <p>We bet that you would love to sponsor us.<br/>Take a look at the <a href=\"";
        // line 100
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "sponsors\">packages</a>.</p>

            </div>
            ";
    }

    public function getTemplateName()
    {
        return "master.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
