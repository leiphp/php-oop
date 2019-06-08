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

/* add.html */
class __TwigTemplate_f8ff9829534a6b25718183d514caada7884f75193759673763de100014c99119 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<form action=\"/index/save\" method=\"post\" class=\"am-form\">
    <fieldset>
        <legend>添加留言</legend>
        <div>
            <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入标题\">
        </div>
        <div class=\"am-form-group\">
            <textarea name=\"content\" class=\"\" placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btn am-btn-default\">提交</button></p>
    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  29 => 1,);
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
<form action=\"/index/save\" method=\"post\" class=\"am-form\">
    <fieldset>
        <legend>添加留言</legend>
        <div>
            <input type=\"text\" name=\"title\" class=\"\" placeholder=\"请输入标题\">
        </div>
        <div class=\"am-form-group\">
            <textarea name=\"content\" class=\"\" placeholder=\"请输入content\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btn am-btn-default\">提交</button></p>
    </fieldset>
</form>

{% endblock %}", "add.html", "D:\\phpstudy\\WWW\\app\\views\\add.html");
    }
}
