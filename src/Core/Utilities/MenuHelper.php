<?php
//
//namespace Thelabdevtz\LaraBase\Core\Utilities;
//
//
//use Thelabdevtz\LaraBase\Core\Menu\MenuManager;
//
//
//class MenuHelper
//{
//    public static function initMenu()
//    {
//        /**
//         * @var User $currentUser
//         */
//        $currentUser = \Auth::user();
//        $menus = config('menu',[]);
//        $menuManager = new MenuManager();
//        $menuManager->setUser($currentUser);
//        $menuManager->addMenus($menus);
//
//        $menus = $menuManager->getFiltered();
//
//        view()->share('nav',$menus);
//    }
//}
