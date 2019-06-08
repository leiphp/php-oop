<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_b9977f7dfe3f02148050d658bd7b472e7d3a6489ea24a534bf489e9931ba81de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<ur>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "    <li class=\"am-u-sm-3\">
        <div>
            <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", []), "html", null, true);
            echo "</h1>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", []), "html", null, true);
            echo "</p>
            <p><span>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "createtime", []), "Y-m-d H:i:s"), "html", null, true);
            echo "</span></p>
            <a class=\"\" href=\"/index/info/id/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", []), "html", null, true);
            echo "\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", []), "html", null, true);
            echo "\">删除留言</a>
        </div>
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ur>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html\" %}
{% block content %}
<ur>
    {% for val in data %}
    <li class=\"am-u-sm-3\">
        <div>
            <h1>{{val.title}}</h1>
            <p>{{val.content}}</p>
            <p><span>{{val.createtime|date('Y-m-d H:i:s')}}</span></p>
            <a class=\"\" href=\"/index/info/id/{{val.id}}\">查看全文</a>
            <a class=\"\" href=\"/index/del/id/{{val.id}}\">删除留言</a>
        </div>
    </li>

    {% endfor %}
</ur>
{% endblock %}
", "index.html", "D:\\phpstudy\\WWW\\app\\views\\index.html");
    }
}
