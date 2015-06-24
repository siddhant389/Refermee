<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_313b757b1557ec4126cebcf1fa6b848ed3a472f036e7bacd813a59cc9881b46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b22e8964c40509d5bb0e9b6d724b1b54657ae32787adee2771d44d24b20822f = $this->env->getExtension("native_profiler");
        $__internal_1b22e8964c40509d5bb0e9b6d724b1b54657ae32787adee2771d44d24b20822f->enter($__internal_1b22e8964c40509d5bb0e9b6d724b1b54657ae32787adee2771d44d24b20822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b22e8964c40509d5bb0e9b6d724b1b54657ae32787adee2771d44d24b20822f->leave($__internal_1b22e8964c40509d5bb0e9b6d724b1b54657ae32787adee2771d44d24b20822f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b066bb26479b44ed701b1948cdae520a69c74ed13f441a2f26e6744b8f6bab4c = $this->env->getExtension("native_profiler");
        $__internal_b066bb26479b44ed701b1948cdae520a69c74ed13f441a2f26e6744b8f6bab4c->enter($__internal_b066bb26479b44ed701b1948cdae520a69c74ed13f441a2f26e6744b8f6bab4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b066bb26479b44ed701b1948cdae520a69c74ed13f441a2f26e6744b8f6bab4c->leave($__internal_b066bb26479b44ed701b1948cdae520a69c74ed13f441a2f26e6744b8f6bab4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0aa71929572474fe7f3aebf6dc3fa45f2a3457920710af48970155cad8e30cd = $this->env->getExtension("native_profiler");
        $__internal_b0aa71929572474fe7f3aebf6dc3fa45f2a3457920710af48970155cad8e30cd->enter($__internal_b0aa71929572474fe7f3aebf6dc3fa45f2a3457920710af48970155cad8e30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0aa71929572474fe7f3aebf6dc3fa45f2a3457920710af48970155cad8e30cd->leave($__internal_b0aa71929572474fe7f3aebf6dc3fa45f2a3457920710af48970155cad8e30cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9f60db3fbf68d603f1087c3e9c5e92545bce7976533c23c0234fda980244d5 = $this->env->getExtension("native_profiler");
        $__internal_8c9f60db3fbf68d603f1087c3e9c5e92545bce7976533c23c0234fda980244d5->enter($__internal_8c9f60db3fbf68d603f1087c3e9c5e92545bce7976533c23c0234fda980244d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8c9f60db3fbf68d603f1087c3e9c5e92545bce7976533c23c0234fda980244d5->leave($__internal_8c9f60db3fbf68d603f1087c3e9c5e92545bce7976533c23c0234fda980244d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
