<?php

/* partials/feed/assets/feed-images.atom */
class __TwigTemplate_d3c7cbacf88a649efe1db8bc5e921a5e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo "  <img src=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "url");
            echo "\" alt=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($_image_, "name");
            echo ".\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/feed/assets/feed-images.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
