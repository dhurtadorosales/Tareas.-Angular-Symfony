<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_b6cbb1e2453ec3d8188dfee7e445f63d15bb671e7c5f10d3b206f30a3f9cf819 extends Twig_Template
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
        $__internal_9b50e0452c246f10d6b9b609d6bd7af2d07df01139b85b4526e86919f85287f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b50e0452c246f10d6b9b609d6bd7af2d07df01139b85b4526e86919f85287f7->enter($__internal_9b50e0452c246f10d6b9b609d6bd7af2d07df01139b85b4526e86919f85287f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_217c25111aca2d0f9fd665009a1c173cf85e24b7e9a9ff32a69905dd4f8d14cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217c25111aca2d0f9fd665009a1c173cf85e24b7e9a9ff32a69905dd4f8d14cf->enter($__internal_217c25111aca2d0f9fd665009a1c173cf85e24b7e9a9ff32a69905dd4f8d14cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_9b50e0452c246f10d6b9b609d6bd7af2d07df01139b85b4526e86919f85287f7->leave($__internal_9b50e0452c246f10d6b9b609d6bd7af2d07df01139b85b4526e86919f85287f7_prof);

        
        $__internal_217c25111aca2d0f9fd665009a1c173cf85e24b7e9a9ff32a69905dd4f8d14cf->leave($__internal_217c25111aca2d0f9fd665009a1c173cf85e24b7e9a9ff32a69905dd4f8d14cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/diego/Escritorio/proyecto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
