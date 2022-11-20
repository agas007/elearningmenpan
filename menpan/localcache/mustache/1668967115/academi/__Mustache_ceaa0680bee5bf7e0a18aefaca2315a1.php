<?php

class __Mustache_ceaa0680bee5bf7e0a18aefaca2315a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->sectionB9509249496440df5a3f1a21b81f7e5b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '<footer id="page-footer" class="footer-popover footer-dark bg-dark text-light">
';
            $value = $context->find('footerblock');
            $buffer .= $this->sectionEc7b6ecaf76ad148f4c82cc7d6ca1dee($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '</footer>
';
            $buffer .= $indent . '<!--E.O.Footer-->
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section4399311513bfd3f71c9d261ec7f01906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <p>{{{copyright_footer}}}</p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9509249496440df5a3f1a21b81f7e5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
<div id="footer">
  <div class="footer-bootom">
    {{# copyright_footer}}
      <p>{{{copyright_footer}}}</p>
    {{/ copyright_footer}}
  </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '<div id="footer">
';
                $buffer .= $indent . '  <div class="footer-bootom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->section4399311513bfd3f71c9d261ec7f01906($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d2ed618530391253b55da38ed428831(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="footer-logo">
                  <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
              </div>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="footer-logo">
';
                $buffer .= $indent . '                  <a href="#"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbed382396978ce5cfd48687adc4475d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{#logourl}}
              <div class="footer-logo">
                  <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
              </div>
              {{/logourl}}

              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->section4d2ed618530391253b55da38ed428831($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cb244711d3e840387238dcae747cefe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' info, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' info, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88e305810c8b3d4b018de1c7b314c552(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <h2>{{#str}} info, theme_academi {{/str}}</h2>
              <ul>
                  {{{infolink}}}
              </ul>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <h2>';
                $value = $context->find('str');
                $buffer .= $this->section2cb244711d3e840387238dcae747cefe($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '              <ul>
';
                $buffer .= $indent . '                  ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '              </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fc6ec852714100dca2a532ed1856a8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contact_us, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contact_us, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2dc230eaa5f231a2c48da121e346b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC19a41c28e5887cebe5c0456f6d12dde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '<br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5b8a906bb35bcf93edd16ea7a912603(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a><br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17c958727c5fb370ebde1565e4c8e132(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' followus, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' followus, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2a90c097d3678b807a0280f0c939dbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li class="smedia-01"><a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-facebook-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c5bd66994aa2f205d2b187cfd818998(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="smedia-02"><a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-pinterest-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ecf784056425b33bdf2455a05d61dd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li class="smedia-03"><a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-twitter-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50d4cf6927f829f7bd3a83a5cef41d81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li class="smedia-04"><a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-google-plus-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f1c390e81be99c26fd9a30da06f9061(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="social-media">
              <h6>{{#str}} followus, theme_academi {{/str}}</h6>
              <ul>
              {{# fburl}}
                  <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
              {{/ fburl}}
              {{# pinurl}}
                <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
              {{/ pinurl}}
              {{# twurl}}
                  <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
              {{/ twurl}}
              {{# gpurl}}
                  <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
              {{/ gpurl}}
              </ul>
            </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="social-media">
';
                $buffer .= $indent . '              <h6>';
                $value = $context->find('str');
                $buffer .= $this->section17c958727c5fb370ebde1565e4c8e132($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '              <ul>
';
                $value = $context->find('fburl');
                $buffer .= $this->sectionA2a90c097d3678b807a0280f0c939dbf($context, $indent, $value);
                $value = $context->find('pinurl');
                $buffer .= $this->section2c5bd66994aa2f205d2b187cfd818998($context, $indent, $value);
                $value = $context->find('twurl');
                $buffer .= $this->section0ecf784056425b33bdf2455a05d61dd0($context, $indent, $value);
                $value = $context->find('gpurl');
                $buffer .= $this->section50d4cf6927f829f7bd3a83a5cef41d81($context, $indent, $value);
                $buffer .= $indent . '              </ul>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section675af9121a3638dc8bc3cd950eea4902(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="col-md-4">
            <div class="contact-info">
              <h2 class="nopadding">{{#str}} contact_us, theme_academi {{/str}}</h2>

              <p>{{# address}}{{address}}{{/ address}}<br>
              {{# phoneno}}
                <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
              {{/ phoneno}}
              {{# emailid}}
                <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
              {{/ emailid}}
              </p>

            </div>
          {{# socialurl}}
            <div class="social-media">
              <h6>{{#str}} followus, theme_academi {{/str}}</h6>
              <ul>
              {{# fburl}}
                  <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
              {{/ fburl}}
              {{# pinurl}}
                <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
              {{/ pinurl}}
              {{# twurl}}
                  <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
              {{/ twurl}}
              {{# gpurl}}
                  <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
              {{/ gpurl}}
              </ul>
            </div>
          {{/ socialurl}}
          </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="col-md-4">
';
                $buffer .= $indent . '            <div class="contact-info">
';
                $buffer .= $indent . '              <h2 class="nopadding">';
                $value = $context->find('str');
                $buffer .= $this->section2fc6ec852714100dca2a532ed1856a8f($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <p>';
                $value = $context->find('address');
                $buffer .= $this->sectionB2dc230eaa5f231a2c48da121e346b77($context, $indent, $value);
                $buffer .= '<br>
';
                $value = $context->find('phoneno');
                $buffer .= $this->sectionC19a41c28e5887cebe5c0456f6d12dde($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionD5b8a906bb35bcf93edd16ea7a912603($context, $indent, $value);
                $buffer .= $indent . '              </p>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            </div>
';
                $value = $context->find('socialurl');
                $buffer .= $this->section9f1c390e81be99c26fd9a30da06f9061($context, $indent, $value);
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fb267db574a5346cd226f0f734191a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <p>{{{copyright_footer}}}</p>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2811536f4dab98eea1a71dd61e8f4d9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73b31f47268accbdfb78bb8755351f5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbdd972a7d0032d3f7261bb4c474a1e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04699c77e2ab190ac4c5fd2845cc5882(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div>{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div>{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div>{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section2811536f4dab98eea1a71dd61e8f4d9e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section73b31f47268accbdfb78bb8755351f5f($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->sectionAbdd972a7d0032d3f7261bb4c474a1e2($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d1a61826bc93f3f7c3728513a5e6353(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc7b6ecaf76ad148f4c82cc7d6ca1dee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <div id="footer">
      <div class="footer-main">
      <div class="container-fluid">
      <div id="course-footer">{{{ output.course_footer }}}</div>
          <div class="row">

          <div class="col-md-5">
              <div class="infoarea">
              {{#footlogo}}
              {{#logourl}}
              <div class="footer-logo">
                  <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
              </div>
              {{/logourl}}

              {{/footlogo}}
                  {{{footnote}}}
            </div>
          </div>

          <div class="col-md-3">
              <div class="foot-links">
              {{# infolink}}
              <h2>{{#str}} info, theme_academi {{/str}}</h2>
              <ul>
                  {{{infolink}}}
              </ul>
              {{/ infolink}}
            </div>
          </div>
          {{#block3}}
          <div class="col-md-4">
            <div class="contact-info">
              <h2 class="nopadding">{{#str}} contact_us, theme_academi {{/str}}</h2>

              <p>{{# address}}{{address}}{{/ address}}<br>
              {{# phoneno}}
                <i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}<br>
              {{/ phoneno}}
              {{# emailid}}
                <i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a><br>
              {{/ emailid}}
              </p>

            </div>
          {{# socialurl}}
            <div class="social-media">
              <h6>{{#str}} followus, theme_academi {{/str}}</h6>
              <ul>
              {{# fburl}}
                  <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
              {{/ fburl}}
              {{# pinurl}}
                <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
              {{/ pinurl}}
              {{# twurl}}
                  <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
              {{/ twurl}}
              {{# gpurl}}
                  <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
              {{/ gpurl}}
              </ul>
            </div>
          {{/ socialurl}}
          </div>
          {{/block3}}
        </div>
      </div>
    </div>

      <div class="footer-bootom">
        {{# copyright_footer}}
          <p>{{{copyright_footer}}}</p>
        {{/ copyright_footer}}
        {{! Moodle footer debug footer }}
        <div class="footer-content-debugging py-sm-3">
            <div class="container">
                {{{ output.debug_footer_html }}}
            </div>
        </div>
      </div>

      {{! Moodle footer help icon popover }}
      <div data-region="footer-container-popover">
        <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="{{#str}}showfooter, theme_boost{{/str}}">
            {{#pix}}e/question, core{{/pix}}
        </button>
      </div>
      <div class="footer-content-popover container" data-region="footer-content-popover">
        {{# output.has_popover_links }}
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div>{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div>{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div>{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
        {{/ output.has_popover_links }}
        <div class="footer-section p-3 border-bottom">
            <div class="logininfo">
                {{{ output.login_info }}}
            </div>
            <div class="tool_usertours-resettourcontainer">
            </div>

            {{{ output.standard_footer_html }}}
            {{{ output.standard_end_of_body_html }}}
        </div>
        <div class="footer-section p-3">
            <div>{{#str}}poweredbymoodle, core{{/str}}</div>
            {{#output.moodle_release}}
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            {{/output.moodle_release}}
        </div>
      </div>
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <div id="footer">
';
                $buffer .= $indent . '      <div class="footer-main">
';
                $buffer .= $indent . '      <div class="container-fluid">
';
                $buffer .= $indent . '      <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '          <div class="row">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          <div class="col-md-5">
';
                $buffer .= $indent . '              <div class="infoarea">
';
                $value = $context->find('footlogo');
                $buffer .= $this->sectionAbed382396978ce5cfd48687adc4475d($context, $indent, $value);
                $buffer .= $indent . '                  ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          <div class="col-md-3">
';
                $buffer .= $indent . '              <div class="foot-links">
';
                $value = $context->find('infolink');
                $buffer .= $this->section88e305810c8b3d4b018de1c7b314c552($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $value = $context->find('block3');
                $buffer .= $this->section675af9121a3638dc8bc3cd950eea4902($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <div class="footer-bootom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->section4fb267db574a5346cd226f0f734191a5($context, $indent, $value);
                $buffer .= $indent . '        <div class="footer-content-debugging py-sm-3">
';
                $buffer .= $indent . '            <div class="container">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      <div data-region="footer-container-popover">
';
                $buffer .= $indent . '        <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('pix');
                $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <div class="footer-content-popover container" data-region="footer-content-popover">
';
                $value = $context->findDot('output.has_popover_links');
                $buffer .= $this->section04699c77e2ab190ac4c5fd2845cc5882($context, $indent, $value);
                $buffer .= $indent . '        <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '            <div class="logininfo">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="footer-section p-3">
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('str');
                $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
                $buffer .= '</div>
';
                $value = $context->findDot('output.moodle_release');
                $buffer .= $this->section0d1a61826bc93f3f7c3728513a5e6353($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44cca7cb7eae6e808ea785e5453e43c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
