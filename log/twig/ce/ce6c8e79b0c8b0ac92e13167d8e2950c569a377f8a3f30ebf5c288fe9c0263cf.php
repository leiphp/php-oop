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

/* layout.html */
class __TwigTemplate_61dcb24ea517d33392e03b5032a6cb22a74d3edc9bb64a1c4c06b91a2ed2f5b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head lang=\"cn\">
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", []), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
    <link rel=\"stylesheet\" href=\"http://cdn.amazeui.org/amazeui/2.6.2/css/amazeui.min.css\"/>
    <link rel=\"stylesheet\" href=\"http://kphcdr.oss-cn-qingdao.aliyuncs.com/assign/app/css/index.css\"/>
</head>
<body>
<header class=\"am-topbar am-topbar-fixed-top\">
    <div class=\"am-container\">
        <h1 class=\"am-topbar-brand\">
            <a href=\"/\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</a>
        </h1>
        <div>
            <a class=\"am-btn-default\" href=\"/\">所有留言</a>
            <a class=\"am-btn-fefault\" href=\"/index/add\">添加留言</a>
        </div>
        <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only\"
                data-am-collapse=\"{target: '#collapse-head'}\"><span class=\"am-sr-only\">导航切换</span> <span
                class=\"am-icon-bars\"></span></button>

        <div class=\"am-collapse am-topbar-collapse\" id=\"collapse-head\">

            ";
        // line 41
        echo "        </div>
    </div>
</header>
<div class=\"am-g content\">
";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "</div>

<footer class=\"footer\">
    <p>模板来自 AmazeUI</p>
</footer>

<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"http://kphcdr.oss-cn-qingdao.aliyuncs.com/assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"http://cdn.amazeui.org/amazeui/2.6.2/js/amazeui.min.js\"></script>
<div class=\"am-hide\">
    <script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_5945504'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s4.cnzz.com/stat.php%3Fid%3D5945504' type='text/javascript'%3E%3C/script%3E\"));</script>
</div>


</body>
</html>
";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        // line 46
        echo "<!-- content here -->
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 46,  105 => 45,  78 => 48,  76 => 45,  70 => 41,  55 => 20,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head lang=\"cn\">
    <meta charset=\"UTF-8\">
    <title>{{ data.title }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\"
          content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
    <link rel=\"stylesheet\" href=\"http://cdn.amazeui.org/amazeui/2.6.2/css/amazeui.min.css\"/>
    <link rel=\"stylesheet\" href=\"http://kphcdr.oss-cn-qingdao.aliyuncs.com/assign/app/css/index.css\"/>
</head>
<body>
<header class=\"am-topbar am-topbar-fixed-top\">
    <div class=\"am-container\">
        <h1 class=\"am-topbar-brand\">
            <a href=\"/\">{{ title }}</a>
        </h1>
        <div>
            <a class=\"am-btn-default\" href=\"/\">所有留言</a>
            <a class=\"am-btn-fefault\" href=\"/index/add\">添加留言</a>
        </div>
        <button class=\"am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only\"
                data-am-collapse=\"{target: '#collapse-head'}\"><span class=\"am-sr-only\">导航切换</span> <span
                class=\"am-icon-bars\"></span></button>

        <div class=\"am-collapse am-topbar-collapse\" id=\"collapse-head\">

            {#
            <div class=\"am-topbar-right\">
                <button class=\"am-btn am-btn-secondary am-topbar-btn am-btn-sm\">中文</button>
            </div>

            <div class=\"am-topbar-right\">
                <button class=\"am-btn am-btn-primary am-topbar-btn am-btn-sm\">Englist</button>
            </div>
            #}
        </div>
    </div>
</header>
<div class=\"am-g content\">
{% block content %}
<!-- content here -->
{% endblock %}
</div>

<footer class=\"footer\">
    <p>模板来自 AmazeUI</p>
</footer>

<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"http://kphcdr.oss-cn-qingdao.aliyuncs.com/assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"http://cdn.amazeui.org/amazeui/2.6.2/js/amazeui.min.js\"></script>
<div class=\"am-hide\">
    <script type=\"text/javascript\">var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_5945504'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s4.cnzz.com/stat.php%3Fid%3D5945504' type='text/javascript'%3E%3C/script%3E\"));</script>
</div>


</body>
</html>
", "layout.html", "D:\\phpstudy\\WWW\\app\\views\\layout.html");
    }
}
