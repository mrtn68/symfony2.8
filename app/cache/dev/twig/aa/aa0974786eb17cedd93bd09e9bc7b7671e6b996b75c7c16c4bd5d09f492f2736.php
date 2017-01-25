<?php

/* Sample1Bundle:Default:index.html.twig */
class __TwigTemplate_04efec73939e59392d793dc8575888fc7432e0320a9ed4370e98eebc432fa980 extends Twig_Template
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
        $__internal_d072b46654346355eeb1bee523fd470f45f7b2ba1d50043f500d05eb19841ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d072b46654346355eeb1bee523fd470f45f7b2ba1d50043f500d05eb19841ca3->enter($__internal_d072b46654346355eeb1bee523fd470f45f7b2ba1d50043f500d05eb19841ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Sample1Bundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d072b46654346355eeb1bee523fd470f45f7b2ba1d50043f500d05eb19841ca3->leave($__internal_d072b46654346355eeb1bee523fd470f45f7b2ba1d50043f500d05eb19841ca3_prof);

    }

    public function getTemplateName()
    {
        return "Sample1Bundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "Sample1Bundle:Default:index.html.twig", "/Users/hmurotani/Documents/work/php_sample/symfony2.8/src/Sample1Bundle/Resources/views/Default/index.html.twig");
    }
}
