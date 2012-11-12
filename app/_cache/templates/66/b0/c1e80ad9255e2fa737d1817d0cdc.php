<?php

/* partials/includes/speaker-list.html */
class __TwigTemplate_66b0c1e80ad9255e2fa737d1817d0cdc extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "children")) {
            // line 2
            echo "  <ul class=\"speakers\">
    ";
            // line 3
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 4
                echo "      <li class=\"clearfix\">
          <a href=\"";
                // line 5
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\">
              <img src=\"";
                // line 6
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "url");
                echo "\" class=\"speaker-thumb\" alt=\"";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "title");
                echo "\" width=\"175\" height=\"175\">
              <span class=\"name\" href=\"";
                // line 7
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "url");
                echo "\">";
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                echo $this->getAttribute($_child_, "title");
                echo "</span>
          </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/includes/speaker-list.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
