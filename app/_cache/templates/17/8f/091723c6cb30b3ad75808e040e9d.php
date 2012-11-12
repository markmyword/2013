<?php

/* partials/sitemap/sitemap-children.xml */
class __TwigTemplate_178f091723c6cb30b3ad75808e040e9d extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $this->env->loadTemplate("partials/sitemap/sitemap-url.xml")->display(array_merge($context, array("page" => $_child_)));
            // line 3
            echo "  ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $this->env->loadTemplate("partials/sitemap/sitemap-children.xml")->display(array_merge($context, array("page" => $_child_)));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/sitemap/sitemap-children.xml";
    }

    public function isTraitable()
    {
        return false;
    }
}
