<?php
/**
 * Created by WebSee.
 * User: SergeyTigrov
 * Date: 30.05.12
 * Time: 12:15
 */
 
 $domain = 'domain.com';
 
return array(
    'components'=>array(
        'user'=>array(
            'class' => 'WebUser',
            'loginUrl' => array('user/login'),
            //defaultReturnUrl is used instead of returnUrl
            'defaultReturnUrl' => array('user'),
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'autoRenewCookie'=>true,
            'identityCookie' => array('domain' => '.'.$domain),
        ),
        'session' => array(
            'class' => 'Session',
            'connectionID' => 'db',
            'cookieParams' => array('domain' => '.'.$domain),
            'autoStart' => false,
        ),
    }
}
