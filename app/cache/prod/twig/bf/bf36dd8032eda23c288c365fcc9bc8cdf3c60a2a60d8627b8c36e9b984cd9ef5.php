<?php

/* OSGameBundle:Chars:new.html.twig */
class __TwigTemplate_2fc552806a08ee2c5e084e3821d58133f0db5e2c3bedc473fc2f2fdbe676df85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle::base.html.twig", "OSGameBundle:Chars:new.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        var imgPath = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/Universal-LPC-spritesheet/"), "html", null, true);
        echo "\";
    </script>
    <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js\"></script>
    <script type=\"text/javascript\" src=\"http://cdnjs.cloudflare.com/ajax/libs/underscore.string/2.3.3/underscore.string.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/jhash-2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/canvas2image.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/base64.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/chargen.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/Universal-LPC-Spritesheet-Character-Generator/chargen.css"), "html", null, true);
        echo "\">
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"container-fluid\">
        <div class=\"well\">
            <div class=\"row\">
                <h1>Chars creation</h1>

                ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <span class=\"col-md-3\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), 'label');
        echo "</span>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    <div class=\"row\">
                        <span class=\"col-md-3\">";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "owner", array()), 'label');
        echo "</span>
                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "owner", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "owner", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    ";
        // line 50
        echo "                </div>
                <input type=\"submit\" />

                ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars");
        echo "\">
                            Back to the list
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class=\"well\">
            <div class=\"row\">
                <div id=\"previewAnimationsBox\"  class=\"col-md-3 col-md-offset-4\">
                    Preview Animation:
                    <select id=\"whichAnim\">
                        <option value=\"spellcast\" data-row=\"0\" data-num=\"4\" data-cycle=\"7\">Spellcast</option>
                        <option value=\"thrust\" data-row=\"4\" data-num=\"4\" data-cycle=\"8\">Thrust</option>
                        <option value=\"walk\" selected data-row=\"8\" data-num=\"4\" data-cycle=\"9\">Walk</option>
                        <option value=\"slash\" data-row=\"12\" data-num=\"4\" data-cycle=\"6\">Slash</option>
                        <option value=\"shoot\" data-row=\"16\" data-num=\"4\" data-cycle=\"13\">Shoot</option>
                        <option value=\"hurt\" data-row=\"20\" data-num=\"1\" data-cycle=\"6\">Hurt</option>
                    </select>
                    <canvas id=\"previewAnimations\" width=\"256\" height=\"100\"></canvas>
                </div>
            </div>
            <div class=\"row\">
                <form id=\"customizeChar\">
                    <section id=\"chooser\">
                        <p class=\"instr\">Select from the character configuration options below.</p>
                        <ul>
                            <li><span class=\"condensed\">Sex</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"sex-male\" name=\"sex\" checked>
                                        <label for=\"sex-male\">Male</label>
                                    </li>
                                    <li>
                                    <li>
                                        <input type=\"radio\" id=\"sex-female\" name=\"sex\">
                                        <label for=\"sex-female\">Female</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Body</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"body-light\" name=\"body\" checked data-file_female=\"body/female/light.png\" data-file_male=\"body/male/light.png\" data-hs_plain_male=\"hair/male/plain/shadows-lightbody.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-lightbody.png\">
                                        <label for=\"body-light\">Light</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-dark\" name=\"body\" data-file_female=\"body/female/dark.png\" data-file_male=\"body/male/dark.png\" data-hs_plain_male=\"hair/male/plain/shadows-darkbody.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-darkbody.png\">
                                        <label for=\"body-dark\">Dark</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-dark2\" name=\"body\" data-file_female=\"body/female/dark2.png\" data-file_male=\"body/male/dark2.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-dark2body.png\">
                                        <label for=\"body-dark2\">Dark 2</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-darkelf\" name=\"body\" data-file_female=\"body/female/darkelf.png\" data-file_male=\"body/male/darkelf.png\" data-hs_plain_male=\"hair/male/plain/shadows-darkelfbody.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-darkelfbody.png\">
                                        <label for=\"body-darkelf\">Dark Elf</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-darkelf2\" name=\"body\" data-file_female=\"body/female/darkelf2.png\" data-file_male=\"body/male/darkelf2.png\" data-hs_plain_male=\"hair/male/plain/shadows-darkelf2body.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-darkelf2body.png\">
                                        <label for=\"body-darkelf2\">Dark Elf 2</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-tanned\" name=\"body\" data-file_female=\"body/female/tanned.png\" data-file_male=\"body/male/tanned.png\" data-hs_plain_male=\"hair/male/plain/shadows-tannedbody.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-tannedbody.png\">
                                        <label for=\"body-tanned\">Tanned</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-tanned2\" name=\"body\" data-file_female=\"body/female/tanned2.png\" data-file_male=\"body/male/tanned2.png\" data-hs_plain_male=\"hair/male/plain/shadows-tanned2body.png\" data-hs_ponytail2_female=\"hair/female/ponytail2/shadows-tanned2body.png\">
                                        <label for=\"body-tanned2\">Tanned 2</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-orc\" name=\"body\" data-file_female=\"body/female/orc.png\" data-file_male=\"body/male/orc.png\">
                                        <label for=\"body-orc\">Orc</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-orc_red\" name=\"body\" data-file_female=\"body/female/red_orc.png\" data-file_male=\"body/male/red_orc.png\">
                                        <label for=\"body-orc_red\">Red Orc</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"body-skeleton\" name=\"body\" data-required=\"sex=male\" data-file=\"body/male/skeleton.png\">
                                        <label for=\"body-skeleton\">Skeleton <small>(Male only)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Eyes</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-none\" name=\"eyes\" checked>
                                        <label for=\"eyes-none\">Default</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-blue\" name=\"eyes\" data-file_female=\"body/female/eyes/blue.png\" data-file_male=\"body/male/eyes/blue.png\">
                                        <label for=\"eyes-blue\">Blue</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-brown\" name=\"eyes\" data-file_female=\"body/female/eyes/brown.png\" data-file_male=\"body/male/eyes/brown.png\">
                                        <label for=\"eyes_brown\">Brown</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-gray\" name=\"eyes\" data-file_female=\"body/female/eyes/gray.png\" data-file_male=\"body/male/eyes/gray.png\">
                                        <label for=\"eyes_gray\">Gray</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-green\" name=\"eyes\" data-file_female=\"body/female/eyes/green.png\" data-file_male=\"body/male/eyes/green.png\">
                                        <label for=\"eyes-green\">Green</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-purple\" name=\"eyes\" data-file_female=\"body/female/eyes/purple.png\" data-file_male=\"body/male/eyes/purple.png\">
                                        <label for=\"eyes-purple\">Purple</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-red\" name=\"eyes\" data-file_female=\"body/female/eyes/red.png\" data-file_male=\"body/male/eyes/red.png\">
                                        <label for=\"eyes-red\">Red</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-yellow\" name=\"eyes\" data-file_female=\"body/female/eyes/yellow.png\" data-file_male=\"body/male/eyes/yellow.png\">
                                        <label for=\"eyes-yellow\">Yellow</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"eyes-orange\" name=\"eyes\" data-file_female=\"body/female/eyes/orange.png\" data-file_male=\"body/male/eyes/orange.png\">
                                        <label for=\"eyes-orange\">Orange</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Nose</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"nose-none\" name=\"nose\" checked>
                                        <label for=\"nose-none\">Default</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"nose-big\" name=\"nose\" data-prohibited=\"body=orc,body=orc_red,body=skeleton\" data-file_male_light=\"body/male/nose/bignose_light.png\" data-file_female_light=\"body/female/nose/bignose_light.png\" data-file_male_dark=\"body/male/nose/bignose_dark.png\" data-file_female_dark=\"body/female/nose/bignose_dark.png\" data-file_male_dark2=\"body/male/nose/bignose_dark2.png\" data-file_female_dark2=\"body/female/nose/bignose_dark2.png\" data-file_male_darkelf=\"body/male/nose/bignose_darkelf.png\" data-file_female_darkelf=\"body/female/nose/bignose_darkelf.png\" data-file_male_darkelf2=\"body/male/nose/bignose_darkelf2.png\" data-file_female_darkelf2=\"body/female/nose/bignose_darkelf2.png\" data-file_male_tanned=\"body/male/nose/bignose_tanned.png\" data-file_female_tanned=\"body/female/nose/bignose_tanned.png\" data-file_male_tanned2=\"body/male/nose/bignose_tanned2.png\" data-file_female_tanned2=\"body/female/nose/bignose_tanned2.png\">
                                        <label for=\"nose-big\">Big Nose</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"nose-button\" name=\"nose\" data-prohibited=\"body=orc,body=orc_red,body=skeleton\" data-file_male_light=\"body/male/nose/buttonnose_light.png\" data-file_female_light=\"body/female/nose/buttonnose_light.png\" data-file_male_dark=\"body/male/nose/buttonnose_dark.png\" data-file_female_dark=\"body/female/nose/buttonnose_dark.png\" data-file_male_dark2=\"body/male/nose/buttonnose_dark2.png\" data-file_female_dark2=\"body/female/nose/buttonnose_dark2.png\" data-file_male_darkelf=\"body/male/nose/buttonnose_darkelf.png\" data-file_female_darkelf=\"body/female/nose/buttonnose_darkelf.png\" data-file_male_darkelf2=\"body/male/nose/buttonnose_darkelf2.png\" data-file_female_darkelf2=\"body/female/nose/buttonnose_darkelf2.png\" data-file_male_tanned=\"body/male/nose/buttonnose_tanned.png\" data-file_female_tanned=\"body/female/nose/buttonnose_tanned.png\" data-file_male_tanned2=\"body/male/nose/buttonnose_tanned2.png\" data-file_female_tanned2=\"body/female/nose/buttonnose_tanned2.png\">
                                        <label for=\"nose-button\">Button Nose</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"nose-straight\" name=\"nose\" data-prohibited=\"body=orc,body=orc_red,body=skeleton\" data-file_male_light=\"body/male/nose/straightnose_light.png\" data-file_female_light=\"body/female/nose/straightnose_light.png\" data-file_male_dark=\"body/male/nose/straightnose_dark.png\" data-file_female_dark=\"body/female/nose/straightnose_dark.png\" data-file_male_dark2=\"body/male/nose/straightnose_dark2.png\" data-file_female_dark2=\"body/female/nose/straightnose_dark2.png\" data-file_male_darkelf=\"body/male/nose/straightnose_darkelf.png\" data-file_female_darkelf=\"body/female/nose/straightnose_darkelf.png\" data-file_male_darkelf2=\"body/male/nose/straightnose_darkelf2.png\" data-file_female_darkelf2=\"body/female/nose/straightnose_darkelf2.png\" data-file_male_tanned=\"body/male/nose/straightnose_tanned.png\" data-file_female_tanned=\"body/female/nose/straightnose_tanned.png\" data-file_male_tanned2=\"body/male/nose/straightnose_tanned2.png\" data-file_female_tanned2=\"body/female/nose/straightnose_tanned2.png\">
                                        <label for=\"nose-straight\">Straight Nose</label>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class=\"condensed\">Legs</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"legs-none\" name=\"legs\" checked>
                                        <label for=\"legs-none\">No Legs</label>
                                    </li>
                                    <li><span class=\"condensed\">Pants</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"legs-pants_magenta\" name=\"legs\" data-file_male=\"legs/pants/male/magenta_pants_male.png\" data-file_female=\"legs/pants/female/magenta_pants_female.png\">
                                                <label for=\"legs-pants_magenta\">Magenta</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"legs-pants_red\" name=\"legs\" data-file_male=\"legs/pants/male/red_pants_male.png\" data-file_female=\"legs/pants/female/red_pants_female.png\">
                                                <label for=\"legs-pants_red\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"legs-pants_teal\" name=\"legs\" data-file_male=\"legs/pants/male/teal_pants_male.png\" data-file_female=\"legs/pants/female/teal_pants_female.png\">
                                                <label for=\"legs-pants_teal\">Teal</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"legs-pants_white\" name=\"legs\" data-file_male=\"legs/pants/male/white_pants_male.png\" data-file_female=\"legs/pants/female/white_pants_female.png\">
                                                <label for=\"legs-pants_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"legs-robe_skirt\" name=\"legs\" data-required=\"sex=male\" data-file=\"legs/skirt/male/robe_skirt_male.png\">
                                        <label for=\"legs-robe_skirt\">Robe Skirt <small>(Male only)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"legs-sara\" name=\"legs\" data-required=\"sex=female\" data-file=\"legs/pants/female/SaraLeggings.png\">
                                        <label for=\"legs-sara\">Sara's Leggings <small>(Female only)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Clothes</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"clothes-none\" name=\"clothes\" checked>
                                        <label for=\"clothes-none\">No Clothes</label>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Long Sleeve Shirt <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-longsleeve_brown\" name=\"clothes\" data-required=\"sex=male\" data-file=\"torso/shirts/longsleeve/male/brown_longsleeve.png\">
                                                <label for=\"clothes-longsleeve_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-longsleeve_teal\" name=\"clothes\" data-required=\"sex=male\" data-file=\"torso/shirts/longsleeve/male/teal_longsleeve.png\">
                                                <label for=\"clothes-longsleeve_teal\">Teal</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-longsleeve_maroon\" name=\"clothes\" data-required=\"sex=male\" data-file=\"torso/shirts/longsleeve/male/maroon_longsleeve.png\">
                                                <label for=\"clothes-longsleeve_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-longsleeve_white\" name=\"clothes\" data-required=\"sex=male\" data-file=\"torso/shirts/longsleeve/male/white_longsleeve.png\">
                                                <label for=\"clothes-longsleeve_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Sleeveless Shirt <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-sleeveless_brown\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/brown_sleeveless.png\">
                                                <label for=\"clothes-sleeveless_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-sleeveless_teal\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/teal_sleeveless.png\">
                                                <label for=\"clothes-sleeveless_teal\">Teal</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-sleeveless_maroon\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/maroon_sleeveless.png\">
                                                <label for=\"clothes-sleeveless_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-sleeveless_white\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/white_sleeveless.png\">
                                                <label for=\"clothes-sleeveless_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Pirate Shirt <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-pirate_brown\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/brown_pirate.png\">
                                                <label for=\"clothes-pirate_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-pirate_teal\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/teal_pirate.png\">
                                                <label for=\"clothes-pirate_teal\">Teal</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-pirate_maroon\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/maroon_pirate.png\">
                                                <label for=\"clothes-pirate_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-pirate_white\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/white_pirate.png\">
                                                <label for=\"clothes-pirate_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Sleeveless Tunic <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-tunic_brown\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/tunics/female/brown_tunic.png\">
                                                <label for=\"clothes-tunic_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-tunic_teal\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/tunics/female/teal_tunic.png\">
                                                <label for=\"clothes-tunic_teal\">Teal</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-tunic_maroon\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/tunics/female/maroon_tunic.png\">
                                                <label for=\"clothes-tunic_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-tunic_white\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/tunics/female/white_tunic.png\">
                                                <label for=\"clothes-tunic_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"clothes-sara\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/shirts/sleeveless/female/SaraShirt.png\">
                                        <label for=\"clothes-sara\">Sara's Shirt <small>(Female only)</small></label>
                                    </li>
                                    <li>
                                            <span class=\"condensed\">
                                                <input type=\"radio\" id=\"clothes-formal\" name=\"clothes\" data-required=\"sex=male\">
                                                <label for=\"clothes-formal\">Formal Wear <small>(Male only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </span>
                                        <ul>
                                            <li>
                                                <input type=\"checkbox\" id=\"formal-shirt\" name=\"formal-shirt\" data-required=\"clothes=formal\" data-file=\"formal_male_no_th-sh/shirt.png\">
                                                <label for=\"formal-shirt\">Shirt</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"formal-pants\" name=\"formal-pants\" data-required=\"clothes=formal\" data-file=\"formal_male_no_th-sh/pants.png\">
                                                <label for=\"formal-pants\">Pants</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"formal-vest\" name=\"formal-vest\" data-required=\"clothes=formal\" data-file=\"formal_male_no_th-sh/vest.png\">
                                                <label for=\"formal-vest\">Vest</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"clothes-dress_sash\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/dress_female/dress_w_sash_female.png\">
                                        <label for=\"clothes-dress_sash\">Dress with Sash <small>(Female only)</small></label>
                                    </li>
                                    <li>
                                            <span class=\"condensed\">
                                                <input type=\"radio\" id=\"clothes-gown\" name=\"clothes\" data-required=\"sex=female\">
                                                <label for=\"clothes-gown\">Gown <small>(Female only)</small></label>
                                            </span>
                                        <ul>
                                            <li>
                                                <input type=\"checkbox\" id=\"gown-underdress\" name=\"gown-underdress\" data-required=\"clothes=gown\" data-file=\"torso/dress_female/underdress.png\">
                                                <label for=\"gown-underdress\">Underdress</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"gown-overskirt\" name=\"gown-overskirt\" data-required=\"clothes=gown\" data-file=\"torso/dress_female/overskirt.png\">
                                                <label for=\"gown-overskirt\">Overskirt</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"gown-blue-vest\" name=\"gown-blue-vest\" data-required=\"clothes=gown\" data-file=\"torso/dress_female/blue_vest.png\">
                                                <label for=\"gown-blue-vest\">Blue Vest</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Robe <small>(Female only)</small> <small>(No Thrust/Shoot)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_black\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/black.png\">
                                                <label for=\"clothes-robe_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_blue\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/blue.png\">
                                                <label for=\"clothes-robe_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_brown\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/brown.png\">
                                                <label for=\"clothes-robe_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_dark_brown\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/dark brown.png\">
                                                <label for=\"clothes-robe_dark_brown\">Dark Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_dark_gray\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/dark gray.png\">
                                                <label for=\"clothes-robe_dark_gray\">Dark Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_light_gray\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/light gray.png\">
                                                <label for=\"clothes-robe_light_gray\">Light Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_forest_green\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/forest green.png\">
                                                <label for=\"clothes-robe_forest_green\">Forest Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_purple\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/purple.png\">
                                                <label for=\"clothes-robe_purple\">Purple</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_red\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/red.png\">
                                                <label for=\"clothes-robe_red\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"clothes-robe_white\" name=\"clothes\" data-required=\"sex=female\" data-file=\"torso/robes_female_no_th-sh/white.png\">
                                                <label for=\"clothes-robe_white\">White</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Mail</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"mail-none\" name=\"mail\" checked>
                                        <label for=\"mail-none\">No Mail</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"mail-chain\" name=\"mail\" data-file_male=\"torso/chain/mail_male.png\" data-file_female=\"torso/chain/mail_female.png\">
                                        <label for=\"mail-chain\">Chain Mail</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Armor</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"armor-none\" name=\"armor\" checked>
                                        <label for=\"armor-none\">No Armor</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"armor-chest_gold\" name=\"armor\" data-file_male=\"torso/gold/chest_male.png\" data-file_female=\"torso/gold/chest_female.png\">
                                        <label for=\"armor-chest_gold\">Gold Chest</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"armor-chest_leather\" name=\"armor\" data-file_male=\"torso/leather/chest_male.png\" data-file_female=\"torso/leather/chest_female.png\">
                                        <label for=\"armor-chest_leather\">Leather Chest</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"armor-chest_plate\" name=\"armor\" data-file_male=\"torso/plate/chest_male.png\" data-file_female=\"torso/plate/chest_female.png\">
                                        <label for=\"armor-chest_plate\">Plate Chest</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Jacket</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"jacket-none\" name=\"jacket\" checked>
                                        <label for=\"jacket-none\">No Jacket</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"jacket-tabard\" name=\"jacket\" data-file_male=\"torso/chain/tabard/jacket_male.png\" data-file_female=\"torso/chain/tabard/jacket_female.png\">
                                        <label for=\"jacket-tabard\">Tabard</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Tie</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"tie-none\" name=\"tie\" checked>
                                        <label for=\"tie-none\">No Tie</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"tie-on\" name=\"tie\" data-required=\"sex=male\" data-file=\"formal_male_no_th-sh/tie.png\">
                                        <label for=\"tie-on\">Tie <small>(Male only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"tie-bow\" name=\"tie\" data-required=\"sex=male\" data-file=\"formal_male_no_th-sh/bowtie.png\">
                                        <label for=\"tie-bow\">Bow Tie <small>(Male only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li><span class=\"condensed\">Arms</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"arms-none\" name=\"arms\" checked>
                                        <label for=\"arms-none\">No Arms</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"arms-gold\" name=\"arms\" data-file_male=\"torso/gold/arms_male.png\" data-file_female=\"torso/gold/arms_female.png\">
                                        <label for=\"arms-gold\">Gold Arms</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"arms-plate\" name=\"arms\" data-file_male=\"torso/plate/arms_male.png\" data-file_female=\"torso/plate/arms_female.png\">
                                        <label for=\"arms-plate\">Plate Arms</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Shoulders</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"shoulders-none\" name=\"shoulders\" checked>
                                        <label for=\"shoulders-none\">No Shoulders</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"shoulders-leather\" name=\"shoulders\" data-file_male=\"torso/leather/shoulders_male.png\" data-file_female=\"torso/leather/shoulders_female.png\">
                                        <label for=\"shoulders-leather\">Leather Shoulders</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Spikes</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"spikes-none\" name=\"spikes\" checked>
                                        <label for=\"spikes-none\">No Spikes</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"spikes-gold\" name=\"spikes\" data-required=\"sex=male\" data-file=\"torso/gold/spikes_male.png\">
                                        <label for=\"spikes-gold\">Gold Spikes <small>(Male only)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Bracers</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"bracers-none\" name=\"bracers\" checked>
                                        <label for=\"bracers-none\">No Bracers</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"bracers-cloth\" name=\"bracers\" data-required=\"sex=female\" data-file=\"hands/bracers/female/cloth_bracers_female.png\">
                                        <label for=\"bracers-cloth\">Cloth Bracers <small>(Female only)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"bracers-leather\" name=\"bracers\" data-file_male=\"hands/bracers/male/leather_bracers_male.png\" data-file_female=\"hands/bracers/female/leather_bracers_female.png\">
                                        <label for=\"bracers-leather\">Leather Bracers</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Greaves</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"greaves-none\" name=\"greaves\" checked>
                                        <label for=\"greaves-none\">No Greaves</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"greaves-metal\" name=\"greaves\" data-file_male=\"legs/armor/male/metal_pants_male.png\" data-file_female=\"legs/armor/female/metal_pants_female.png\">
                                        <label for=\"greaves-metal\">Metal Greaves</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"greaves-golden\" name=\"greaves\" data-file_male=\"legs/armor/male/golden_greaves_male.png\" data-file_female=\"legs/armor/female/golden_greaves_female.png\">
                                        <label for=\"greaves-golden\">Golden Greaves</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Gloves</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"gloves-none\" name=\"gloves\" checked>
                                        <label for=\"gloves-none\">No Gloves</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"gloves-metal\" name=\"gloves\" data-file_male=\"hands/gloves/male/metal_gloves_male.png\" data-file_female=\"hands/gloves/female/metal_gloves_female.png\">
                                        <label for=\"gloves-metal\">Metal Gloves</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"gloves-golden\" name=\"gloves\" data-file_male=\"hands/gloves/male/golden_gloves_male.png\" data-file_female=\"hands/gloves/female/golden_gloves_female.png\">
                                        <label for=\"gloves-golden\">Golden Gloves</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Shoes</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"shoes-none\" name=\"shoes\" checked>
                                        <label for=\"shoes-none\">No Shoes</label>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Shoes</span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-black\" name=\"shoes\" data-file_male=\"feet/shoes/male/black_shoes_male.png\" data-file_female=\"feet/shoes/female/black_shoes_female.png\">
                                                <label for=\"shoes_black\">Black Shoes</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-brown\" name=\"shoes\" data-file_male=\"feet/shoes/male/brown_shoes_male.png\" data-file_female=\"feet/shoes/female/brown_shoes_female.png\">
                                                <label for=\"shoes_brown\">Brown Shoes</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-maroon\" name=\"shoes\" data-file_male=\"feet/shoes/male/maroon_shoes_male.png\" data-file_female=\"feet/shoes/female/maroon_shoes_female.png\">
                                                <label for=\"shoes-maroon\">Maroon Shoes</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-sara\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/shoes/female/SaraShoes.png\">
                                                <label for=\"shoes-sara\">Sara's Shoes <small>(Female only)</small></label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"shoes-boots_metal\" name=\"shoes\" data-file_male=\"feet/armor/male/metal_boots_male.png\" data-file_female=\"feet/armor/female/metal_boots_female.png\">
                                        <label for=\"shoes-boots_metal\">Metal Boots</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"shoes-boots_golden\" name=\"shoes\" data-file_male=\"feet/armor/male/golden_boots_male.png\" data-file_female=\"feet/armor/female/golden_boots_female.png\">
                                        <label for=\"shoes-boots_golden\">Golden Boots</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"shoes-ghillies\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/ghillies_female_no_th-sh.png\">
                                        <label for=\"shoes-ghillies\">Ghillies <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Slippers <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-slippers_black\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/slippers_female/black.png\">
                                                <label for=\"shoes-slippers_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-slippers_brown\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/slippers_female/brown.png\">
                                                <label for=\"shoes-slippers_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-slippers_gray\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/slippers_female/gray.png\">
                                                <label for=\"shoes-slippers_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"shoes-slippers_white\" name=\"shoes\" data-required=\"sex=female\" data-file=\"feet/slippers_female/white.png\">
                                                <label for=\"shoes-slippers_white\">White Slippers</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Belts</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"belt-none\" name=\"belt\" checked>
                                        <label for=\"belt-none\">No Belts</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"belt-leather\" name=\"belt\" data-file_male=\"belt/leather/male/leather_male.png\" data-file_female=\"belt/leather/female/leather_female.png\">
                                        <label for=\"belt-leather\">Leather Belt</label>
                                    </li>
                                    <li><span class=\"condensed\">Cloth Belt</span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"belt-cloth_white\" name=\"belt\" data-file_male=\"belt/cloth/male/white_cloth_male.png\" data-file_female=\"belt/cloth/female/white_cloth_female.png\">
                                                <label for=\"belt-cloth_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-cloth_teal\" name=\"belt\" data-required=\"sex=female\" data-file_female=\"belt/cloth/female/teal2_cloth_female.png\">
                                                <label for=\"belt-cloth_teal\">Teal <small>(Female only)</small></label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Metal Belt <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"belt-black\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/cloth/female/black_female_no_th-sh.png\">
                                                <label for=\"belt_black\">Black Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-brown\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/cloth/female/brown_female_no_th-sh.png\">
                                                <label for=\"belt_brown\">Brown Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-bronze\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/metal/female/bronze_female_no_th-sh.png\">
                                                <label for=\"belt-bronze\">Bronze Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-iron\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/metal/female/iron_female_no_th-sh.png\">
                                                <label for=\"belt-iron\">Iron Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-silver\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/metal/female/silver_female_no_th-sh.png\">
                                                <label for=\"belt-silver\">Silver Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"belt-gold\" name=\"belt\" data-required=\"sex=female\" data-file=\"belt/metal/female/gold_female_no_th-sh.png\">
                                                <label for=\"belt-gold\">Gold Belt <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Buckles</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"buckle-none\" name=\"buckle\" checked>
                                        <label for=\"buckle-none\">No Buckle</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"buckle-bronze\" name=\"buckle\" data-required=\"sex=female\" data-file=\"belt/buckles_female_no_th-sh/bronze.png\">
                                        <label for=\"buckle-bronze\">Bronze Buckle <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"buckle-iron\" name=\"buckle\" data-required=\"sex=female\" data-file=\"belt/buckles_female_no_th-sh/iron.png\">
                                        <label for=\"buckle-iron\">Iron Buckle <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"buckle-silver\" name=\"buckle\" data-required=\"sex=female\" data-file=\"belt/buckles_female_no_th-sh/silver.png\">
                                        <label for=\"buckle-silver\">Silver Buckle <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"buckle-gold\" name=\"buckle\" data-required=\"sex=female\" data-file=\"belt/buckles_female_no_th-sh/gold.png\">
                                        <label for=\"buckle-gold\">Gold Buckle <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Necklaces</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"necklace-none\" name=\"necklace\" checked>
                                        <label for=\"necklace-none\">No Necklace</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"necklace-bronze\" name=\"necklace\" data-required=\"sex=female\" data-file=\"accessories/necklaces_female_ no_th-sh/bronze.png\">
                                        <label for=\"necklace-bronze\">Bronze Necklace <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"necklace-iron\" name=\"necklace\" data-required=\"sex=female\" data-file=\"accessories/necklaces_female_ no_th-sh/iron.png\">
                                        <label for=\"necklace-iron\">Iron Necklace <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"necklace-silver\" name=\"necklace\" data-required=\"sex=female\" data-file=\"accessories/necklaces_female_ no_th-sh/silver.png\">
                                        <label for=\"necklace-silver\">Silver Necklace <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"necklace-gold\" name=\"necklace\" data-required=\"sex=female\" data-file=\"accessories/necklaces_female_ no_th-sh/gold.png\">
                                        <label for=\"necklace-gold\">Gold Necklace <small>(Female only)</small> <small>(No Thrust/Shoot)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Bracelet</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"bracelet-none\" name=\"bracelet\" checked>
                                        <label for=\"bracelet-none\">No Bracelet</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"bracelet-on\" name=\"bracelet\" data-file=\"hands/bracelets/bracelet.png\">
                                        <label for=\"bracelet-on\">Bracelet</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Cape</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"cape-none\" name=\"cape\" checked>
                                        <label for=\"cape-none\">No Cape</label>
                                    </li>
                                    <li><span class=\"condensed\">Solid Cape <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"cape-black\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_black.png\" data-file_behind=\"behind_body/cape/normal/female/cape_black.png\">
                                                <label for=\"cape_black\">Black</small></label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-blue\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_blue.png\" data-file_behind=\"behind_body/cape/normal/female/cape_blue.png\">
                                                <label for=\"cape-blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape_brown\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_brown.png\" data-file_behind=\"behind_body/cape/normal/female/cape_brown.png\">
                                                <label for=\"cape_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape_gray\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_gray.png\" data-file_behind=\"behind_body/cape/normal/female/cape_gray.png\">
                                                <label for=\"cape_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-green\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_green.png\" data-file_behind=\"behind_body/cape/normal/female/cape_green.png\">
                                                <label for=\"cape-green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-lavender\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_lavender.png\" data-file_behind=\"behind_body/cape/normal/female/cape_lavender.png\">
                                                <label for=\"cape-lavender\">Lavender</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-maroon\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_maroon.png\" data-file_behind=\"behind_body/cape/normal/female/cape_maroon.png\">
                                                <label for=\"cape-maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-pink\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_pink.png\" data-file_behind=\"behind_body/cape/normal/female/cape_pink.png\">
                                                <label for=\"cape-pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-red\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_red.png\" data-file_behind=\"behind_body/cape/normal/female/cape_red.png\">
                                                <label for=\"cape-white\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-white\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_white.png\" data-file_behind=\"behind_body/cape/normal/female/cape_white.png\">
                                                <label for=\"cape-white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-yellow\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/normal/female/cape_yellow.png\" data-file_behind=\"behind_body/cape/normal/female/cape_yellow.png\">
                                                <label for=\"cape-yellow\">Yellow</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"cape-trimmed_white_blue\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/trimmed/female/trimcape_whiteblue.png\" data-file_behind=\"behind_body/cape/normal/female/cape_white.png\">
                                        <label for=\"cape-trimmed_white_blue\">White Cape With Blue Trim <small>(Female only)</small></label>
                                    </li>
                                    <li><span class=\"condensed\">Tattered Cape <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_black\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_black.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_black.png\">
                                                <label for=\"cape-tattered_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_blue\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_blue.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_blue.png\">
                                                <label for=\"cape-tattered_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_brown\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_brown.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_brown.png\">
                                                <label for=\"cape-tattered_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_gray\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_gray.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_gray.png\">
                                                <label for=\"cape-tattered_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_green\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_green.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_green.png\">
                                                <label for=\"cape-tattered_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_maroon\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_maroon.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_maroon.png\">
                                                <label for=\"cape-tattered_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_pink\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_pink.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_pink.png\">
                                                <label for=\"cape-tattered_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_red\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_red.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_red.png\">
                                                <label for=\"cape-tattered_pink\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_white\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_white.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_white.png\">
                                                <label for=\"cape-tattered_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"cape-tattered_yellow\" name=\"cape\" data-required=\"sex=female\" data-file=\"torso/back/cape/tattered/female/tattercape_yellow.png\" data-file_behind=\"behind_body/cape/tattered/female/tattercape_yellow.png\">
                                                <label for=\"cape-tattered_yellow\">Yellow</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Cape Clip / Tie</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"capeacc-none\" name=\"capeacc\" checked>
                                        <label for=\"capeacc-none\">No Cape Clip / Tie</label>
                                    </li>
                                    <li><span class=\"condensed\">Cape Clip <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_black\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_black.png\">
                                                <label for=\"capeacc-clip_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_blue\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_blue.png\">
                                                <label for=\"capeacc-clip_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_brown\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_brown.png\">
                                                <label for=\"capeacc-clip_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_gray\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_gray.png\">
                                                <label for=\"capeacc-clip_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_green\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_green.png\">
                                                <label for=\"capeacc-clip_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_lavender\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_lavender.png\">
                                                <label for=\"capeacc-clip_lavender\">Lavender</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_maroon\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_maroon.png\">
                                                <label for=\"capeacc-clip_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_pink\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_pink.png\">
                                                <label for=\"capeacc-clip_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_red\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_red.png\">
                                                <label for=\"capeacc-clip_pink\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_white\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_white.png\">
                                                <label for=\"capeacc-clip_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-clip_yellow\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capeclip/female/capeclip_yellow.png\">
                                                <label for=\"capeacc-clip_yellow\">Yellow</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Cape Tie <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_black\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_black.png\">
                                                <label for=\"capeacc-tie_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_blue\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_blue.png\">
                                                <label for=\"capeacc-tie_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_brown\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_brown.png\">
                                                <label for=\"capeacc-tie_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_gray\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_gray.png\">
                                                <label for=\"capeacc-tie_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_green\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_green.png\">
                                                <label for=\"capeacc-tie_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_lavender\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_lavender.png\">
                                                <label for=\"capeacc-tie_lavender\">Lavender</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_maroon\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_maroon.png\">
                                                <label for=\"capeacc-tie_maroon\">Maroon</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_pink\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_pink.png\">
                                                <label for=\"capeacc-tie_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_red\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_red.png\">
                                                <label for=\"capeacc-tie_pink\">Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_white\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_white.png\">
                                                <label for=\"capeacc-tie_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"capeacc-tie_yellow\" name=\"capeacc\" data-required=\"sex=female\" data-file=\"accessories/neck/capetie/female/capetie_yellow.png\">
                                                <label for=\"capeacc-tie_yellow\">Yellow</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Weapon</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-none\" name=\"weapon\" checked>
                                        <label for=\"weapon-none\">No Weapon</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-bow\" name=\"weapon\" data-file=\"weapons/right hand/either/bow.png\" data-prohibited=\"body=skeleton\" data-preview_row=\"17\">
                                        <label for=\"weapon-bow\">Bow</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-bow_skeleton\" name=\"weapon\" data-file=\"weapons/right hand/either/bow_skeleton.png\" data-required=\"body=skeleton\" data-preview_row=\"17\">
                                        <label for=\"weapon-bow_skeleton\">Bow <small>(for Skeleton)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-dagger\" name=\"weapon\" data-file_male=\"weapons/right hand/male/dagger_male.png\" data-file_female=\"weapons/right hand/female/dagger_female.png\">
                                        <label for=\"weapon-dagger\">Dagger</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-greatbow\" name=\"weapon\" data-file=\"weapons/right hand/either/greatbow.png\" data-preview_row=\"17\">
                                        <label for=\"weapon-greatbow\">Great Bow</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-recurvebow\" name=\"weapon\" data-file=\"weapons/right hand/either/recurvebow.png\" data-preview_row=\"17\">
                                        <label for=\"weapon-recurvebow\">Recurve Bow</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-spear\" name=\"weapon\" data-file_male=\"weapons/right hand/male/spear_male.png\" data-file_female=\"weapons/right hand/female/spear_female.png\">
                                        <label for=\"weapon-spear\">Spear</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-wand_wood\" name=\"weapon\" data-file_male=\"weapons/right hand/male/woodwand_male.png\" data-file_female=\"weapons/right hand/female/woodwand_female.png\" data-preview_row=\"13\">
                                        <label for=\"weapon-wand_wood\">Wood Wand</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-wand_steel\" name=\"weapon\" data-file=\"weapons/right hand/female/steelwand_female.png\" data-required=\"sex=female\" data-preview_row=\"13\">
                                        <label for=\"weapon-wand_steel\">Steel Wand <small>(Female Only)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-largespear\" name=\"weapon\" data-file=\"weapons/oversize/two hand/either/spear.png\" data-oversize=\"1\">
                                        <label for=\"weapon-largespear\">Large Spear <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-dragonspear\" name=\"weapon\" data-file=\"weapons/oversize/two hand/either/dragonspear.png\" data-oversize=\"1\">
                                        <label for=\"weapon-dragonspear\">Dragon Spear <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-trident\" name=\"weapon\" data-file=\"weapons/oversize/two hand/either/trident.png\" data-oversize=\"1\">
                                        <label for=\"weapon-trident\">Trident <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-longsword\" name=\"weapon\" data-file_male=\"weapons/oversize/right hand/male/longsword_male.png\" data-file_female=\"weapons/oversize/right hand/female/longsword_female.png\" data-oversize=\"2\">
                                        <label for=\"weapon-longsword\">Long Sword <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-mace\" name=\"weapon\" data-file_male=\"weapons/oversize/right hand/male/mace_male.png\" data-file_female=\"weapons/oversize/right hand/female/mace_female.png\" data-oversize=\"2\">
                                        <label for=\"weapon-mace\">Mace <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-rapier\" name=\"weapon\" data-file_male=\"weapons/oversize/right hand/male/rapier_male.png\" data-file_female=\"weapons/oversize/right hand/female/rapier_female.png\" data-oversize=\"2\">
                                        <label for=\"weapon-rapier\">Rapier <small>(Oversize)</small></label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"weapon-saber\" name=\"weapon\" data-file_male=\"weapons/oversize/right hand/male/saber_male.png\" data-file_female=\"weapons/oversize/right hand/female/saber_female.png\" data-oversize=\"2\">
                                        <label for=\"weapon-saber\">Saber <small>(Oversize)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Ammo</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"ammo-none\" name=\"ammo\" checked>
                                        <label for=\"ammo-none\">No Ammo</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"ammo-arrow\" name=\"ammo\" data-file=\"weapons/left hand/either/arrow.png\" data-prohibited=\"body=skeleton\" data-preview_row=\"17\">
                                        <label for=\"ammo-arrow\">Arrow</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"ammo-arrow_skeleton\" name=\"ammo\" data-file=\"weapons/left hand/either/arrow_skeleton.png\" data-required=\"body=skeleton\" data-preview_row=\"17\">
                                        <label for=\"ammo-arrow_skeleton\">Arrow <small>(for Skeleton)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Shield</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"shield-none\" name=\"shield\" checked>
                                        <label for=\"shield-none\">No Shield</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"shield-on\" name=\"shield\" data-file_no_hat=\"weapons/left hand/male/shield_male_cutoutforbody.png\" data-file_hat=\"weapons/left hand/male/shield_male_cutoutforhat.png\" data-required=\"sex=male\">
                                        <label for=\"shield-on\">Shield <small>(Male only)</small></label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Quiver</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"quiver-none\" name=\"quiver\" checked>
                                        <label for=\"quiver-none\">No Quiver</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"quiver-on\" name=\"quiver\" data-file=\"behind_body/equipment/quiver.png\" data-behind=\"true\">
                                        <label for=\"quiver-on\">Quiver</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Hair</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"hair-none\" name=\"hair\" checked>
                                        <label for=\"hair-none\">No Hair</label>
                                    </li>
                                    <li><span class=\"condensed\">Plain <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_blonde\" name=\"hair\" data-file=\"hair/male/plain/blonde2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_blue\" name=\"hair\" data-file=\"hair/male/plain/blue2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_brunette\" name=\"hair\" data-file=\"hair/male/plain/brunette2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_green\" name=\"hair\" data-file=\"hair/male/plain/green2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_pink\" name=\"hair\" data-file=\"hair/male/plain/pink2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_raven\" name=\"hair\" data-file=\"hair/male/plain/raven2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_dark_blonde\" name=\"hair\" data-file=\"hair/male/plain/dark-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-plain_white\" name=\"hair\" data-file=\"hair/male/plain/white-blonde2.png\" data-required=\"sex=male\">
                                                <label for=\"hair-plain_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Bedhead <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_blonde\" name=\"hair\" data-file=\"hair/male/bedhead/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_blue\" name=\"hair\" data-file=\"hair/male/bedhead/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_brunette\" name=\"hair\" data-file=\"hair/male/bedhead/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_green\" name=\"hair\" data-file=\"hair/male/bedhead/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_pink\" name=\"hair\" data-file=\"hair/male/bedhead/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_raven\" name=\"hair\" data-file=\"hair/male/bedhead/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_red\" name=\"hair\" data-file=\"hair/male/bedhead/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bedhead_white\" name=\"hair\" data-file=\"hair/male/bedhead/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-bedhead_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Long <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_blonde\" name=\"hair\" data-file=\"hair/male/long/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_blue\" name=\"hair\" data-file=\"hair/male/long/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_brunette\" name=\"hair\" data-file=\"hair/male/long/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_green\" name=\"hair\" data-file=\"hair/male/long/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_pink\" name=\"hair\" data-file=\"hair/male/long/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_raven\" name=\"hair\" data-file=\"hair/male/long/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_red\" name=\"hair\" data-file=\"hair/male/long/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-long_white\" name=\"hair\" data-file=\"hair/male/long/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-long_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Longhawk <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_blonde\" name=\"hair\" data-file=\"hair/male/longhawk/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_blue\" name=\"hair\" data-file=\"hair/male/longhawk/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_brunette\" name=\"hair\" data-file=\"hair/male/longhawk/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_green\" name=\"hair\" data-file=\"hair/male/longhawk/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_pink\" name=\"hair\" data-file=\"hair/male/longhawk/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_raven\" name=\"hair\" data-file=\"hair/male/longhawk/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_red\" name=\"hair\" data-file=\"hair/male/longhawk/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-longhawk_white\" name=\"hair\" data-file=\"hair/male/longhawk/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-longhawk_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Messy1 <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_blonde\" name=\"hair\" data-file=\"hair/male/messy1/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_blue\" name=\"hair\" data-file=\"hair/male/messy1/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_brunette\" name=\"hair\" data-file=\"hair/male/messy1/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_green\" name=\"hair\" data-file=\"hair/male/messy1/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_pink\" name=\"hair\" data-file=\"hair/male/messy1/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_raven\" name=\"hair\" data-file=\"hair/male/messy1/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_red\" name=\"hair\" data-file=\"hair/male/messy1/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy1_white\" name=\"hair\" data-file=\"hair/male/messy1/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy1_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Messy2 <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_blonde\" name=\"hair\" data-file=\"hair/male/messy2/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_blue\" name=\"hair\" data-file=\"hair/male/messy2/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_brunette\" name=\"hair\" data-file=\"hair/male/messy2/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_green\" name=\"hair\" data-file=\"hair/male/messy2/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_pink\" name=\"hair\" data-file=\"hair/male/messy2/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_raven\" name=\"hair\" data-file=\"hair/male/messy2/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_red\" name=\"hair\" data-file=\"hair/male/messy2/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-messy2_white\" name=\"hair\" data-file=\"hair/male/messy2/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-messy2_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Mohawk <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_blonde\" name=\"hair\" data-file=\"hair/male/mohawk/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_blue\" name=\"hair\" data-file=\"hair/male/mohawk/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_brunette\" name=\"hair\" data-file=\"hair/male/mohawk/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_green\" name=\"hair\" data-file=\"hair/male/mohawk/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_pink\" name=\"hair\" data-file=\"hair/male/mohawk/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_raven\" name=\"hair\" data-file=\"hair/male/mohawk/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_red\" name=\"hair\" data-file=\"hair/male/mohawk/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-mohawk_white\" name=\"hair\" data-file=\"hair/male/mohawk/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-mohawk_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Page <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_blonde\" name=\"hair\" data-file=\"hair/male/page/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_blue\" name=\"hair\" data-file=\"hair/male/page/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_brunette\" name=\"hair\" data-file=\"hair/male/page/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_green\" name=\"hair\" data-file=\"hair/male/page/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_pink\" name=\"hair\" data-file=\"hair/male/page/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_raven\" name=\"hair\" data-file=\"hair/male/page/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_red\" name=\"hair\" data-file=\"hair/male/page/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-page_white\" name=\"hair\" data-file=\"hair/male/page/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-page_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Parted <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_blonde\" name=\"hair\" data-file=\"hair/male/parted/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_blue\" name=\"hair\" data-file=\"hair/male/parted/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_brunette\" name=\"hair\" data-file=\"hair/male/parted/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_green\" name=\"hair\" data-file=\"hair/male/parted/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_pink\" name=\"hair\" data-file=\"hair/male/parted/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_raven\" name=\"hair\" data-file=\"hair/male/parted/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_red\" name=\"hair\" data-file=\"hair/male/parted/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-parted_white\" name=\"hair\" data-file=\"hair/male/parted/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-parted_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Shorthawk <small>(Male only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_blonde\" name=\"hair\" data-file=\"hair/male/shorthawk/blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_blue\" name=\"hair\" data-file=\"hair/male/shorthawk/blue.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_brunette\" name=\"hair\" data-file=\"hair/male/shorthawk/brunette.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_green\" name=\"hair\" data-file=\"hair/male/shorthawk/green.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_pink\" name=\"hair\" data-file=\"hair/male/shorthawk/pink.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_raven\" name=\"hair\" data-file=\"hair/male/shorthawk/raven.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_red\" name=\"hair\" data-file=\"hair/male/shorthawk/redhead.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shorthawk_white\" name=\"hair\" data-file=\"hair/male/shorthawk/white-blonde.png\" data-required=\"sex=male\">
                                                <label for=\"hair-shorthawk_white\">White Blonde</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Loose <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_black\" name=\"hair\" data-file=\"hair/female/loose/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_blonde\" name=\"hair\" data-file=\"hair/female/loose/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_blonde2\" name=\"hair\" data-file=\"hair/female/loose/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_blue\" name=\"hair\" data-file=\"hair/female/loose/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_blue2\" name=\"hair\" data-file=\"hair/female/loose/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_brown\" name=\"hair\" data-file=\"hair/female/loose/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_brunette\" name=\"hair\" data-file=\"hair/female/loose/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_brunette2\" name=\"hair\" data-file=\"hair/female/loose/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_dark_blonde\" name=\"hair\" data-file=\"hair/female/loose/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_gray\" name=\"hair\" data-file=\"hair/female/loose/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_green\" name=\"hair\" data-file=\"hair/female/loose/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_green2\" name=\"hair\" data-file=\"hair/female/loose/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_light_blonde\" name=\"hair\" data-file=\"hair/female/loose/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_light_blonde2\" name=\"hair\" data-file=\"hair/female/loose/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_pink\" name=\"hair\" data-file=\"hair/female/loose/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_pink2\" name=\"hair\" data-file=\"hair/female/loose/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_raven\" name=\"hair\" data-file=\"hair/female/loose/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_raven2\" name=\"hair\" data-file=\"hair/female/loose/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_red\" name=\"hair\" data-file=\"hair/female/loose/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_ruby_red\" name=\"hair\" data-file=\"hair/female/loose/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_white\" name=\"hair\" data-file=\"hair/female/loose/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_white_blonde\" name=\"hair\" data-file=\"hair/female/loose/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_white_blonde2\" name=\"hair\" data-file=\"hair/female/loose/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-loose_white_cyan\" name=\"hair\" data-file=\"hair/female/loose/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-loose_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Pixie <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_black\" name=\"hair\" data-file=\"hair/female/pixie/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_blonde\" name=\"hair\" data-file=\"hair/female/pixie/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_blonde2\" name=\"hair\" data-file=\"hair/female/pixie/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_blue\" name=\"hair\" data-file=\"hair/female/pixie/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_blue2\" name=\"hair\" data-file=\"hair/female/pixie/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_brown\" name=\"hair\" data-file=\"hair/female/pixie/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_brunette\" name=\"hair\" data-file=\"hair/female/pixie/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_brunette2\" name=\"hair\" data-file=\"hair/female/pixie/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_dark_blonde\" name=\"hair\" data-file=\"hair/female/pixie/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_gray\" name=\"hair\" data-file=\"hair/female/pixie/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_green\" name=\"hair\" data-file=\"hair/female/pixie/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_green2\" name=\"hair\" data-file=\"hair/female/pixie/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_light_blonde\" name=\"hair\" data-file=\"hair/female/pixie/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_light_blonde2\" name=\"hair\" data-file=\"hair/female/pixie/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_pink\" name=\"hair\" data-file=\"hair/female/pixie/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_pink2\" name=\"hair\" data-file=\"hair/female/pixie/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_raven\" name=\"hair\" data-file=\"hair/female/pixie/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_raven2\" name=\"hair\" data-file=\"hair/female/pixie/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_red\" name=\"hair\" data-file=\"hair/female/pixie/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_ruby_red\" name=\"hair\" data-file=\"hair/female/pixie/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_white\" name=\"hair\" data-file=\"hair/female/pixie/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_white_blonde\" name=\"hair\" data-file=\"hair/female/pixie/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_white_blonde2\" name=\"hair\" data-file=\"hair/female/pixie/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-pixie_white_cyan\" name=\"hair\" data-file=\"hair/female/pixie/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-pixie_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Short Bangs <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_black\" name=\"hair\" data-file=\"hair/female/bangsshort/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_blonde\" name=\"hair\" data-file=\"hair/female/bangsshort/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_blonde2\" name=\"hair\" data-file=\"hair/female/bangsshort/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_blue\" name=\"hair\" data-file=\"hair/female/bangsshort/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_blue2\" name=\"hair\" data-file=\"hair/female/bangsshort/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_brown\" name=\"hair\" data-file=\"hair/female/bangsshort/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_brunette\" name=\"hair\" data-file=\"hair/female/bangsshort/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_brunette2\" name=\"hair\" data-file=\"hair/female/bangsshort/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_dark_blonde\" name=\"hair\" data-file=\"hair/female/bangsshort/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_gray\" name=\"hair\" data-file=\"hair/female/bangsshort/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_green\" name=\"hair\" data-file=\"hair/female/bangsshort/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_green2\" name=\"hair\" data-file=\"hair/female/bangsshort/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_light_blonde\" name=\"hair\" data-file=\"hair/female/bangsshort/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_light_blonde2\" name=\"hair\" data-file=\"hair/female/bangsshort/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_pink\" name=\"hair\" data-file=\"hair/female/bangsshort/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_pink2\" name=\"hair\" data-file=\"hair/female/bangsshort/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_raven\" name=\"hair\" data-file=\"hair/female/bangsshort/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_raven2\" name=\"hair\" data-file=\"hair/female/bangsshort/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_red\" name=\"hair\" data-file=\"hair/female/bangsshort/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_ruby_red\" name=\"hair\" data-file=\"hair/female/bangsshort/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_white\" name=\"hair\" data-file=\"hair/female/bangsshort/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_white_blonde\" name=\"hair\" data-file=\"hair/female/bangsshort/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_white_blonde2\" name=\"hair\" data-file=\"hair/female/bangsshort/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangsshort_white_cyan\" name=\"hair\" data-file=\"hair/female/bangsshort/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangsshort_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Long Bangs <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_black\" name=\"hair\" data-file=\"hair/female/bangslong/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_blonde\" name=\"hair\" data-file=\"hair/female/bangslong/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_blue\" name=\"hair\" data-file=\"hair/female/bangslong/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_blue2\" name=\"hair\" data-file=\"hair/female/bangslong/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_brown\" name=\"hair\" data-file=\"hair/female/bangslong/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_brunette\" name=\"hair\" data-file=\"hair/female/bangslong/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_brunette2\" name=\"hair\" data-file=\"hair/female/bangslong/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_dark_blonde\" name=\"hair\" data-file=\"hair/female/bangslong/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_gray\" name=\"hair\" data-file=\"hair/female/bangslong/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_green\" name=\"hair\" data-file=\"hair/female/bangslong/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_green2\" name=\"hair\" data-file=\"hair/female/bangslong/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_light_blonde\" name=\"hair\" data-file=\"hair/female/bangslong/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_light_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_pink\" name=\"hair\" data-file=\"hair/female/bangslong/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_pink2\" name=\"hair\" data-file=\"hair/female/bangslong/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_raven\" name=\"hair\" data-file=\"hair/female/bangslong/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_raven2\" name=\"hair\" data-file=\"hair/female/bangslong/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_red\" name=\"hair\" data-file=\"hair/female/bangslong/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_ruby_red\" name=\"hair\" data-file=\"hair/female/bangslong/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_white\" name=\"hair\" data-file=\"hair/female/bangslong/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_white_blonde\" name=\"hair\" data-file=\"hair/female/bangslong/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_white_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong_white_cyan\" name=\"hair\" data-file=\"hair/female/bangslong/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Long Bangs 2 <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_black\" name=\"hair\" data-file=\"hair/female/bangslong2/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_blonde\" name=\"hair\" data-file=\"hair/female/bangslong2/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong2/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_blue\" name=\"hair\" data-file=\"hair/female/bangslong2/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_blue2\" name=\"hair\" data-file=\"hair/female/bangslong2/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_brown\" name=\"hair\" data-file=\"hair/female/bangslong2/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_brunette\" name=\"hair\" data-file=\"hair/female/bangslong2/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_brunette2\" name=\"hair\" data-file=\"hair/female/bangslong2/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_dark_blonde\" name=\"hair\" data-file=\"hair/female/bangslong2/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_gray\" name=\"hair\" data-file=\"hair/female/bangslong2/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_green\" name=\"hair\" data-file=\"hair/female/bangslong2/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_green2\" name=\"hair\" data-file=\"hair/female/bangslong2/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_light_blonde\" name=\"hair\" data-file=\"hair/female/bangslong2/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_light_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong2/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_pink\" name=\"hair\" data-file=\"hair/female/bangslong2/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_pink2\" name=\"hair\" data-file=\"hair/female/bangslong2/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_raven\" name=\"hair\" data-file=\"hair/female/bangslong2/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_raven2\" name=\"hair\" data-file=\"hair/female/bangslong2/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_red\" name=\"hair\" data-file=\"hair/female/bangslong2/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_ruby_red\" name=\"hair\" data-file=\"hair/female/bangslong2/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_white\" name=\"hair\" data-file=\"hair/female/bangslong2/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_white_blonde\" name=\"hair\" data-file=\"hair/female/bangslong2/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_white_blonde2\" name=\"hair\" data-file=\"hair/female/bangslong2/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bangslong2_white_cyan\" name=\"hair\" data-file=\"hair/female/bangslong2/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bangslong2_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Ponytail <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_black\" name=\"hair\" data-file=\"hair/female/ponytail/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_blonde\" name=\"hair\" data-file=\"hair/female/ponytail/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_blue\" name=\"hair\" data-file=\"hair/female/ponytail/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_blue2\" name=\"hair\" data-file=\"hair/female/ponytail/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_brown\" name=\"hair\" data-file=\"hair/female/ponytail/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_brunette\" name=\"hair\" data-file=\"hair/female/ponytail/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_brunette2\" name=\"hair\" data-file=\"hair/female/ponytail/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_dark_blonde\" name=\"hair\" data-file=\"hair/female/ponytail/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_gray\" name=\"hair\" data-file=\"hair/female/ponytail/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_green\" name=\"hair\" data-file=\"hair/female/ponytail/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_green2\" name=\"hair\" data-file=\"hair/female/ponytail/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_light_blonde\" name=\"hair\" data-file=\"hair/female/ponytail/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_light_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_pink\" name=\"hair\" data-file=\"hair/female/ponytail/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_pink2\" name=\"hair\" data-file=\"hair/female/ponytail/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_raven\" name=\"hair\" data-file=\"hair/female/ponytail/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_raven2\" name=\"hair\" data-file=\"hair/female/ponytail/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_red\" name=\"hair\" data-file=\"hair/female/ponytail/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_ruby_red\" name=\"hair\" data-file=\"hair/female/ponytail/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_white\" name=\"hair\" data-file=\"hair/female/ponytail/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_white_blonde\" name=\"hair\" data-file=\"hair/female/ponytail/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_white_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail_white_cyan\" name=\"hair\" data-file=\"hair/female/ponytail/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Ponytail 2 <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_black\" name=\"hair\" data-file=\"hair/female/ponytail2/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_blonde\" name=\"hair\" data-file=\"hair/female/ponytail2/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail2/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_blue\" name=\"hair\" data-file=\"hair/female/ponytail2/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_blue2\" name=\"hair\" data-file=\"hair/female/ponytail2/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_brown\" name=\"hair\" data-file=\"hair/female/ponytail2/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_brunette\" name=\"hair\" data-file=\"hair/female/ponytail2/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_brunette2\" name=\"hair\" data-file=\"hair/female/ponytail2/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_dark_blonde\" name=\"hair\" data-file=\"hair/female/ponytail2/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_gray\" name=\"hair\" data-file=\"hair/female/ponytail2/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_green\" name=\"hair\" data-file=\"hair/female/ponytail2/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_green2\" name=\"hair\" data-file=\"hair/female/ponytail2/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_light_blonde\" name=\"hair\" data-file=\"hair/female/ponytail2/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_light_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail2/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_pink\" name=\"hair\" data-file=\"hair/female/ponytail2/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_pink2\" name=\"hair\" data-file=\"hair/female/ponytail2/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_raven\" name=\"hair\" data-file=\"hair/female/ponytail2/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_raven2\" name=\"hair\" data-file=\"hair/female/ponytail2/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_red\" name=\"hair\" data-file=\"hair/female/ponytail2/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_ruby_red\" name=\"hair\" data-file=\"hair/female/ponytail2/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_white\" name=\"hair\" data-file=\"hair/female/ponytail2/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_white_blonde\" name=\"hair\" data-file=\"hair/female/ponytail2/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_white_blonde2\" name=\"hair\" data-file=\"hair/female/ponytail2/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-ponytail2_white_cyan\" name=\"hair\" data-file=\"hair/female/ponytail2/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-ponytail2_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Bunches <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_black\" name=\"hair\" data-file=\"hair/female/bunches/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_blonde\" name=\"hair\" data-file=\"hair/female/bunches/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_blonde2\" name=\"hair\" data-file=\"hair/female/bunches/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_blue\" name=\"hair\" data-file=\"hair/female/bunches/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_blue2\" name=\"hair\" data-file=\"hair/female/bunches/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_brown\" name=\"hair\" data-file=\"hair/female/bunches/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_brunette\" name=\"hair\" data-file=\"hair/female/bunches/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_brunette2\" name=\"hair\" data-file=\"hair/female/bunches/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_dark_blonde\" name=\"hair\" data-file=\"hair/female/bunches/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_gray\" name=\"hair\" data-file=\"hair/female/bunches/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_green\" name=\"hair\" data-file=\"hair/female/bunches/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_green2\" name=\"hair\" data-file=\"hair/female/bunches/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_light_blonde\" name=\"hair\" data-file=\"hair/female/bunches/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_light_blonde2\" name=\"hair\" data-file=\"hair/female/bunches/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_pink\" name=\"hair\" data-file=\"hair/female/bunches/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_pink2\" name=\"hair\" data-file=\"hair/female/bunches/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_raven\" name=\"hair\" data-file=\"hair/female/bunches/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_raven2\" name=\"hair\" data-file=\"hair/female/bunches/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_red\" name=\"hair\" data-file=\"hair/female/bunches/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_ruby_red\" name=\"hair\" data-file=\"hair/female/bunches/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_white\" name=\"hair\" data-file=\"hair/female/bunches/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_white_blonde\" name=\"hair\" data-file=\"hair/female/bunches/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_white_blonde2\" name=\"hair\" data-file=\"hair/female/bunches/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-bunches_white_cyan\" name=\"hair\" data-file=\"hair/female/bunches/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-bunches_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Princess <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_black\" name=\"hair\" data-file=\"hair/female/princess/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_blonde\" name=\"hair\" data-file=\"hair/female/princess/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_blonde2\" name=\"hair\" data-file=\"hair/female/princess/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_blue\" name=\"hair\" data-file=\"hair/female/princess/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_blue2\" name=\"hair\" data-file=\"hair/female/princess/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_brown\" name=\"hair\" data-file=\"hair/female/princess/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_brunette\" name=\"hair\" data-file=\"hair/female/princess/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_brunette2\" name=\"hair\" data-file=\"hair/female/princess/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_dark_blonde\" name=\"hair\" data-file=\"hair/female/princess/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_gray\" name=\"hair\" data-file=\"hair/female/princess/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_green\" name=\"hair\" data-file=\"hair/female/princess/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_green2\" name=\"hair\" data-file=\"hair/female/princess/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_light_blonde\" name=\"hair\" data-file=\"hair/female/princess/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_light_blonde2\" name=\"hair\" data-file=\"hair/female/princess/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_pink\" name=\"hair\" data-file=\"hair/female/princess/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_pink2\" name=\"hair\" data-file=\"hair/female/princess/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_raven\" name=\"hair\" data-file=\"hair/female/princess/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_raven2\" name=\"hair\" data-file=\"hair/female/princess/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_red\" name=\"hair\" data-file=\"hair/female/princess/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_ruby_red\" name=\"hair\" data-file=\"hair/female/princess/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_white\" name=\"hair\" data-file=\"hair/female/princess/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_white_blonde\" name=\"hair\" data-file=\"hair/female/princess/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_white_blonde2\" name=\"hair\" data-file=\"hair/female/princess/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-princess_white_cyan\" name=\"hair\" data-file=\"hair/female/princess/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-princess_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Left Shoulder w/Braid <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_black\" name=\"hair\" data-file=\"hair/female/shoulderl/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_blonde\" name=\"hair\" data-file=\"hair/female/shoulderl/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderl/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_blue\" name=\"hair\" data-file=\"hair/female/shoulderl/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_blue2\" name=\"hair\" data-file=\"hair/female/shoulderl/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_brown\" name=\"hair\" data-file=\"hair/female/shoulderl/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_brunette\" name=\"hair\" data-file=\"hair/female/shoulderl/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_brunette2\" name=\"hair\" data-file=\"hair/female/shoulderl/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_dark_blonde\" name=\"hair\" data-file=\"hair/female/shoulderl/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_gray\" name=\"hair\" data-file=\"hair/female/shoulderl/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_green\" name=\"hair\" data-file=\"hair/female/shoulderl/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_green2\" name=\"hair\" data-file=\"hair/female/shoulderl/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_light_blonde\" name=\"hair\" data-file=\"hair/female/shoulderl/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_light_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderl/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_pink\" name=\"hair\" data-file=\"hair/female/shoulderl/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_pink2\" name=\"hair\" data-file=\"hair/female/shoulderl/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_raven\" name=\"hair\" data-file=\"hair/female/shoulderl/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_raven2\" name=\"hair\" data-file=\"hair/female/shoulderl/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_red\" name=\"hair\" data-file=\"hair/female/shoulderl/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_ruby_red\" name=\"hair\" data-file=\"hair/female/shoulderl/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_white\" name=\"hair\" data-file=\"hair/female/shoulderl/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_white_blonde\" name=\"hair\" data-file=\"hair/female/shoulderl/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_white_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderl/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderl_white_cyan\" name=\"hair\" data-file=\"hair/female/shoulderl/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderl_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Right Shoulder w/Braid <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_black\" name=\"hair\" data-file=\"hair/female/shoulderr/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_blonde\" name=\"hair\" data-file=\"hair/female/shoulderr/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderr/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_blue\" name=\"hair\" data-file=\"hair/female/shoulderr/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_blue2\" name=\"hair\" data-file=\"hair/female/shoulderr/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_brown\" name=\"hair\" data-file=\"hair/female/shoulderr/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_brunette\" name=\"hair\" data-file=\"hair/female/shoulderr/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_brunette2\" name=\"hair\" data-file=\"hair/female/shoulderr/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_dark_blonde\" name=\"hair\" data-file=\"hair/female/shoulderr/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_gray\" name=\"hair\" data-file=\"hair/female/shoulderr/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_green\" name=\"hair\" data-file=\"hair/female/shoulderr/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_green2\" name=\"hair\" data-file=\"hair/female/shoulderr/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_light_blonde\" name=\"hair\" data-file=\"hair/female/shoulderr/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_light_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderr/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_pink\" name=\"hair\" data-file=\"hair/female/shoulderr/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_pink2\" name=\"hair\" data-file=\"hair/female/shoulderr/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_raven\" name=\"hair\" data-file=\"hair/female/shoulderr/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_raven2\" name=\"hair\" data-file=\"hair/female/shoulderr/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_red\" name=\"hair\" data-file=\"hair/female/shoulderr/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_ruby_red\" name=\"hair\" data-file=\"hair/female/shoulderr/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_white\" name=\"hair\" data-file=\"hair/female/shoulderr/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_white_blonde\" name=\"hair\" data-file=\"hair/female/shoulderr/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_white_blonde2\" name=\"hair\" data-file=\"hair/female/shoulderr/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-shoulderr_white_cyan\" name=\"hair\" data-file=\"hair/female/shoulderr/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-shoulderr_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Swoop <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_black\" name=\"hair\" data-file=\"hair/female/swoop/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_blonde\" name=\"hair\" data-file=\"hair/female/swoop/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_blonde2\" name=\"hair\" data-file=\"hair/female/swoop/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_blue\" name=\"hair\" data-file=\"hair/female/swoop/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_blue2\" name=\"hair\" data-file=\"hair/female/swoop/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_brown\" name=\"hair\" data-file=\"hair/female/swoop/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_brunette\" name=\"hair\" data-file=\"hair/female/swoop/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_brunette2\" name=\"hair\" data-file=\"hair/female/swoop/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_dark_blonde\" name=\"hair\" data-file=\"hair/female/swoop/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_gray\" name=\"hair\" data-file=\"hair/female/swoop/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_green\" name=\"hair\" data-file=\"hair/female/swoop/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_green2\" name=\"hair\" data-file=\"hair/female/swoop/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_light_blonde\" name=\"hair\" data-file=\"hair/female/swoop/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_light_blonde2\" name=\"hair\" data-file=\"hair/female/swoop/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_pink\" name=\"hair\" data-file=\"hair/female/swoop/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_pink2\" name=\"hair\" data-file=\"hair/female/swoop/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_raven\" name=\"hair\" data-file=\"hair/female/swoop/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_raven2\" name=\"hair\" data-file=\"hair/female/swoop/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_red\" name=\"hair\" data-file=\"hair/female/swoop/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_ruby_red\" name=\"hair\" data-file=\"hair/female/swoop/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_white\" name=\"hair\" data-file=\"hair/female/swoop/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_white_blonde\" name=\"hair\" data-file=\"hair/female/swoop/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_white_blonde2\" name=\"hair\" data-file=\"hair/female/swoop/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-swoop_white_cyan\" name=\"hair\" data-file=\"hair/female/swoop/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-swoop_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><span class=\"condensed\">Unkempt <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_black\" name=\"hair\" data-file=\"hair/female/unkempt/black.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_black\">Black</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_blonde\" name=\"hair\" data-file=\"hair/female/unkempt/blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_blonde\">Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_blonde2\" name=\"hair\" data-file=\"hair/female/unkempt/blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_blonde2\">Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_blue\" name=\"hair\" data-file=\"hair/female/unkempt/blue.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_blue\">Blue</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_blue2\" name=\"hair\" data-file=\"hair/female/unkempt/blue2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_blue2\">Blue 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_brown\" name=\"hair\" data-file=\"hair/female/unkempt/brown.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_brown\">Brown</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_brunette\" name=\"hair\" data-file=\"hair/female/unkempt/brunette.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_brunette\">Brunette</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_brunette2\" name=\"hair\" data-file=\"hair/female/unkempt/brunette2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_brunette2\">Brunette 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_dark_blonde\" name=\"hair\" data-file=\"hair/female/unkempt/dark-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_dark_blonde\">Dark Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_gray\" name=\"hair\" data-file=\"hair/female/unkempt/gray.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_gray\">Gray</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_green\" name=\"hair\" data-file=\"hair/female/unkempt/green.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_green\">Green</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_green2\" name=\"hair\" data-file=\"hair/female/unkempt/green2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_green2\">Green 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_light_blonde\" name=\"hair\" data-file=\"hair/female/unkempt/light-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_light_blonde\">Light Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_light_blonde2\" name=\"hair\" data-file=\"hair/female/unkempt/light-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_light_blonde2\">Light Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_pink\" name=\"hair\" data-file=\"hair/female/unkempt/pink.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_pink\">Pink</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_pink2\" name=\"hair\" data-file=\"hair/female/unkempt/pink2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_pink2\">Pink 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_raven\" name=\"hair\" data-file=\"hair/female/unkempt/raven.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_raven\">Raven</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_raven2\" name=\"hair\" data-file=\"hair/female/unkempt/raven2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_raven2\">Raven 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_red\" name=\"hair\" data-file=\"hair/female/unkempt/redhead.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_red\">Redhead</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_ruby_red\" name=\"hair\" data-file=\"hair/female/unkempt/ruby-red.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_ruby_red\">Ruby Red</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_white\" name=\"hair\" data-file=\"hair/female/unkempt/white.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_white\">White</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_white_blonde\" name=\"hair\" data-file=\"hair/female/unkempt/white-blonde.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_white_blonde\">White Blonde</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_white_blonde2\" name=\"hair\" data-file=\"hair/female/unkempt/white-blonde2.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_white_blonde2\">White Blonde 2</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hair-unkempt_white_cyan\" name=\"hair\" data-file=\"hair/female/unkempt/white-cyan.png\" data-required=\"sex=female\">
                                                <label for=\"hair-unkempt_white_cyan\">White Cyan</label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                            <span class=\"condensed\">
                                                <input type=\"radio\" id=\"hair-sara\" name=\"hair\" data-required=\"sex=female\">
                                                <label for=\"hair-sara\">Sara's Hair <small>(Female only)</small></label>
                                            </span>
                                        <ul>
                                            <li>
                                                <input type=\"checkbox\" id=\"hairsara-bottomlayer\" name=\"hairsara-bottomlayer\" data-required=\"hair=sara\" data-file=\"hair/female/SaraHairBottomLayer.png\" data-behind=\"true\" data-preview_row=\"1\">
                                                <label for=\"hairsara-bottomlayer\">Bottom Layer</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"hairsara-shadow\" name=\"hairsara-shadow\" data-required=\"hair=sara\" data-file=\"hair/female/SaraHairShadowOnFace.png\">
                                                <label for=\"hairsara-shadow\">Shadow on Face</label>
                                            </li>
                                            <li>
                                                <input type=\"checkbox\" id=\"hairsara-toplayer\" name=\"hairsara-toplayer\" data-required=\"hair=sara\" data-file=\"hair/female/SaraHairTopLayer.png\">
                                                <label for=\"hairsara-toplayer\">Top Layer</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Ears</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"ears-none\" name=\"ears\" checked>
                                        <label for=\"ears-none\">Default</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"ears-big\" name=\"ears\" data-prohibited=\"body=orc,body=orc_red,body=skeleton\" data-file_male_light=\"body/male/ears/bigears_light.png\" data-file_female_light=\"body/female/ears/bigears_light.png\" data-file_male_dark=\"body/male/ears/bigears_dark.png\" data-file_female_dark=\"body/female/ears/bigears_dark.png\" data-file_male_dark2=\"body/male/ears/bigears_dark2.png\" data-file_female_dark2=\"body/female/ears/bigears_dark2.png\" data-file_male_darkelf=\"body/male/ears/bigears_darkelf.png\" data-file_female_darkelf=\"body/female/ears/bigears_darkelf.png\" data-file_male_darkelf2=\"body/male/ears/bigears_darkelf2.png\" data-file_female_darkelf2=\"body/female/ears/bigears_darkelf2.png\" data-file_male_tanned=\"body/male/ears/bigears_tanned.png\" data-file_female_tanned=\"body/female/ears/bigears_tanned.png\" data-file_male_tanned2=\"body/male/ears/bigears_tanned2.png\" data-file_female_tanned2=\"body/female/ears/bigears_tanned2.png\">
                                        <label for=\"ears-big\">Big Ears</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"ears-elven\" name=\"ears\" data-prohibited=\"body=orc,body=orc_red,body=skeleton\" data-file_male_light=\"body/male/ears/elvenears_light.png\" data-file_female_light=\"body/female/ears/elvenears_light.png\" data-file_male_dark=\"body/male/ears/elvenears_dark.png\" data-file_female_dark=\"body/female/ears/elvenears_dark.png\" data-file_male_dark2=\"body/male/ears/elvenears_dark2.png\" data-file_female_dark2=\"body/female/ears/elvenears_dark2.png\" data-file_male_darkelf=\"body/male/ears/elvenears_darkelf.png\" data-file_female_darkelf=\"body/female/ears/elvenears_darkelf.png\" data-file_male_darkelf2=\"body/male/ears/elvenears_darkelf2.png\" data-file_female_darkelf2=\"body/female/ears/elvenears_darkelf2.png\" data-file_male_tanned=\"body/male/ears/elvenears_tanned.png\" data-file_female_tanned=\"body/female/ears/elvenears_tanned.png\" data-file_male_tanned2=\"body/male/ears/elvenears_tanned2.png\" data-file_female_tanned2=\"body/female/ears/elvenears_tanned2.png\">
                                        <label for=\"ears-elven\">Elven Ears</label>
                                    </li>
                                </ul>
                            </li>
                            <li><span class=\"condensed\">Hats</span>
                                <ul>
                                    <li>
                                        <input type=\"radio\" id=\"hat-none\" name=\"hat\" checked>
                                        <label for=\"hat-none\">No Hat</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-bandana_red\" name=\"hat\" data-file_male=\"head/bandanas/male/red.png\" data-file_female=\"head/bandanas/female/red.png\">
                                        <label for=\"hat-bandana_red\">Red Bandana</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-cap_leather\" name=\"hat\" data-file_male=\"head/caps/male/leather_cap_male.png\" data-file_female=\"head/caps/female/leather_cap_female.png\">
                                        <label for=\"hat-cap_leather\">Leather Cap</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-chain\" name=\"hat\" data-file_male=\"head/helms/male/chainhat_male.png\" data-file_female=\"head/helms/female/chainhat_female.png\">
                                        <label for=\"hat-chain\">Chain Hat</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-hood_cloth\" name=\"hat\" data-file_male=\"head/hoods/male/cloth_hood_male.png\" data-file_female=\"head/hoods/female/cloth_hood_female.png\">
                                        <label for=\"hat-hood_cloth\">Cloth Hood</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-hood_chain\" name=\"hat\" data-file_male=\"head/hoods/male/chain_hood_male.png\" data-file_female=\"head/hoods/female/chain_hood_female.png\">
                                        <label for=\"hat-hood_chain\">Chain Hood</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-helmet_metal\" name=\"hat\" data-file_male=\"head/helms/male/metal_helm_male.png\" data-file_female=\"head/helms/female/metal_helm_female.png\">
                                        <label for=\"hat-helmet_metal\">Metal Helmet</label>
                                    </li>
                                    <li>
                                        <input type=\"radio\" id=\"hat-helmet_golden\" name=\"hat\" data-file_male=\"head/helms/male/golden_helm_male.png\" data-file_female=\"head/helms/female/golden_helm_female.png\">
                                        <label for=\"hat-helmet_golden\">Golden Helmet</label>
                                    </li>
                                    <li>
                                        <span class=\"condensed\">Tiara <small>(Female only)</small></span>
                                        <ul>
                                            <li>
                                                <input type=\"radio\" id=\"hat-tiara_bronze\" name=\"hat\" data-required=\"sex=female\" data-file=\"head/tiaras_female/bronze.png\">
                                                <label for=\"hat-tiara_bronze\">Bronze</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hat-tiara_iron\" name=\"hat\" data-required=\"sex=female\" data-file=\"head/tiaras_female/iron.png\">
                                                <label for=\"hat-tiara_iron\">Iron</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hat-tiara_silver\" name=\"hat\" data-required=\"sex=female\" data-file=\"head/tiaras_female/silver.png\">
                                                <label for=\"hat-tiara_silver\">Silver</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hat-tiara_gold\" name=\"hat\" data-required=\"sex=female\" data-file=\"head/tiaras_female/gold.png\">
                                                <label for=\"hat-tiara_gold\">Gold</label>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"hats-tiara_purple\" name=\"hat\" data-required=\"sex=female\" data-file=\"head/tiaras_female/purple.png\">
                                                <label for=\"hat-tiara_purple\">Purple</label>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p class=\"buttons\">
                            <input type=\"button\" id=\"collapse\" value=\"Collapse All\">
                            <input type=\"reset\" value=\"Reset\">
                        </p>
                    </section>
                </form>

                <section id=\"preview\" style=\"display:none\">
                    <p class=\"instr\">The complete resulting sprite sheet for your character:</p>
                    <canvas id=\"spritesheet\" width=\"832\" height=\"1344\">HTML5 Browser required.</canvas>
                </section>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OSGameBundle:Chars:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  133 => 53,  128 => 50,  122 => 40,  118 => 39,  114 => 38,  107 => 34,  103 => 33,  99 => 32,  93 => 29,  89 => 28,  82 => 23,  79 => 22,  73 => 19,  68 => 18,  65 => 17,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  39 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OSGameBundle:Chars:new.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/new.html.twig");
    }
}