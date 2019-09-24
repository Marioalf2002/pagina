<?php

/* search.twig */
class __TwigTemplate_6d123644c7540bdf94dd4fb3f2f4e0c0e21bacca75b7b0b25f5337cf5793e038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout_page.twig", "search.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page"] = "files";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GitList";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("search.twig", "search.twig", 8, "709187283")->display(array_merge($context, array("breadcrumbs" => ($context["breadcrumbs"] ?? null))));
        // line 19
        echo "
    ";
        // line 20
        if (($context["results"] ?? null)) {
            // line 21
            echo "    <table class=\"tree\">
        <thead>
            <tr>
                <th width=\"20%\">name</th>
                <th width=\"80%\">match</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 30
                echo "            <tr>
                <td><i class=\"icon-file icon-spaced\"></i> <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blob", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null), "file" => $this->getAttribute($context["result"], "file", array()), "commitishPath" => ((($context["branch"] ?? null) . "/") . $this->getAttribute($context["result"], "file", array())))), "html", null, true);
                echo "#L";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "line", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "file", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "match", array()), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 38
            echo "    <p>No results found.</p>
    ";
        }
        // line 40
        echo "
    <hr />
";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  88 => 38,  83 => 35,  74 => 32,  66 => 31,  63 => 30,  59 => 29,  49 => 21,  47 => 20,  44 => 19,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.twig", "C:\\xampp\\htdocs\\cursoPHP\\curso\\gitlist\\themes\\default\\twig\\search.twig");
    }
}


/* search.twig */
class __TwigTemplate_6d123644c7540bdf94dd4fb3f2f4e0c0e21bacca75b7b0b25f5337cf5793e038_709187283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("breadcrumb.twig", "search.twig", 8);
        $this->blocks = array(
            'extra' => array($this, 'block_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "breadcrumb.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_extra($context, array $blocks = array())
    {
        // line 10
        echo "            <div class=\"pull-right\">
                <div class=\"btn-group download-buttons\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archive", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null), "format" => "zip")), "html", null, true);
        echo "\" class=\"btn btn-mini\" title=\"Download '";
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "' as a ZIP archive\">ZIP</a>
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archive", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null), "format" => "tar")), "html", null, true);
        echo "\" class=\"btn btn-mini\" title=\"Download '";
        echo twig_escape_filter($this->env, ($context["branch"] ?? null), "html", null, true);
        echo "' as a TAR archive\">TAR</a>
                </div>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rss", array("repo" => ($context["repo"] ?? null), "branch" => ($context["branch"] ?? null))), "html", null, true);
        echo "\" class=\"rss-icon\"><i class=\"rss\"></i></a>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 15,  165 => 13,  159 => 12,  155 => 10,  152 => 9,  135 => 8,  92 => 40,  88 => 38,  83 => 35,  74 => 32,  66 => 31,  63 => 30,  59 => 29,  49 => 21,  47 => 20,  44 => 19,  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.twig", "C:\\xampp\\htdocs\\cursoPHP\\curso\\gitlist\\themes\\default\\twig\\search.twig");
    }
}
