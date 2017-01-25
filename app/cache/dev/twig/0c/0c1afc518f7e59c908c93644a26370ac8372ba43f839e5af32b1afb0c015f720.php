<?php

/* Sample1Bundle:Default:mrtn.html.twig */
class __TwigTemplate_84ee2cb37f2f44f277457d0bea0d4141c7ab5583975cc7f7d5856b78709c4b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d4473527bb96d65d14331174c0ba63d4395f9894377e97088df9e69bde64e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d4473527bb96d65d14331174c0ba63d4395f9894377e97088df9e69bde64e4->enter($__internal_09d4473527bb96d65d14331174c0ba63d4395f9894377e97088df9e69bde64e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Sample1Bundle:Default:mrtn.html.twig"));

        // line 1
        echo "<html>
<head>
<title>Sample1.</title>
<style type=\"text/css\">
#list table, td, th {
border: 1px #000000 solid;
border-collapse: collapse;
text-align: center;
}
#list th {
background-color: rgba(108, 185, 214, 0.59)
}
</style>    
</head>
<h3>Sample1.</h3>
<hr>
<div>name:";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</div>
<div>age:";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo "</div>
<div id=\"list\">
<p>record:</p>
<table>
<tr><th>col1</th><th>col2</th><th>col3</th></tr>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : $this->getContext($context, "records")));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 24
            echo "<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "col1", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "col2", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "col3", array()), "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</table>
</div>

</html>
";
        
        $__internal_09d4473527bb96d65d14331174c0ba63d4395f9894377e97088df9e69bde64e4->leave($__internal_09d4473527bb96d65d14331174c0ba63d4395f9894377e97088df9e69bde64e4_prof);

    }

    public function getTemplateName()
    {
        return "Sample1Bundle:Default:mrtn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  56 => 24,  52 => 23,  44 => 18,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
<title>Sample1.</title>
<style type=\"text/css\">
#list table, td, th {
border: 1px #000000 solid;
border-collapse: collapse;
text-align: center;
}
#list th {
background-color: rgba(108, 185, 214, 0.59)
}
</style>    
</head>
<h3>Sample1.</h3>
<hr>
<div>name:{{ name }}</div>
<div>age:{{ age }}</div>
<div id=\"list\">
<p>record:</p>
<table>
<tr><th>col1</th><th>col2</th><th>col3</th></tr>
{% for record in records %}
<tr><td>{{ record.col1 }}</td><td>{{ record.col2 }}</td><td>{{ record.col3 }}</td></tr>
{% endfor %}
</table>
</div>

</html>
", "Sample1Bundle:Default:mrtn.html.twig", "/Users/hmurotani/Documents/work/php_sample/symfony2.8/src/Sample1Bundle/Resources/views/Default/mrtn.html.twig");
    }
}
