<?php

class __Mustache_1473451d8f010d5f6c3cf7ef99c17b2b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_academi/navbar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $value = $context->find('themestyleheader');
        $buffer .= $this->section8234d8c34a29447097bfbd4b4899c4dd($context, $indent, $value);

        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section393fce6551f291b08ba242eb528b59ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="logo">
                        <img src="{{logourl}}" alt="{{sitename}}">
                    </span>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="logo">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4c2668d30bb21c04e6c1d399f6a463e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="primary-navigation">
                        {{> core/moremenu}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="primary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8234d8c34a29447097bfbd4b4899c4dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="header-main">
        <div class="container-fluid">
            <nav class="navbar navbar-light bg-faded navbar-expand">
                <a href="{{{ config.wwwroot }}}/?redirect=0" class="navbar-brand {{# logourl }}has-logo{{/ logourl }}
                {{^ logourl }}
                    hidden-sm-down
                {{/ logourl }}
                    ">
                {{# logourl }}
                    <span class="logo">
                        <img src="{{logourl}}" alt="{{sitename}}">
                    </span>
                {{/ logourl }}
                {{^ logourl }}
                    <span class="site-name hidden-sm-down">{{{ sitename }}}</span>
                {{/ logourl }}
                </a>

                {{#primarymoremenu}}
                    <div class="primary-navigation">
                        {{> core/moremenu}}
                    </div>
                {{/primarymoremenu}}

                <ul class="navbar-nav d-none d-md-flex my-1 px-1">
                    <!-- page_heading_menu -->
                    {{{ output.page_heading_menu }}}
                </ul>

            </nav>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="header-main">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <nav class="navbar navbar-light bg-faded navbar-expand">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/?redirect=0" class="navbar-brand ';
                $value = $context->find('logourl');
                $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    hidden-sm-down
';
                }
                $buffer .= $indent . '                    ">
';
                $value = $context->find('logourl');
                $buffer .= $this->section393fce6551f291b08ba242eb528b59ea($context, $indent, $value);
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <span class="site-name hidden-sm-down">';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '
';
                $value = $context->find('primarymoremenu');
                $buffer .= $this->sectionD4c2668d30bb21c04e6c1d399f6a463e($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <ul class="navbar-nav d-none d-md-flex my-1 px-1">
';
                $buffer .= $indent . '                    <!-- page_heading_menu -->
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </nav>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
