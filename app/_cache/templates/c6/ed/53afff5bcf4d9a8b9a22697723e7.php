<?php

/* sidebar.html */
class __TwigTemplate_c6ed53afff5bcf4d9a8b9a22697723e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"col span_1_of_4 sidebar\">

        <div class=\"fb-like-box\" data-href=\"http://www.facebook.com/markmywordconf\" data-width=\"292\" data-show-faces=\"true\" data-stream=\"true\" data-header=\"true\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function isTraitable()
    {
        return true;
    }
}
