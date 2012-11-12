<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
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
        ";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
        
        ";
        // line 11
        $this->env->loadTemplate("partials/includes/speaker-list.html")->display($context);
        // line 12
        echo "
\t";
        // line 13
        $this->env->loadTemplate("partials/assets/pdfs.html")->display($context);
        // line 14
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
