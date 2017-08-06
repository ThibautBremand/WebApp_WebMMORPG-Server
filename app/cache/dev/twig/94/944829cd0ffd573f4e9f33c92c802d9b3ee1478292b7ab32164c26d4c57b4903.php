<?php

/* form_div_layout.html.twig */
class __TwigTemplate_6303b5f0a19ae285984e81012748f1ca1836874cd49aeb089b2356d31700b28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8baaa0fcb7b2da197e707b6bb2adf8557ad3222c6ecafa6fa8cdffacecaf320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8baaa0fcb7b2da197e707b6bb2adf8557ad3222c6ecafa6fa8cdffacecaf320->enter($__internal_d8baaa0fcb7b2da197e707b6bb2adf8557ad3222c6ecafa6fa8cdffacecaf320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 325
        echo "
";
        // line 328
        $this->displayBlock('form_rows', $context, $blocks);
        // line 334
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 351
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 365
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 379
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_d8baaa0fcb7b2da197e707b6bb2adf8557ad3222c6ecafa6fa8cdffacecaf320->leave($__internal_d8baaa0fcb7b2da197e707b6bb2adf8557ad3222c6ecafa6fa8cdffacecaf320_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_86716a4aeb47823b2325d0c085f18f94cc244aeee3d2d55dd51cdec0f6b4e808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86716a4aeb47823b2325d0c085f18f94cc244aeee3d2d55dd51cdec0f6b4e808->enter($__internal_86716a4aeb47823b2325d0c085f18f94cc244aeee3d2d55dd51cdec0f6b4e808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_86716a4aeb47823b2325d0c085f18f94cc244aeee3d2d55dd51cdec0f6b4e808->leave($__internal_86716a4aeb47823b2325d0c085f18f94cc244aeee3d2d55dd51cdec0f6b4e808_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_21728b493a1893abda9f076651297c523a9b70fb443b6fd9c6a9a630aeb0a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21728b493a1893abda9f076651297c523a9b70fb443b6fd9c6a9a630aeb0a800->enter($__internal_21728b493a1893abda9f076651297c523a9b70fb443b6fd9c6a9a630aeb0a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_21728b493a1893abda9f076651297c523a9b70fb443b6fd9c6a9a630aeb0a800->leave($__internal_21728b493a1893abda9f076651297c523a9b70fb443b6fd9c6a9a630aeb0a800_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9ca54f337149d899a150da9b6730fd982720b1f85eeb080b77c0280c03354046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca54f337149d899a150da9b6730fd982720b1f85eeb080b77c0280c03354046->enter($__internal_9ca54f337149d899a150da9b6730fd982720b1f85eeb080b77c0280c03354046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_9ca54f337149d899a150da9b6730fd982720b1f85eeb080b77c0280c03354046->leave($__internal_9ca54f337149d899a150da9b6730fd982720b1f85eeb080b77c0280c03354046_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_27d7891bf914a866f9c973e9a2d38d879730ec3dff68311889193295c75c2e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d7891bf914a866f9c973e9a2d38d879730ec3dff68311889193295c75c2e2d->enter($__internal_27d7891bf914a866f9c973e9a2d38d879730ec3dff68311889193295c75c2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_27d7891bf914a866f9c973e9a2d38d879730ec3dff68311889193295c75c2e2d->leave($__internal_27d7891bf914a866f9c973e9a2d38d879730ec3dff68311889193295c75c2e2d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_717a2eec4db7813ad9d7948cfbd3408772b93027ce92b5e1b894f79691c9dcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717a2eec4db7813ad9d7948cfbd3408772b93027ce92b5e1b894f79691c9dcf0->enter($__internal_717a2eec4db7813ad9d7948cfbd3408772b93027ce92b5e1b894f79691c9dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_717a2eec4db7813ad9d7948cfbd3408772b93027ce92b5e1b894f79691c9dcf0->leave($__internal_717a2eec4db7813ad9d7948cfbd3408772b93027ce92b5e1b894f79691c9dcf0_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3ed1505900f8aba76db898b0aa704557e0fdcce4c6054e907d7b299e569adb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed1505900f8aba76db898b0aa704557e0fdcce4c6054e907d7b299e569adb2a->enter($__internal_3ed1505900f8aba76db898b0aa704557e0fdcce4c6054e907d7b299e569adb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_3ed1505900f8aba76db898b0aa704557e0fdcce4c6054e907d7b299e569adb2a->leave($__internal_3ed1505900f8aba76db898b0aa704557e0fdcce4c6054e907d7b299e569adb2a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_80d807252bc2fc2d7573e25f79ffeae69d7b96bb7502c4260d929ab25caa339e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d807252bc2fc2d7573e25f79ffeae69d7b96bb7502c4260d929ab25caa339e->enter($__internal_80d807252bc2fc2d7573e25f79ffeae69d7b96bb7502c4260d929ab25caa339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_80d807252bc2fc2d7573e25f79ffeae69d7b96bb7502c4260d929ab25caa339e->leave($__internal_80d807252bc2fc2d7573e25f79ffeae69d7b96bb7502c4260d929ab25caa339e_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_db10c5a0e8db7ad9c573738212b259f8f34cf0ab78d03943181b64615763671b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db10c5a0e8db7ad9c573738212b259f8f34cf0ab78d03943181b64615763671b->enter($__internal_db10c5a0e8db7ad9c573738212b259f8f34cf0ab78d03943181b64615763671b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_db10c5a0e8db7ad9c573738212b259f8f34cf0ab78d03943181b64615763671b->leave($__internal_db10c5a0e8db7ad9c573738212b259f8f34cf0ab78d03943181b64615763671b_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_d8bc88b9e6edfe9e6a1da5466258c85c37efe77679485bc0058eaad0914c1792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bc88b9e6edfe9e6a1da5466258c85c37efe77679485bc0058eaad0914c1792->enter($__internal_d8bc88b9e6edfe9e6a1da5466258c85c37efe77679485bc0058eaad0914c1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d8bc88b9e6edfe9e6a1da5466258c85c37efe77679485bc0058eaad0914c1792->leave($__internal_d8bc88b9e6edfe9e6a1da5466258c85c37efe77679485bc0058eaad0914c1792_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_505cd88e5233df16911bd87be302c02db1ce7a1d12b3393869ca27aa4588b00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505cd88e5233df16911bd87be302c02db1ce7a1d12b3393869ca27aa4588b00b->enter($__internal_505cd88e5233df16911bd87be302c02db1ce7a1d12b3393869ca27aa4588b00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_505cd88e5233df16911bd87be302c02db1ce7a1d12b3393869ca27aa4588b00b->leave($__internal_505cd88e5233df16911bd87be302c02db1ce7a1d12b3393869ca27aa4588b00b_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_18f36ca6f0135eee0e5c835fac82f72d5b890f77379661f3da610fe7f3ff5e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f36ca6f0135eee0e5c835fac82f72d5b890f77379661f3da610fe7f3ff5e8a->enter($__internal_18f36ca6f0135eee0e5c835fac82f72d5b890f77379661f3da610fe7f3ff5e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_18f36ca6f0135eee0e5c835fac82f72d5b890f77379661f3da610fe7f3ff5e8a->leave($__internal_18f36ca6f0135eee0e5c835fac82f72d5b890f77379661f3da610fe7f3ff5e8a_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_edb26cff8fcebaa8a93f1d4338f648fafd0872326f672ceba62401f627f36d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb26cff8fcebaa8a93f1d4338f648fafd0872326f672ceba62401f627f36d29->enter($__internal_edb26cff8fcebaa8a93f1d4338f648fafd0872326f672ceba62401f627f36d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_edb26cff8fcebaa8a93f1d4338f648fafd0872326f672ceba62401f627f36d29->leave($__internal_edb26cff8fcebaa8a93f1d4338f648fafd0872326f672ceba62401f627f36d29_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_97d2a5780f19af187580071bc9ea11d4fdf2ec1200a0458049da8013b654b242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d2a5780f19af187580071bc9ea11d4fdf2ec1200a0458049da8013b654b242->enter($__internal_97d2a5780f19af187580071bc9ea11d4fdf2ec1200a0458049da8013b654b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_97d2a5780f19af187580071bc9ea11d4fdf2ec1200a0458049da8013b654b242->leave($__internal_97d2a5780f19af187580071bc9ea11d4fdf2ec1200a0458049da8013b654b242_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d7fce38dd9d68129a03945d858890d130c478fe3ddacf9c8f52fc69fdf71640c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fce38dd9d68129a03945d858890d130c478fe3ddacf9c8f52fc69fdf71640c->enter($__internal_d7fce38dd9d68129a03945d858890d130c478fe3ddacf9c8f52fc69fdf71640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_d7fce38dd9d68129a03945d858890d130c478fe3ddacf9c8f52fc69fdf71640c->leave($__internal_d7fce38dd9d68129a03945d858890d130c478fe3ddacf9c8f52fc69fdf71640c_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_68d7c45773ff0b1df6bd8f571e63a16ef48c8ffea85740857a5a50e53cbb5e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d7c45773ff0b1df6bd8f571e63a16ef48c8ffea85740857a5a50e53cbb5e75->enter($__internal_68d7c45773ff0b1df6bd8f571e63a16ef48c8ffea85740857a5a50e53cbb5e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 135, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_68d7c45773ff0b1df6bd8f571e63a16ef48c8ffea85740857a5a50e53cbb5e75->leave($__internal_68d7c45773ff0b1df6bd8f571e63a16ef48c8ffea85740857a5a50e53cbb5e75_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_dbdefff33962ffcc122358c0fb63a069f39f455a7c0aa06b145c2fc87976a562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdefff33962ffcc122358c0fb63a069f39f455a7c0aa06b145c2fc87976a562->enter($__internal_dbdefff33962ffcc122358c0fb63a069f39f455a7c0aa06b145c2fc87976a562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 140, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dbdefff33962ffcc122358c0fb63a069f39f455a7c0aa06b145c2fc87976a562->leave($__internal_dbdefff33962ffcc122358c0fb63a069f39f455a7c0aa06b145c2fc87976a562_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f4d59190116833baf9d2c6ae8cd4c5df7ec8c3c5b68f6f5365c97126e28e3bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d59190116833baf9d2c6ae8cd4c5df7ec8c3c5b68f6f5365c97126e28e3bdb->enter($__internal_f4d59190116833baf9d2c6ae8cd4c5df7ec8c3c5b68f6f5365c97126e28e3bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 145, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_f4d59190116833baf9d2c6ae8cd4c5df7ec8c3c5b68f6f5365c97126e28e3bdb->leave($__internal_f4d59190116833baf9d2c6ae8cd4c5df7ec8c3c5b68f6f5365c97126e28e3bdb_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_8e08b9870671c70b66296e810e34481a717277bcc469549a7e840c21af8baf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e08b9870671c70b66296e810e34481a717277bcc469549a7e840c21af8baf47->enter($__internal_8e08b9870671c70b66296e810e34481a717277bcc469549a7e840c21af8baf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 149, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8e08b9870671c70b66296e810e34481a717277bcc469549a7e840c21af8baf47->leave($__internal_8e08b9870671c70b66296e810e34481a717277bcc469549a7e840c21af8baf47_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_5e69bdffdde1695ece1649f5459c3511db0ed52f967fa9084f80beff9bc21384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e69bdffdde1695ece1649f5459c3511db0ed52f967fa9084f80beff9bc21384->enter($__internal_5e69bdffdde1695ece1649f5459c3511db0ed52f967fa9084f80beff9bc21384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 154, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5e69bdffdde1695ece1649f5459c3511db0ed52f967fa9084f80beff9bc21384->leave($__internal_5e69bdffdde1695ece1649f5459c3511db0ed52f967fa9084f80beff9bc21384_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8fd0ff73b60854ebc7c81d18bf74f9641e39f90b3ccc4d2235820a7207e9852b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd0ff73b60854ebc7c81d18bf74f9641e39f90b3ccc4d2235820a7207e9852b->enter($__internal_8fd0ff73b60854ebc7c81d18bf74f9641e39f90b3ccc4d2235820a7207e9852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 159, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_8fd0ff73b60854ebc7c81d18bf74f9641e39f90b3ccc4d2235820a7207e9852b->leave($__internal_8fd0ff73b60854ebc7c81d18bf74f9641e39f90b3ccc4d2235820a7207e9852b_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_711dab40fdacc30c0f978d540cf836ae091456b11ca920f3f613ea1d7825c416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711dab40fdacc30c0f978d540cf836ae091456b11ca920f3f613ea1d7825c416->enter($__internal_711dab40fdacc30c0f978d540cf836ae091456b11ca920f3f613ea1d7825c416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 164, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_711dab40fdacc30c0f978d540cf836ae091456b11ca920f3f613ea1d7825c416->leave($__internal_711dab40fdacc30c0f978d540cf836ae091456b11ca920f3f613ea1d7825c416_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_a47760fd6ad9edb389ca1a81105fbca9827f86ea3fa5357233ec846cac020344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47760fd6ad9edb389ca1a81105fbca9827f86ea3fa5357233ec846cac020344->enter($__internal_a47760fd6ad9edb389ca1a81105fbca9827f86ea3fa5357233ec846cac020344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 169, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a47760fd6ad9edb389ca1a81105fbca9827f86ea3fa5357233ec846cac020344->leave($__internal_a47760fd6ad9edb389ca1a81105fbca9827f86ea3fa5357233ec846cac020344_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_f698bc76650af7e23d7d0932dbc722dae289c12dc26fee3184b2b439225b94c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f698bc76650af7e23d7d0932dbc722dae289c12dc26fee3184b2b439225b94c5->enter($__internal_f698bc76650af7e23d7d0932dbc722dae289c12dc26fee3184b2b439225b94c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 174, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f698bc76650af7e23d7d0932dbc722dae289c12dc26fee3184b2b439225b94c5->leave($__internal_f698bc76650af7e23d7d0932dbc722dae289c12dc26fee3184b2b439225b94c5_prof);

    }

    // line 178
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_fd0ef3b62f6e66e0d25f0868f0f9d66a7c18afb9d22ce0c6cf32440ce3b35555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0ef3b62f6e66e0d25f0868f0f9d66a7c18afb9d22ce0c6cf32440ce3b35555->enter($__internal_fd0ef3b62f6e66e0d25f0868f0f9d66a7c18afb9d22ce0c6cf32440ce3b35555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 179, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fd0ef3b62f6e66e0d25f0868f0f9d66a7c18afb9d22ce0c6cf32440ce3b35555->leave($__internal_fd0ef3b62f6e66e0d25f0868f0f9d66a7c18afb9d22ce0c6cf32440ce3b35555_prof);

    }

    // line 183
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_25df6fc7da486721549488113f64030f890a063c84a862ebe0d570e7e3be3030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df6fc7da486721549488113f64030f890a063c84a862ebe0d570e7e3be3030->enter($__internal_25df6fc7da486721549488113f64030f890a063c84a862ebe0d570e7e3be3030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 184, $this->getSourceContext()); })()))) {
            // line 185
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 185, $this->getSourceContext()); })()))) {
                // line 186
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 186, $this->getSourceContext()); })()), array("%name%" =>                 // line 187
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 187, $this->getSourceContext()); })()), "%id%" =>                 // line 188
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 188, $this->getSourceContext()); })())));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 191, $this->getSourceContext()); })()));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 194, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 194, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 194, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 194, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_25df6fc7da486721549488113f64030f890a063c84a862ebe0d570e7e3be3030->leave($__internal_25df6fc7da486721549488113f64030f890a063c84a862ebe0d570e7e3be3030_prof);

    }

    // line 197
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_5b61d6c5d4d43562b4956193a48ae14ada131e6ff7fd7eb153341c343a64f888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b61d6c5d4d43562b4956193a48ae14ada131e6ff7fd7eb153341c343a64f888->enter($__internal_5b61d6c5d4d43562b4956193a48ae14ada131e6ff7fd7eb153341c343a64f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 198, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_5b61d6c5d4d43562b4956193a48ae14ada131e6ff7fd7eb153341c343a64f888->leave($__internal_5b61d6c5d4d43562b4956193a48ae14ada131e6ff7fd7eb153341c343a64f888_prof);

    }

    // line 202
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_bd80e888cebe62020a8fad38d4ba311aa3d938db8e3c1dc7484039f5e7fcb31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd80e888cebe62020a8fad38d4ba311aa3d938db8e3c1dc7484039f5e7fcb31f->enter($__internal_bd80e888cebe62020a8fad38d4ba311aa3d938db8e3c1dc7484039f5e7fcb31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 203, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_bd80e888cebe62020a8fad38d4ba311aa3d938db8e3c1dc7484039f5e7fcb31f->leave($__internal_bd80e888cebe62020a8fad38d4ba311aa3d938db8e3c1dc7484039f5e7fcb31f_prof);

    }

    // line 209
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8c541d39737099b7bdf785505719153b35e681a9b83e9373124f2126834c15aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c541d39737099b7bdf785505719153b35e681a9b83e9373124f2126834c15aa->enter($__internal_8c541d39737099b7bdf785505719153b35e681a9b83e9373124f2126834c15aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 210, $this->getSourceContext()); })()) === false)) {
            // line 211
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 211, $this->getSourceContext()); })())) {
                // line 212
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 212, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 212, $this->getSourceContext()); })())));
            }
            // line 214
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 214, $this->getSourceContext()); })())) {
                // line 215
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 215, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 217, $this->getSourceContext()); })()))) {
                // line 218
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 218, $this->getSourceContext()); })()))) {
                    // line 219
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 219, $this->getSourceContext()); })()), array("%name%" =>                     // line 220
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 220, $this->getSourceContext()); })()), "%id%" =>                     // line 221
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 221, $this->getSourceContext()); })())));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 224, $this->getSourceContext()); })()));
                }
            }
            // line 227
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 227, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 227, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 227, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 227, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 227, $this->getSourceContext()); })())))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_8c541d39737099b7bdf785505719153b35e681a9b83e9373124f2126834c15aa->leave($__internal_8c541d39737099b7bdf785505719153b35e681a9b83e9373124f2126834c15aa_prof);

    }

    // line 231
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_995ea3823a02a40ee22284e6eb2a0ef2123d22c108ab67008dec6d7e4a5e2781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995ea3823a02a40ee22284e6eb2a0ef2123d22c108ab67008dec6d7e4a5e2781->enter($__internal_995ea3823a02a40ee22284e6eb2a0ef2123d22c108ab67008dec6d7e4a5e2781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_995ea3823a02a40ee22284e6eb2a0ef2123d22c108ab67008dec6d7e4a5e2781->leave($__internal_995ea3823a02a40ee22284e6eb2a0ef2123d22c108ab67008dec6d7e4a5e2781_prof);

    }

    // line 235
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_8af8411fefc9fc79d6f479f120e613e2dca33382eb9bcb9bd09056413b0ac250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af8411fefc9fc79d6f479f120e613e2dca33382eb9bcb9bd09056413b0ac250->enter($__internal_8af8411fefc9fc79d6f479f120e613e2dca33382eb9bcb9bd09056413b0ac250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_8af8411fefc9fc79d6f479f120e613e2dca33382eb9bcb9bd09056413b0ac250->leave($__internal_8af8411fefc9fc79d6f479f120e613e2dca33382eb9bcb9bd09056413b0ac250_prof);

    }

    // line 243
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0f41c8293da9ad6e15caf928e5e118c27a128f7c9a58ca8a23ed1a3b47ca8437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f41c8293da9ad6e15caf928e5e118c27a128f7c9a58ca8a23ed1a3b47ca8437->enter($__internal_0f41c8293da9ad6e15caf928e5e118c27a128f7c9a58ca8a23ed1a3b47ca8437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 245, $this->getSourceContext()); })()), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 246, $this->getSourceContext()); })()), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 247, $this->getSourceContext()); })()), 'widget');
        // line 248
        echo "</div>";
        
        $__internal_0f41c8293da9ad6e15caf928e5e118c27a128f7c9a58ca8a23ed1a3b47ca8437->leave($__internal_0f41c8293da9ad6e15caf928e5e118c27a128f7c9a58ca8a23ed1a3b47ca8437_prof);

    }

    // line 251
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1f122d1890a31fbcd22754abfff24e866041afb4eb6693422e0d1ea82e3a51a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f122d1890a31fbcd22754abfff24e866041afb4eb6693422e0d1ea82e3a51a4->enter($__internal_1f122d1890a31fbcd22754abfff24e866041afb4eb6693422e0d1ea82e3a51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 253, $this->getSourceContext()); })()), 'widget');
        // line 254
        echo "</div>";
        
        $__internal_1f122d1890a31fbcd22754abfff24e866041afb4eb6693422e0d1ea82e3a51a4->leave($__internal_1f122d1890a31fbcd22754abfff24e866041afb4eb6693422e0d1ea82e3a51a4_prof);

    }

    // line 257
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ff44abd1c8c90922b471504eb2538ca2d40103ac0485883b8395685072c20382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff44abd1c8c90922b471504eb2538ca2d40103ac0485883b8395685072c20382->enter($__internal_ff44abd1c8c90922b471504eb2538ca2d40103ac0485883b8395685072c20382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 258, $this->getSourceContext()); })()), 'widget');
        
        $__internal_ff44abd1c8c90922b471504eb2538ca2d40103ac0485883b8395685072c20382->leave($__internal_ff44abd1c8c90922b471504eb2538ca2d40103ac0485883b8395685072c20382_prof);

    }

    // line 263
    public function block_form($context, array $blocks = array())
    {
        $__internal_119938112a08531395880fd4bc8013349624aac2e72bf1e6970a5c09957159c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119938112a08531395880fd4bc8013349624aac2e72bf1e6970a5c09957159c6->enter($__internal_119938112a08531395880fd4bc8013349624aac2e72bf1e6970a5c09957159c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 264, $this->getSourceContext()); })()), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 265, $this->getSourceContext()); })()), 'widget');
        // line 266
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 266, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_119938112a08531395880fd4bc8013349624aac2e72bf1e6970a5c09957159c6->leave($__internal_119938112a08531395880fd4bc8013349624aac2e72bf1e6970a5c09957159c6_prof);

    }

    // line 269
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_fbe6f056701f158f75c28d71e39e8a71f0a40b097074a76a12744c5c30da83a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe6f056701f158f75c28d71e39e8a71f0a40b097074a76a12744c5c30da83a6->enter($__internal_fbe6f056701f158f75c28d71e39e8a71f0a40b097074a76a12744c5c30da83a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 270, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 271, $this->getSourceContext()); })()));
        // line 272
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 272, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 273, $this->getSourceContext()); })());
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 277, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 277, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 277, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 277, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 277, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 277, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 278, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 278, $this->getSourceContext()); })()))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 279, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_fbe6f056701f158f75c28d71e39e8a71f0a40b097074a76a12744c5c30da83a6->leave($__internal_fbe6f056701f158f75c28d71e39e8a71f0a40b097074a76a12744c5c30da83a6_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_495a8fcf0791fa5de49809fdac1db60af6b05b3f7c283786b8a8ea840227823c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495a8fcf0791fa5de49809fdac1db60af6b05b3f7c283786b8a8ea840227823c->enter($__internal_495a8fcf0791fa5de49809fdac1db60af6b05b3f7c283786b8a8ea840227823c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 284, $this->getSourceContext()); })()))) {
            // line 285
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 285, $this->getSourceContext()); })()), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_495a8fcf0791fa5de49809fdac1db60af6b05b3f7c283786b8a8ea840227823c->leave($__internal_495a8fcf0791fa5de49809fdac1db60af6b05b3f7c283786b8a8ea840227823c_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_549cd531ed0d58132315f88a749553f6a6b4359420c7fedb9f9c0d4d3c9b3f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549cd531ed0d58132315f88a749553f6a6b4359420c7fedb9f9c0d4d3c9b3f74->enter($__internal_549cd531ed0d58132315f88a749553f6a6b4359420c7fedb9f9c0d4d3c9b3f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 291, $this->getSourceContext()); })())) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_549cd531ed0d58132315f88a749553f6a6b4359420c7fedb9f9c0d4d3c9b3f74->leave($__internal_549cd531ed0d58132315f88a749553f6a6b4359420c7fedb9f9c0d4d3c9b3f74_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8751ceb7ec185fd3b2b845e68693f81d3c16e4332dbdbc917396340b425e0da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8751ceb7ec185fd3b2b845e68693f81d3c16e4332dbdbc917396340b425e0da6->enter($__internal_8751ceb7ec185fd3b2b845e68693f81d3c16e4332dbdbc917396340b425e0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 295, $this->getSourceContext()); })())) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 297, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_8751ceb7ec185fd3b2b845e68693f81d3c16e4332dbdbc917396340b425e0da6->leave($__internal_8751ceb7ec185fd3b2b845e68693f81d3c16e4332dbdbc917396340b425e0da6_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_f3a35070df0c751fb977fd3ca59859b7bb50a3963dcd80f47e99647b4703a415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a35070df0c751fb977fd3ca59859b7bb50a3963dcd80f47e99647b4703a415->enter($__internal_f3a35070df0c751fb977fd3ca59859b7bb50a3963dcd80f47e99647b4703a415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "
    ";
        // line 311
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), "methodRendered", array()) && (null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), "parent", array())))) {
            // line 312
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 313
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 313, $this->getSourceContext()); })()));
            // line 314
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 314, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 315
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 315, $this->getSourceContext()); })());
            } else {
                // line 317
                $context["form_method"] = "POST";
            }
            // line 320
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 320, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 320, $this->getSourceContext()); })()))) {
                // line 321
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 321, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_f3a35070df0c751fb977fd3ca59859b7bb50a3963dcd80f47e99647b4703a415->leave($__internal_f3a35070df0c751fb977fd3ca59859b7bb50a3963dcd80f47e99647b4703a415_prof);

    }

    // line 328
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_0144ee95d9e26ac519446a1cc194caa6cefcd0bd2d365d4e16209367b89260a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0144ee95d9e26ac519446a1cc194caa6cefcd0bd2d365d4e16209367b89260a7->enter($__internal_0144ee95d9e26ac519446a1cc194caa6cefcd0bd2d365d4e16209367b89260a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 329, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 330
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0144ee95d9e26ac519446a1cc194caa6cefcd0bd2d365d4e16209367b89260a7->leave($__internal_0144ee95d9e26ac519446a1cc194caa6cefcd0bd2d365d4e16209367b89260a7_prof);

    }

    // line 334
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f65093d60adf8c261054f004419edfa117c7920ce208c52fa2fd477bc095f0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65093d60adf8c261054f004419edfa117c7920ce208c52fa2fd477bc095f0be->enter($__internal_f65093d60adf8c261054f004419edfa117c7920ce208c52fa2fd477bc095f0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 335
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 335, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 335, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 336
        if ((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 336, $this->getSourceContext()); })())) {
            echo " readonly=\"readonly\"";
        }
        // line 337
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 337, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 338
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 338, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 339, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 339, $this->getSourceContext()); })()))) {
                // line 340
                echo " ";
                // line 341
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 342
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 342, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 342, $this->getSourceContext()); })())))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 343
$context["attrvalue"] === true)) {
                    // line 344
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 345
$context["attrvalue"] === false)) {
                    // line 346
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f65093d60adf8c261054f004419edfa117c7920ce208c52fa2fd477bc095f0be->leave($__internal_f65093d60adf8c261054f004419edfa117c7920ce208c52fa2fd477bc095f0be_prof);

    }

    // line 351
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_9566086d4c9408714d1cefb9b78653826ab1c52dd8fa67bb42d111f3f45d243a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9566086d4c9408714d1cefb9b78653826ab1c52dd8fa67bb42d111f3f45d243a->enter($__internal_9566086d4c9408714d1cefb9b78653826ab1c52dd8fa67bb42d111f3f45d243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 352
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 353, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 354
            echo " ";
            // line 355
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 356, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 356, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 357
$context["attrvalue"] === true)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 359
$context["attrvalue"] === false)) {
                // line 360
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9566086d4c9408714d1cefb9b78653826ab1c52dd8fa67bb42d111f3f45d243a->leave($__internal_9566086d4c9408714d1cefb9b78653826ab1c52dd8fa67bb42d111f3f45d243a_prof);

    }

    // line 365
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_6c337d2da99b35fc75a29dfdd191dbe1b05198e0bc341efcede5dcf37deb7c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c337d2da99b35fc75a29dfdd191dbe1b05198e0bc341efcede5dcf37deb7c6f->enter($__internal_6c337d2da99b35fc75a29dfdd191dbe1b05198e0bc341efcede5dcf37deb7c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 366
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 366, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 366, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 366, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 367, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 368
            echo " ";
            // line 369
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 370, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 370, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 371
$context["attrvalue"] === true)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 373
$context["attrvalue"] === false)) {
                // line 374
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6c337d2da99b35fc75a29dfdd191dbe1b05198e0bc341efcede5dcf37deb7c6f->leave($__internal_6c337d2da99b35fc75a29dfdd191dbe1b05198e0bc341efcede5dcf37deb7c6f_prof);

    }

    // line 379
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_a0fb2e6a06a82baa12013b96ac0c11f9c9d28939cec9c63ee4ca7a75053851e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fb2e6a06a82baa12013b96ac0c11f9c9d28939cec9c63ee4ca7a75053851e6->enter($__internal_a0fb2e6a06a82baa12013b96ac0c11f9c9d28939cec9c63ee4ca7a75053851e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 380, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 381
            echo " ";
            // line 382
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 383, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 383, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 384
$context["attrvalue"] === true)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 386
$context["attrvalue"] === false)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a0fb2e6a06a82baa12013b96ac0c11f9c9d28939cec9c63ee4ca7a75053851e6->leave($__internal_a0fb2e6a06a82baa12013b96ac0c11f9c9d28939cec9c63ee4ca7a75053851e6_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1319 => 387,  1317 => 386,  1312 => 385,  1310 => 384,  1305 => 383,  1303 => 382,  1301 => 381,  1297 => 380,  1291 => 379,  1276 => 374,  1274 => 373,  1269 => 372,  1267 => 371,  1262 => 370,  1260 => 369,  1258 => 368,  1254 => 367,  1245 => 366,  1239 => 365,  1224 => 360,  1222 => 359,  1217 => 358,  1215 => 357,  1210 => 356,  1208 => 355,  1206 => 354,  1202 => 353,  1196 => 352,  1190 => 351,  1174 => 346,  1172 => 345,  1167 => 344,  1165 => 343,  1160 => 342,  1158 => 341,  1156 => 340,  1151 => 339,  1147 => 338,  1143 => 337,  1139 => 336,  1133 => 335,  1127 => 334,  1116 => 330,  1112 => 329,  1106 => 328,  1095 => 321,  1093 => 320,  1090 => 317,  1087 => 315,  1085 => 314,  1083 => 313,  1081 => 312,  1079 => 311,  1076 => 310,  1069 => 307,  1067 => 306,  1063 => 305,  1057 => 304,  1049 => 300,  1041 => 298,  1037 => 297,  1035 => 296,  1033 => 295,  1027 => 294,  1018 => 291,  1012 => 290,  1005 => 287,  1002 => 285,  1000 => 284,  994 => 283,  984 => 279,  982 => 278,  955 => 277,  952 => 275,  949 => 273,  947 => 272,  945 => 271,  943 => 270,  937 => 269,  930 => 266,  928 => 265,  926 => 264,  920 => 263,  913 => 258,  907 => 257,  900 => 254,  898 => 253,  896 => 252,  890 => 251,  883 => 248,  881 => 247,  879 => 246,  877 => 245,  875 => 244,  869 => 243,  862 => 240,  856 => 235,  845 => 231,  822 => 227,  818 => 224,  815 => 221,  814 => 220,  813 => 219,  811 => 218,  809 => 217,  806 => 215,  804 => 214,  801 => 212,  799 => 211,  797 => 210,  791 => 209,  784 => 204,  782 => 203,  776 => 202,  769 => 199,  767 => 198,  761 => 197,  748 => 194,  744 => 191,  741 => 188,  740 => 187,  739 => 186,  737 => 185,  735 => 184,  729 => 183,  722 => 180,  720 => 179,  714 => 178,  707 => 175,  705 => 174,  699 => 173,  692 => 170,  690 => 169,  684 => 168,  677 => 165,  675 => 164,  669 => 163,  661 => 160,  659 => 159,  653 => 158,  646 => 155,  644 => 154,  638 => 153,  631 => 150,  629 => 149,  623 => 148,  616 => 145,  610 => 144,  603 => 141,  601 => 140,  595 => 139,  588 => 136,  586 => 135,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 379,  153 => 365,  151 => 351,  149 => 334,  147 => 328,  144 => 325,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 269,  132 => 263,  130 => 257,  128 => 251,  126 => 243,  124 => 235,  122 => 231,  120 => 209,  118 => 202,  116 => 197,  114 => 183,  112 => 178,  110 => 173,  108 => 168,  106 => 163,  104 => 158,  102 => 153,  100 => 148,  98 => 144,  96 => 139,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}

    {% if not form.methodRendered and form.parent is null %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "D:\\Git\\os-server\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
