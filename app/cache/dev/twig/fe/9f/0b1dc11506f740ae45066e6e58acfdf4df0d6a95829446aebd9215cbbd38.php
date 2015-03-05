<?php

/* CagatayBundle:Default:index.html.twig */
class __TwigTemplate_fe9f0b1dc11506f740ae45066e6e58acfdf4df0d6a95829446aebd9215cbbd38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'orta' => array($this, 'block_orta'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_orta($context, array $blocks = array())
    {
        // line 4
        echo "Merhaba dünya
İlk denemedir.
";
    }

    public function getTemplateName()
    {
        return "CagatayBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
