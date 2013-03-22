<?php
namespace ScnSocialAuth\View\Helper;

use Zend\View\Helper\AbstractHelper;

class SocialSignInButton extends AbstractHelper
{
    public function __invoke($provider, $redirect = false)
    {
        $redirectArg = $redirect ? '?redirect=' . $redirect : '';
//        echo
//            '<a class="btn" href="'
//            . $this->view->url('scn-social-auth-user/login/provider', array('provider' => $provider))
//            . $redirectArg . '">' . ucfirst($provider) . '</a>';
//        echo ucfirst($provider);
        if($provider=='facebook'){
            echo '<a href="'.$this->view->url('scn-social-auth-user/login/provider',array('provider'=>$provider)).$redirectArg.'"><img src="/images/fb.jpg"></a>';
        }else if($provider=='linkedIn'){
             echo '<a href="'.$this->view->url('scn-social-auth-user/login/provider',array('provider'=>$provider)).$redirectArg.'"><img src="/images/ln.png"></a>';
        }
    }
}
