<?php

/* sitemap.xml */
class __TwigTemplate_d0596996d88335964fa5edca17706042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'context' => array($this, 'block_context'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">

  ";
        // line 4
        $this->displayBlock('context', $context, $blocks);
        // line 13
        echo "  ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
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
            // line 14
            echo "    ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            $this->env->loadTemplate("partials/sitemap/sitemap-url.xml")->display(array_merge($context, array("page" => $_child_)));
            // line 15
            echo "    ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "children")) {
                // line 16
                echo "      ";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $this->env->loadTemplate("partials/sitemap/sitemap-children.xml")->display(array_merge($context, array("page" => $_child_)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "  ";
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
        // line 19
        echo "</urlset>";
    }

    // line 4
    public function block_context($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["page"] = $this->env->getExtension('Stacey')->get("/");
        // line 6
        echo "    <url>
        <loc>http://";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "base_url");
        echo "/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "permalink");
        echo "</loc>
        <lastmod>";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "updated");
        echo "</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
  ";
    }

    public function getTemplateName()
    {
        return "sitemap.xml";
    }

    public function isTraitable()
    {
        return false;
    }
}
