<?php

/* partials/feed/feed-entry.atom */
class __TwigTemplate_2b20099a214db8a6786debafaf054a81 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<entry>
   <title>";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</title>
   <id>tag:";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "domain_name");
        echo ",";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_date_format_filter($this->getAttribute($_page_, "date"), "Y");
        echo ":/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "permalink");
        echo "</id>
   <updated>";
        // line 4
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "updated");
        echo "</updated>
   <link rel=\"alternate\" type=\"text/html\" href=\"http://";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "base_url");
        echo "/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "permalink");
        echo "\" />
   <content type=\"xhtml\" xml:lang=\"en\">
      <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
        // line 8
        $this->env->loadTemplate("partials/feed/assets/feed-images.atom")->display($context);
        // line 9
        echo "          ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
      </div>
   </content>
</entry>";
    }

    public function getTemplateName()
    {
        return "partials/feed/feed-entry.atom";
    }

    public function isTraitable()
    {
        return false;
    }
}
