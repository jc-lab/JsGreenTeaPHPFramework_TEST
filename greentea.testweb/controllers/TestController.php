<?php

class TestController extends \JsGreenTeaPHPFramework\Controller
{
    public function init()
    {
        self::setRoute('', 'viewDefault');
        self::setRoute('/', 'viewDefault2');
        self::setRoute('/{pckey}', 'viewPCKEY');
        self::setRoute('/{pckey}/', 'viewPCKEY');
    }

    public function viewDefault(&$request, &$response, &$parameters)
    {
        return 'default';
    }
    public function viewDefault2(&$request, &$response, &$parameters)
    {
        $localeResolver = self::getAutoWiredObject('localeResolver');
        $locale = $localeResolver->resolveLocale($request);

        $messageSource = self::getAutoWiredObject('messageSource');
        $view = new \JsGreenTeaPHPFramework\ModelAndView();

        $session = $request->getSession();
        $view->addAttribute("sess_test_old", $session->getAttribute('test'));
        $new = date('Y-m-d H:i:s');
        $session->setAttribute('test', $new);
        $view->addAttribute("sess_test_new", $new);

        $view->setViewName('default2');
        $view->addAttribute("test", $messageSource->getMessage('test', ["AAAA", "bBBb"], $locale));
        return $view;
    }
    public function viewPCKEY(&$request, &$response, &$parameters)
    {
        return 'pckey';
    }
}
