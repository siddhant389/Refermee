<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_0d586b9f50528ba9d2eddf2a3f08b3269b05a64375a8758ea4c48822a5cde8f7 extends Twig_Template
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
        $__internal_b36966261f224a6536a204b22fccd4fa5a3a5432d80b28bf66856644b7e20287 = $this->env->getExtension("native_profiler");
        $__internal_b36966261f224a6536a204b22fccd4fa5a3a5432d80b28bf66856644b7e20287->enter($__internal_b36966261f224a6536a204b22fccd4fa5a3a5432d80b28bf66856644b7e20287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b36966261f224a6536a204b22fccd4fa5a3a5432d80b28bf66856644b7e20287->leave($__internal_b36966261f224a6536a204b22fccd4fa5a3a5432d80b28bf66856644b7e20287_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
