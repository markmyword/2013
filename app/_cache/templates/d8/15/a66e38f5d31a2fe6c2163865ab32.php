<?php

/* speaker.html */
class __TwigTemplate_d815a66e38f5d31a2fe6c2163865ab32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"inner-content\" class=\"col span_3_of_4\">

        <h2 class=\"page_title\">";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h2>
        <a href=\"http://";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "website");
        echo "\" class=\"speaker-thumb\">
            <img src=\"";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($this->getAttribute($_page_, "thumb"), "url");
        echo "\" alt=\"";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "\" width=\"175\" height=\"175\">
        </a>
        <div class=\"speaker speaker-meta section\">
            <div class=\"col span_2_of_3 speaker-bio\">
                ";
        // line 14
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "bio");
        echo "
            </div>
            <div class=\"col span_1_of_3 speaker-info\">
                <dl>
                ";
        // line 18
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "twitter")) {
            // line 19
            echo "                    <dt>Twitter</dt>
                    <dd><a href=\"http://twitter.com/";
            // line 20
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "twitter");
            echo "\">@";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "twitter");
            echo "</a></dd>
                ";
        }
        // line 22
        echo "                ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "website")) {
            // line 23
            echo "                    <dt>Website</dt>
                    <dd><a href=\"http://";
            // line 24
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "website");
            echo "\">";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "website");
            echo "</a></dd>
                ";
        }
        // line 26
        echo "                </dl>
            </div>
        </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "speaker.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
