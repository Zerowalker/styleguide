<?php

namespace HbgStyleGuide;

class App
{
    protected $default = 'home';
    protected $page = null;

    public function __construct()
    {
        $this->page = isset($_GET['p']) ? $_GET['p'] : $this->default;
        $this->loadPage();
    }

    /**
     * Loads a page and it's navigation
     * @return bool Returns true when the page is loaded
     */
    public function loadPage()
    {
        // Navigation
        $data['topNavigation']                  = Navigation::items('pages/', [], false);
        $data['sideNavigation']                 = Navigation::items('pages/');
        if($this->page == 'home'){
            $data['updates'] = \HbgStyleGuide\Updates::getUpdates();
        }
        //Current page 
        $data['pageNow']                        = $this->page;

        //Component library
        $data['componentLibraryIsInstalled']    = \HbgStyleGuide\Helper\Enviroment::componentLibraryIsInstalled();
        $data['isLocalDomain']                  = \HbgStyleGuide\Helper\Enviroment::isLocalDomain();
        //Render page 
        return \HbgStyleGuide\View::show(
            $this->page,
            $data
        );
    }
}
